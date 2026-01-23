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
  <title>LMS | Courses</title>

  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/courses/courses.css">
  <link rel="shortcut icon" href="/LMS/images/programming_2620993.png">

</head>
<body>

<div id="particles-js"></div>

<header class="header">
  <div class="logo"><a href="/LMS/index.php">LMS</a></div>

  <nav class="nav">
    <a href="/LMS/index.php">Home</a>
    <a href="#" class="home">Courses</a>
    <a href="/LMS/tutorial/tutorial.php">Tutorial</a>
    <a href="/LMS/certificate/certificate.php">Certificate</a>
    <a href="/LMS/enroll/enroll.php">Enroll</a>
  </nav>

  <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
</header>

<section class="courses">
  <h2 class="section-title">Our Popular Courses</h2>

  <div class="course-container">

    <div class="course-card">
      <h3>HTML Fundamentals</h3>
      <p>Learn the structure of modern web pages.</p>
      <button class="btn green">Start Course</button>
    </div>

    <div class="course-card">
      <h3>CSS Mastery</h3>
      <p>Build beautiful and responsive layouts.</p>
      <button class="btn green">Start Course</button>
    </div>

    <div class="course-card">
      <h3>JavaScript Basics</h3>
      <p>Add interactivity and logic to websites.</p>
      <button class="btn green">Start Course</button>
    </div>

    <div class="course-card">
      <h3>Full Web Project</h3>
      <p>Create real-world projects step by step.</p>
      <button class="btn green">Start Course</button>
    </div>

  </div>
</section>

<script src="/LMS/particles.js-master/particles.min.js" defer></script>
<script src="/LMS/script.js" defer></script>

</body>
</html>
