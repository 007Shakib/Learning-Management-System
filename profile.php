<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /LMS/logreg/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - LMS</title>
  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/includes/page-styles.css">
</head>
<body>
  <header class="header">
    <div class="logo"><a href="/LMS/index.php">LMS</a></div>
    <nav class="nav">
      <a href="/LMS/index.php">Home</a>
      <a href="/LMS/courses/courses.php">Courses</a>
      <a href="/LMS/tutorial/tutorial.php">Tutorial</a>
      <a href="/LMS/certificate/certificate.php">Certificate</a>
      <a href="/LMS/enroll/enroll.php">Enroll</a>
    </nav>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
  </header>

  <main class="page">
    <div class="profile-card">
      <h1>Profile</h1>
      <?php
      $displayName = '';
      if (!empty($_SESSION['user_name'])) {
          $displayName = $_SESSION['user_name'];
      } elseif (!empty($_SESSION['user']) && is_array($_SESSION['user']) && !empty($_SESSION['user']['fullname'])) {
          $displayName = $_SESSION['user']['fullname'];
      } elseif (!empty($_SESSION['user']) && !is_array($_SESSION['user'])) {
          $displayName = $_SESSION['user'];
      }
      ?>
      <p>Welcome, <?php echo htmlspecialchars($displayName); ?>.</p>

      <div class="profile-actions">
        <a href="/LMS/profile_edit.php" class="btn small">Edit Profile</a>
        <a href="/LMS/logreg/logout.php" class="btn small">Log out</a>
      </div>
    </div>
  </main>
</body>
</html>