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
  <title>LMS | Tutorials</title>

  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/tutorial/tutorial.css">
  <link rel="shortcut icon" href="/LMS/images/programming_2620993.png">
</head>

<body>

<div id="particles-js"></div>

<header class="header">
  <div class="logo"><a href="/LMS/index.php">LMS</a></div>

  <nav class="nav">
    <a href="/LMS/index.php">Home</a>
    <a href="/LMS/courses/courses.php">Courses</a>
    <a href="#" class="home">Tutorial</a>
    <a href="/LMS/certificate/certificate.php">Certificate</a>
    <a href="/LMS/enroll/enroll.php">Enroll</a>
  </nav>

  <div class="auth">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
  </div>
</header>

<section class="tutorials">
  <h2 class="section-title">Video Tutorials</h2>

  <div class="tutorial-container">

    <div class="tutorial-card">
      <h3>HTML Full Course</h3>
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/ok-plXXHlWw"
          allowfullscreen></iframe>
      </div>
    </div>

    <div class="tutorial-card">
      <h3>CSS Complete Guide</h3>
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/OEV8gMkCHXQ"
          allowfullscreen></iframe>
      </div>
    </div>

    <div class="tutorial-card">
      <h3>JavaScript Basics</h3>
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/DHjqpvDnNGE"
          allowfullscreen></iframe>
      </div>
    </div>

  </div>
</section>

<script src="/LMS/particles.js-master/particles.min.js" defer></script>
<script src="/LMS/script.js" defer></script>

</body>
</html>
