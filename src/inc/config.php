<?php

// prepare database configuration
$DB = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'kedel',
];

// include required files
require_once 'database.php';

// connect to the database
$db = new DB($DB['host'], $DB['user'], $DB['pass'], $DB['name']);
