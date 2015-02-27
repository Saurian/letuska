<?php
/**
 * This file is part of the vanocni_soutez
 * Copyright (c) 2014
 *
 * @file    Authorizator.php
 * @author  Pavel Paulík <pavel.paulik1@gmail.com>
 */

namespace AppModule\Security;


use Nette\Security\Permission;

class Authorizator extends Permission
{


    public function __construct()
    {
        // roles
        $this->addRole('guest');
        $this->addRole('member', 'guest');
        $this->addRole('admin');
        $this->addRole('developer', 'admin');

        // resources
        $this->addResource('App:Homepage');
        $this->addResource('App:Error');
        $this->addResource('Cms:User');
        $this->addResource('Devrun');

        // privileges quest
        $this->deny('guest', Permission::ALL);
        $this->allow('guest', 'App:Error', Permission::ALL);
        $this->allow('guest', 'App:Homepage', Permission::ALL);
        $this->allow('guest', 'Cms:User', 'login');

        // $this->allow('member', 'guest');

        // privileges admin
        $this->allow('admin', Permission::ALL, Permission::ALL);

        // privileges devrun
        $this->allow('developer', Permission::ALL, Permission::ALL);
    }
}

