<?php
include_once('functions/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <h1>Hello</h1>
    <?php if(isLoggedIn()): ?>
        <p>Welcome Back!</p>
        <a href="logout.php">logout</a>
    <?php else: ?>
        <p>Please Log in</p>
        <a href="login.php">Login</a>
        <p>Or register</p>
        <a href="register.php">Register</a>
    <?php endif; ?>

</body>
</html>