
<?php include('../includes/header.php'); ?>
<div class="container">
    <h2>Admin Login</h2>
    <form  method="post" action="admin_login_process.php"  >
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    <a class="back-button" href="../index.php">← Back to Home</a>
</div>

<?php include('../includes/footer.php'); ?>
