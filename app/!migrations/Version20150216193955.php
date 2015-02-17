<?php

namespace TravelPortMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150216193955 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE airport (id INT AUTO_INCREMENT NOT NULL, iata VARCHAR(3) NOT NULL, lat NUMERIC(8, 5) DEFAULT NULL, lon NUMERIC(8, 5) DEFAULT NULL, country_code VARCHAR(2) NOT NULL, city_code VARCHAR(3) NOT NULL, UNIQUE INDEX UNIQ_7E91F7C25F992BBE (iata), INDEX cityCode_idx (city_code, country_code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE airport_lang (id INT AUTO_INCREMENT NOT NULL, airport_id INT DEFAULT NULL, lang VARCHAR(2) NOT NULL, city_name VARCHAR(255) NOT NULL, country_name VARCHAR(255) NOT NULL, pattern VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_A925E763289F53C8 (airport_id), INDEX lang_idx (lang), INDEX country_idx (city_name, country_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, iata VARCHAR(3) NOT NULL, lat NUMERIC(8, 5) DEFAULT NULL, lon NUMERIC(8, 5) DEFAULT NULL, country_code VARCHAR(2) NOT NULL, UNIQUE INDEX countryCode_idx (country_code, iata), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city_lang (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, lang VARCHAR(2) NOT NULL, country_name VARCHAR(255) NOT NULL, pattern VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D247B90AF92F3E70 (country_id), INDEX lang_idx (lang), INDEX country_idx (name, country_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, continent_code VARCHAR(2) NOT NULL, top TINYINT(1) DEFAULT NULL, lat NUMERIC(8, 5) DEFAULT NULL, lon NUMERIC(8, 5) DEFAULT NULL, INDEX continentCode_idx (continent_code, top), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country_lang (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, lang VARCHAR(2) NOT NULL, continent_name VARCHAR(255) NOT NULL, pattern VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_B63A0F86F92F3E70 (country_id), INDEX lang_idx (lang), INDEX country_idx (name, continent_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE airport_lang ADD CONSTRAINT FK_A925E763289F53C8 FOREIGN KEY (airport_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE city_lang ADD CONSTRAINT FK_D247B90AF92F3E70 FOREIGN KEY (country_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE country_lang ADD CONSTRAINT FK_B63A0F86F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE airport_lang DROP FOREIGN KEY FK_A925E763289F53C8');
        $this->addSql('ALTER TABLE city_lang DROP FOREIGN KEY FK_D247B90AF92F3E70');
        $this->addSql('ALTER TABLE country_lang DROP FOREIGN KEY FK_B63A0F86F92F3E70');
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE airport_lang');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE city_lang');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE country_lang');
    }
}
