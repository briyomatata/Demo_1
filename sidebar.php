<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<nav class="sidebar">
    <div class="logo-area">
        <h3>Laiser Hill SDA</h3>
    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Welcome</a></li>
        <!-- <li><a href="profile.php" class="nav-item <?php echo ($current_page == 'profile.php') ? 'active' : ''; ?>">My Profile</a></li> -->
        <li><a href="sabbath.php" class="nav-item <?php echo ($current_page == 'sabbath.php') ? 'active' : ''; ?>">Sabbath Program</a></li>
        <li><a href="departments.php" class="nav-item <?php echo ($current_page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
        <li><a href="devotional.php" class="nav-item <?php echo ($current_page == 'devotional.php') ? 'active' : ''; ?>">Devotional</a></li>
        <li><a href="hymnal.php" class="nav-item <?php echo ($current_page == 'hymnal.php') ? 'active' : ''; ?>">Hymnal & Bible</a></li>
        <li><a href="sermons.php" class="nav-item <?php echo ($current_page == 'sermons.php') ? 'active' : ''; ?>">Sermons</a></li>
        <li><a href="finance.php" class="nav-item <?php echo ($current_page == 'finance.php') ? 'active' : ''; ?>">Finances</a></li>
        <li><a href="feedback.php" class="nav-item <?php echo ($current_page == 'feedback.php') ? 'active' : ''; ?>">Feedback</a></li>
    </ul>
</nav>