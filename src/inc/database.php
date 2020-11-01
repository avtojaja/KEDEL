<?php

class DB {
    protected $mysqli;

    function __construct($host, $user, $pass, $name)
    {
        $this->mysqli = new mysqli($host, $user, $pass, $name);

        if ($this->mysqli->connect_error) {
            die('Connect Error: ' . $this->mysqli->connect_error);
        }
    }
}
