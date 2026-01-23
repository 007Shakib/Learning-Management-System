<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ../logreg/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS | Enroll</title>

  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/enroll/enroll.css">
  <link rel="shortcut icon" href="/LMS/images/programming_2620993.png">
</head>
<body>

<div id="particles-js"></div>

<header class="header">
  <div class="logo"><a href="/LMS/index.php">LMS</a></div>

  <nav class="nav">
    <a href="/LMS/index.php">Home</a>
    <a href="/LMS/courses/courses.php">Courses</a>
    <a href="/LMS/tutorial/tutorial.php">Tutorial</a>
    <a href="/LMS/certificate/certificate.php">Certificate</a>
    <a href="#" class="home">Enroll</a>
  </nav>

  <div class="auth">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
  </div>
</header>

<section class="enroll">
  <h2 class="section-title">Enroll Now</h2>
  <p class="subtitle">Fill the details to join our courses and start learning today!</p>

  <div class="enroll-form-container">
    <form class="enroll-form">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Your Email" required>

      <label for="course">Select Course</label>
      <select id="course" name="course" required>
        <option value="">--Choose Course--</option>
        <option value="html">HTML Fundamentals</option>
        <option value="css">CSS Mastery</option>
        <option value="js">JavaScript Basics</option>
        <option value="web">Full Web Project</option>
      </select>

      <button type="submit" class="btn green">Enroll Now</button>
    </form>
  </div>
</section>

<script src="/LMS/particles.js-master/particles.min.js" defer></script>
<script src="/LMS/script.js" defer></script>

</body>
</html>
