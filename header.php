<?php
session_start();
?>

<nav>
    <ul>
        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
            <li><a href="tourist_areas.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'tourist_areas.php' ? 'active' : ''; ?>">Tourist Areas</a></li>
            <li><a href="php/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="register.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>">Register</a></li>
            <li><a href="login.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
