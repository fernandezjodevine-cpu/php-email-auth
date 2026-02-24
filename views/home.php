<?php include 'views/templates/header.php'; ?>

<h3>Welcome</h3>

<p>You are logged in as:</p>
<strong><?php echo $_SESSION['user']; ?></strong>

<br><br>

<a href="index.php?action=logout">
    <button>Logout</button>
</a>

<?php include 'views/templates/footer.php'; ?>