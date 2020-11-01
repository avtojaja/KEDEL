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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEDEL | Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body class="profile">
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
                <h3 class="header pb-3">
                    <span>Your Profile:</span>
                    <strong><?php echo $_SESSION['username']; ?></strong>
                </h3>
                <form action="profile-process.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" id="email" class="form-control" value="<?php echo $user->email; ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="font-weight-bold">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control notempty" placeholder="(500)-(0000000)" value="<?php echo $user->phone; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="current_password" class="font-weight-bold">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control notempty" placeholder="***********" required>
                        </div>

                        <div class="form-group">
                            <label for="new_password" class="font-weight-bold">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control notempty" placeholder="***********">
                        </div>

                        <div class="form-group">
                            <label for="repeat_password" class="font-weight-bold">Repeat new Password</label>
                            <input type="password" name="repeat_password" id="repeat_password" class="form-control notempty" placeholder="***********">
                            <em class="pass-no-match"><span class="text-danger">Passwords does not match!</span></em>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                                <span>Save</span>
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
