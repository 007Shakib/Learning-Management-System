<?php
session_start();
$conn = new mysqli("localhost","root","","lms_db");

if($conn->connect_error) die("Connection failed: ".$conn->connect_error);

if(isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $user_type = $_POST['user_type'];

    if($password !== $confirm){
        $error = "Passwords do not match!";
    } else {
        $check = $conn->prepare("SELECT * FROM users WHERE email=?");
        $check->bind_param("s", $email);
        $check->execute();
        $result = $check->get_result();
        
        if($result->num_rows > 0){
            $error = "Email already registered!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $stmt = $conn->prepare("INSERT INTO users (fullname, email, password, user_type) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $fullname, $email, $hashed_password, $user_type);
            
            if($stmt->execute()){
                $_SESSION['user'] = ['fullname'=>$fullname, 'email'=>$email, 'user_type'=>$user_type];
                header("Location: ../dashboard.php");
                exit();
            } else {
                $error = "Registration failed!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register - LMS</title>
    <link rel="stylesheet" href="log-reg.css">
</head>
<body>
<div class="auth-bg">
    <div class="auth-box">
        <h2>Register</h2>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="POST" action="">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <select name="user_type" required>
                <option value="student">Student</option>
                <option value="instructor">Instructor</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" name="register">Create Account</button>
        </form>
        <p class="switch">Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>
