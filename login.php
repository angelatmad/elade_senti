<?php
// later we can add session logic in here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Elade's Sentiment</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="login-body">

<div class="login-box">
    <h2>Login</h2>

    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Log In</button>
    </form>

    <a href="signup.php">Sign Up</a>
    <a href="forgot_password.php">Forgot Password?</a>
</div>

</body>
</html>
