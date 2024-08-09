<?php

namespace App\Libraries;

use \PHPAuth\Config as PHPAuthConfig;
use \PHPAuth\Auth as PHPAuth;

class AuthLibrary
{
    protected $auth;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $config = new PHPAuthConfig($db->connID);
        $this->auth = new PHPAuth($db->connID, $config);
    }

    public function getAuth()
    {
        return $this->auth;
    }
}
