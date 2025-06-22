<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="../scss/main.css" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <form action="" class="login-content"method="POST">
            <input type="email" placeholder="Username" name="username">
            <input type="text" placeholder="Password" name="password">
            <input type="submit" class="btn-light" value="Log in" name="submit">
            <?php
              include '../inc/class.php';
              $log_in = New HandlerCHI();
              $log_in->DBconnect();
              $log_in->LogIn();
             ?>
        </form>
    </div>
</body>

</html>
