<?php
require_once './inc/config.php';

if ($db->is_logged_in()) {
    header('Location: ./index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEDEL-ზე შესვლა</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="login">
    <div class="container">
        <div class="row justify-content-md-center my-5">
            <div class="col-sm-6 border border-primary shadow rounded p-4">
                <h3 class="header pb-3">KEDEL-ზე შესვლა</h3>
                <form action="login-process.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">ელ. ფოსტა</label>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control notempty" placeholder="მიუთითეთ ელ. ფოსტა" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">პაროლი</label>
                            <input type="password" name="password" id="password" class="form-control notempty" placeholder="***********" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success">შესვლა</button>
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
