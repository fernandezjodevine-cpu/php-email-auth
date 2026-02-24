<?php include 'views/templates/header.php'; ?>

<h3>Email Verification</h3>

<?php if ($message === true): ?>
    <p class="success">Your account has been successfully verified!</p>
    <a href="index.php?action=login">
        <button>Login Now</button>
    </a>
<?php else: ?>
    <p class="error">Invalid or expired verification link.</p>
<?php endif; ?>

<?php include 'views/templates/footer.php'; ?>