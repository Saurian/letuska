<?php
/*
 *
 */

namespace TravelPortModule\Tools\Console\Command;

use Kdyby\Doctrine\DuplicateEntryException;
use Kdyby\Doctrine\EntityManager;
use Nette\DI\Container;
use Nette\Utils\Json;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command to import airports
 *
 */
class ImportAirPortsCommand extends Command
{
    const ITEMS = 3000;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('travel:import-airports')
            ->setDescription('Import AirPorts.')
            ->setDefinition(array(
                new InputOption(
                    'truncate', null, InputOption::VALUE_NONE,
                    'If defined, all data will be cleared.'
                ),
            ))
            ->setHelp(<<<EOT
'Generate Object classes from XSD TravelPort structure.'
EOT
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var EntityManager $em */
        $em   = $this->getHelper('em')->getEntityManager();
        $conn = $em->getConnection();
        $exit = 0;

        if ($input->getOption('truncate')) {
            $conn->prepare("SET FOREIGN_KEY_CHECKS = 0")->execute();
            $conn->prepare("TRUNCATE TABLE airport")->execute();
            $conn->prepare("TRUNCATE TABLE airport_lang")->execute();
            $conn->prepare("SET FOREIGN_KEY_CHECKS = 1")->execute();
            $output->writeln('<info>[Truncate] OK - The airports was cleared.</info>');
            return $exit;
        }

        /** @var Container $container */
        $container = $this->getHelper('container')->getContainer();

        if (file_exists($path = $container->getParameters()['airports'])) {
            $iterate = $container->getParameters()['importItems'] ? $container->getParameters()['importItems'] : self::ITEMS;
            $lines   = file($path, FILE_IGNORE_NEW_LINES);
            $langs   = array('en', 'cs', 'hu', 'bg', 'sk', 'ru', 'uk', 'pl', 'fr', 'es', 'de', 'it', 'pt');

            $conn->prepare("START TRANSACTION")->execute();

            $sql  = "SELECT MAX(id) FROM airport";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $max = $stmt->fetchColumn() ?: 0;
            $key = -1;

            foreach ($lines as $key => $line) {
                if ($key < $max) continue;
                if ($iterate-- <= 0) break;

                $dLine = Json::decode($line);

                $lat = isset($dLine->gps)
                    ? $dLine->gps->lat
                    : 'NULL';

                $lon = isset($dLine->gps)
                    ? $dLine->gps->lon
                    : 'NULL';

                try {
                    $sql = "INSERT INTO airport (iata, country_code, city_code, lat, lon) VALUES (:iata, :countryCode, :cityCode, :lat, :lon)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue("iata", $dLine->iata);
                    $stmt->bindValue("countryCode", $dLine->countryCode);
                    $stmt->bindValue("cityCode", $dLine->cityCode);
                    $stmt->bindValue("lat", $lat);
                    $stmt->bindValue("lon", $lon);
                    $stmt->execute();
                    $lastId = $conn->lastInsertId();

                } catch (DuplicateEntryException $exc) {
                    continue;
                }

                foreach ($langs as $lang) {
                    if (isset($dLine->$lang)) {
                        $sql = "INSERT INTO airport_lang (lang, country_name, city_name, name, pattern, airport_id) VALUES (:lang, :countryName, :cityName, :name, :pattern, :airportId)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindValue("lang", $lang);
                        $stmt->bindValue("countryName", $dLine->$lang->countryName);
                        $stmt->bindValue("cityName", $dLine->$lang->cityName);
                        $stmt->bindValue("name", $dLine->$lang->name);
                        $stmt->bindValue("pattern", $dLine->$lang->pattern);
                        $stmt->bindValue("airportId", $lastId);
                        $stmt->execute();

                    }
                }
            }
            $conn->prepare("COMMIT")->execute();

            if ($key < count($lines) - 1) {
                $output->writeln("<error> generate not complete [" . $key . " / " . count($lines) . " is needed]</error>");
                $exit += 1;
                return $exit;
            }

            $output->writeln('<info>[Import]  OK - The airport is all loaded.</info>');
            return $exit;
        }

        $exit += 2;
        $output->writeln("<error> file $path not found </error>");

        return $exit;
    }
}
