<?php include 'views/templates/header.php'; ?>

<h3>Register</h3>

<?php if (!empty($message)): ?>
    <p class="error"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="index.php?action=register">
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Register</button>
</form>

<p>
    Already have an account?
    <a href="index.php?action=login">Login</a>
</p>

<?php include 'views/templates/footer.php'; ?>