<?php
require_once './inc/config.php';
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEDEL | მარტივი სოციალური ქსელი</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="main">
    <div class="container">

        <?php if (!isset($_SESSION['userid'])) : ?>

            <div class="row justify-content-md-center my-5">
                <div class="col-sm-6 border border-primary shadow rounded p-4 text-center">
                    <h3>KEDEL</h3>
                    <h6 class="text-secondary pb-3">მარტივი სოციალური ქსელი</h6>
                    <a href="registration.php" class="btn btn-primary">რეგისტრაცია</a>
                    <a href="login.php" class="btn btn-secondary">შესვლა</a>
                </div>
            </div>

        <?php else: ?>

            <div class="row header-nav">
                <div class="col-md-4">
                    <a href="post.php">POST</a>
                </div>
                <div class="col-md-4">
                    <a href="index.php">FEED</a>
                </div>
                <div class="col-md-4">
                    <a href="profile.php">PROFILE</a>
                </div>
            </div>

        <?php endif; ?>

    </div>
</body>
</html>
