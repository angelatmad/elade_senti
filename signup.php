<?php
// signup.php - Process form on the same page

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
        $error_message = 'Passwords do not match. Try again.';
    } else {
        // In a real application, you would:
        // 1. Hash the password (e.g., password_hash($password, PASSWORD_DEFAULT)).
        // 2. Check if the username/email already exists in the database.
        // 3. Insert the new user data into the database.
        
        // Demo success logic:
        $success_message = 'Signup successful! You can now login.';
        // Optionally, redirect to login page after a delay or on click
        header('Refresh: 3; URL=login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Elade's Sentiment</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="login-body">

<div class="signup-box">
    <h2>Create Account</h2>

    <?php if ($error_message): ?>
        <p style="color: red; font-weight: bold; margin-bottom: 15px;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php elseif ($success_message): ?>
        <p style="color: green; font-weight: bold; margin-bottom: 15px;"><?php echo htmlspecialchars($success_message); ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required value="<?php echo isset($fullname) ? htmlspecialchars($fullname) : ''; ?>">
        <input type="email" name="email" placeholder="Email" required value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
        <input type="text" name="username" placeholder="Username" required value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
    </form>

    <a href="login.php">Already have an account?</a>
</div>

</body>
</html>