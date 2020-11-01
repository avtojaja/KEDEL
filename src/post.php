<?php
require_once './inc/config.php';
$db->require_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEDEL | Create new post</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="post">
    <div class="container">
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

        <div class="row justify-content-md-center">
            <div class="col-md-12 px-0 py-4">
                <h3 class="header pb-3">Create new post</h3>
                <form action="post-process.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="form-group">
                            <textarea class="form-control" id="post" name="post" rows="3" placeholder="What do you think right now ?"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success">
                                <i class="fas fa-paper-plane"></i>
                                <span>Post it!</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="static/js/main.js"></script>
</body>

</html>
