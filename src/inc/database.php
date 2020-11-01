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

    function add_post($user_id, $post)
    {
        $newpost = false;

        $query = "
            INSERT INTO posts (
                user_id,
                post
            ) VALUES (
                '$user_id',
                '$post'
            )
        ";

        if ($this->mysqli->query($query)) {
            $newpost = $this->mysqli->insert_id;
        }

        return $newpost;
    }

    function get_user($user_id)
    {
        $user = false;

        $query = "
            SELECT
                users.*
            FROM users
            WHERE
                users.id = '$user_id'
            LIMIT 1
        ";

        if ($result = $this->mysqli->query($query)) {
            $user = $result->fetch_object();
            $result->close();
        }

        return $user;
    }

    function update_user($user_id, $phone, $password)
    {
        $user = false;

        $query = "
            UPDATE
                users
            SET
                phone = '$phone',
                password = '$password'
            WHERE
                id = '$user_id'
        ";

        if ($this->mysqli->query($query)) {
            $user = $user_id;
        }

        return $user;
    }
}
