<?php
require_once './inc/config.php';

if (!isset($_SESSION['userid'])) {
    header('Location: ./index.php');
    exit;
}

if (!$user = $db->get_user($_SESSION['userid'])) {
    header('Location: ./index.php');
    exit;
}

if (isset($_POST['phone'], $_POST['current_password'], $_POST['new_password'], $_POST['repeat_password'])) {

    $current_password = $user->password;

    if ($current_password !== $_POST['current_password']) {
        header('Location: ./profile.php?error=1');
        exit;
    }

    if (!empty($_POST['new_password']) && !empty($_POST['repeat_password'])) {
        if ($_POST['new_password'] !== $_POST['repeat_password']) {
            header('Location: ./profile.php?error=2');
            exit;
        }
        else {
            $current_password = $_POST['new_password'];
        }
    }

    if ($user = $db->update_user($_SESSION['userid'], $_POST['phone'], $current_password)) {
        header('Location: ./profile.php?error=0');
        exit;
    }
    else {
        header('Location: ./profile.php?error=3');
        exit;
    }
}
