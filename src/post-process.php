<?php
require_once './inc/config.php';

if (!isset($_SESSION['userid'])) {
    header('Location: ./index.php');
    exit;
}

if (isset($_POST['post'])) {
    if ($post = $db->add_post($_SESSION['userid'], $_POST['post'])) {
        header('Location: ./index.php');
        exit;
    }
    else {
        header('Location: ./post.php?error=1');
        exit;
    }
}
