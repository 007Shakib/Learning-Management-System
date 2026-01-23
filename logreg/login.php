<?php
session_start();
$conn = new mysqli("localhost","root","","lms_db");

if($conn->connect_error) die("Connection failed: ".$conn->connect_error);

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($user && password_verify($password,$user['password'])){
        $_SESSION['user'] = ['fullname'=>$user['fullname'],'email'=>$user['email'],'user_type'=>$user['user_type']];
        $_SESSION['user_name'] = $user['fullname'];
        header("Location: ../dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - LMS</title>
    <link rel="stylesheet" href="log-reg.css">
</head>
<body>
<div class="auth-bg">
    <div class="auth-box">
        <h2>Login</h2>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p class="switch">Don’t have an account? <a href="register.php">Register</a></p>
    </div>
</div>
</body>
</html>
