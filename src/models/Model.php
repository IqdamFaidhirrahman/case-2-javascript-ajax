<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $config = require 'src/core/Config.php';
        $this->db = new PDO("mysql:host={$config['database']['host']};dbname={$config['database']['name']}", $config['database']['username'], $config['database']['password']);
    }
}