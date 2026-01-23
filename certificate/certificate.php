<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS | Certificates</title>

  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/certificate/certificate.css">
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
    <a href="#" class="home">Certificate</a>
    <a href="/LMS/enroll/enroll.php">Enroll</a>
  </nav>

  <div class="auth">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
  </div>
</header>

<section class="certificates">
  <h2 class="section-title">Your Certificates</h2>

  <div class="certificate-container">

    <div class="certificate-card">
      <img src="htm.jpg" alt="Certificate 1">
      <h3>HTML Fundamentals</h3>
      <p>Earned after completing the HTML course.</p>
    </div>

    <div class="certificate-card">
      <img src="cs.png" alt="Certificate 2">
      <h3>CSS Mastery</h3>
      <p>Earned after completing the CSS course.</p>
    </div>

    <div class="certificate-card">
      <img src="img_javascript_480.jpg" alt="Certificate 3">
      <h3>JavaScript Basics</h3>
      <p>Earned after completing the JS course.</p>
    </div>

  </div>
</section>

<script src="/LMS/particles.js-master/particles.min.js" defer></script>
<script src="/LMS/script.js" defer></script>

</body>
</html>
