<?php
if (session_status() == PHP_SESSION_NONE) session_start();

if (isset($_SESSION['user'])) {
    echo '<div class="auth">';
    echo '<a href="/LMS/profile.php">Profile</a>';
    echo '</div>';
} else {
    echo '<div class="auth">';
    echo '<a href="/LMS/logreg/login.php">Login</a>';
    echo '<a href="/LMS/logreg/register.php">Register</a>';
    echo '</div>';
}
?>