<?php include 'views/templates/header.php'; ?>

<h3>Login</h3>

<?php if (!empty($message)): ?>
    <p class="error"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="index.php?action=login">
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Login</button>
</form>

<p>
    Don't have an account?
    <a href="index.php?action=register">Register</a>
</p>

<?php include 'views/templates/footer.php'; ?>