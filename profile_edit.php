<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /LMS/logreg/login.php');
    exit();
}

// Simple profile edit stub - you can expand this to save profile changes.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Example: update name in session for demo
    if (!empty($_POST['name'])) {
        $_SESSION['user_name'] = $_POST['name'];
        $message = 'Profile updated.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile - LMS</title>
  <link rel="stylesheet" href="/LMS/style.css">
  <link rel="stylesheet" href="/LMS/includes/page-styles.css">
</head>
<body>
  <header class="header">
    <div class="logo"><a href="/LMS/index.php">LMS</a></div>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/LMS/includes/auth_links.php'; ?>
  </header>

  <main class="page">
    <div class="profile-card">
      <h1>Edit Profile</h1>
    <?php if (!empty(
        isset($message) ? $message : ''
    )): ?>
      <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <?php
    $currentName = '';
    if (!empty($_SESSION['user_name'])) {
        $currentName = $_SESSION['user_name'];
    } elseif (!empty($_SESSION['user']) && is_array($_SESSION['user']) && !empty($_SESSION['user']['fullname'])) {
        $currentName = $_SESSION['user']['fullname'];
    }
    ?>
    <form method="post">
      <label for="name">Full name</label><br>
      <input id="name" name="name" value="<?php echo htmlspecialchars($currentName); ?>"><br><br>
      <button type="submit" class="btn green">Save</button>
    </form>
    <p><a href="/LMS/profile.php">Back to profile</a></p>
    </div>
  </main>
</body>
</html>