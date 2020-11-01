<?php
require_once './inc/config.php';

if ($db->is_logged_in()) {
    header('Location: ./index.php');
    exit;
}

if (isset($_POST['email'], $_POST['password'])) {
    if ($user = $db->login($_POST['email'], $_POST['password'])) {
        $_SESSION['userid'] = $user->id;
        $_SESSION['username'] = $user->username;
        header('Location: ./index.php');
        exit;
    }
    else {
        header('Location: ./login.php?error=1');
        exit;
    }
}
