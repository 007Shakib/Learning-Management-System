<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: logreg/login.php");
    exit();
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
        <title>Dashboard - LMS</title>
        <link rel="stylesheet" href="/LMS/style.css">
        <link rel="stylesheet" href="/LMS/includes/page-styles.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <header class="header">
        <div class="logo"><a href="/LMS/index.php">LMS</a></div>
        <nav class="nav">
            <a href="/LMS/index.php">Home</a>
            <a href="/LMS/courses/courses.php">Courses</a>
            <a href="/LMS/tutorial/tutorial.php">Tutorials</a>
            <a href="/LMS/certificate/certificate.php">Certificate</a>
            <a href="/LMS/enroll/enroll.php">Enroll</a>
        </nav>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
    </header>

    <main class="page">
        <div class="dashboard-card">
            <h2>Welcome, <?php echo htmlspecialchars($user['fullname']); ?>!</h2>
            <p>User Type: <?php echo htmlspecialchars(ucfirst($user['user_type'])); ?></p>
        </div>

        <section class="dashboard-grid">
            <div class="dashboard-card">
                <h3>Your Courses</h3>
                <p>Quick access to enrolled courses.</p>
                <a class="btn small" href="/LMS/courses/courses.php">View Courses</a>
            </div>
            <div class="dashboard-card">
                <h3>Tutorials</h3>
                <p>Browse tutorials and videos.</p>
                <a class="btn small" href="/LMS/tutorial/tutorial.php">View Tutorials</a>
            </div>
            <div class="dashboard-card">
                <h3>Certificates</h3>
                <p>View your earned certificates.</p>
                <a class="btn small" href="/LMS/certificate/certificate.php">View Certificates</a>
            </div>
        </section>
    </main>
</body>
</html>
