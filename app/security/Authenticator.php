<?php

namespace AppModule\Security;

use Nette,
    Nette\Security\Passwords;


/**
 * Users authenticator.
 */
class Authenticator extends Nette\Object implements Nette\Security\IAuthenticator
{
    const
        TABLE_NAME           = 'user',
        COLUMN_ID            = 'id',
        COLUMN_NAME          = 'username',
        COLUMN_ROLE          = 'role',
        COLUMN_PASSWORD_HASH = 'password';


    private function findByLogin($username)
    {
        return $username == 'devrun'
            ? array(self::COLUMN_ID => 1, self::COLUMN_NAME => 'devrun', self::COLUMN_ROLE => 'developer', self::COLUMN_PASSWORD_HASH => sha1('123123'))
            : null;
    }


    /**
     * Performs an authentication.
     *
     * @param array $credentials
     *
     * @throws \Nette\Security\AuthenticationException
     * @return Nette\Security\Identity
     */
    public function authenticate(array $credentials)
    {
        list($username, $password) = $credentials;

        /** @var $row UserManager */
        $row = $this->findByLogin($username);

        if (!$row) {
            throw new Nette\Security\AuthenticationException('Neplatné přihlašovací údaje', self::IDENTITY_NOT_FOUND);

        } elseif ($username !== $row[self::COLUMN_NAME]) {
            throw new Nette\Security\AuthenticationException('Neplatné přihlašovací údaje', self::INVALID_CREDENTIAL);

        } elseif (sha1($password) !== $row[self::COLUMN_PASSWORD_HASH]) {
            throw new Nette\Security\AuthenticationException('Neplatné přihlašovací údaje', self::INVALID_CREDENTIAL);
        }

        $arr = $row;
        unset($arr[self::COLUMN_PASSWORD_HASH]);
        return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
    }


    /**
     * Adds new user.
     *
     * @param  string
     * @param  string
     *
     * @return void
     */
    public function add($username, $password)
    {
        $this->database->table(self::TABLE_NAME)->insert(array(
            self::COLUMN_NAME          => $username,
            self::COLUMN_PASSWORD_HASH => Passwords::hash($password),
        ));
    }


}
