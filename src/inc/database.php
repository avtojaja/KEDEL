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

    function login($email, $password)
    {
        $user = false;

        $query = "
            SELECT
                users.*
            FROM users
            WHERE
                users.email = '$email'
            AND users.password = '$password'
            LIMIT 1
        ";

        if ($result = $this->mysqli->query($query)) {
            $user = $result->fetch_object();
            $result->close();
        }

        return $user;
    }
}
