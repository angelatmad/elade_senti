<?php
// forgot_password.php - Process form on the same page

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    // In a real application, you would:
    // 1. Check if the email exists in the database.
    // 2. Generate a unique token.
    // 3. Store the token and expiry time in the database linked to the user's account.
    // 4. Send an email to the user containing a link with the token.
    
    // For this demo, we just set a success message.
    $message = "A password reset link has been sent to $email (demo only).";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - Elade's Sentiment</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="login-body"> <div class="login-box"> <h2>Reset Password</h2>
    
    <?php if ($message): ?>
        <p style="color: green; font-weight: bold; margin-bottom: 15px;"><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter your Email" required>
        <button type="submit">Send Reset Link</button>
    </form>

    <a href="login.php">Back to Login</a>
</div>

</body>
</html>