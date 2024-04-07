<?php 
include("connect.php");
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM kullanicilar WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            echo '<script>alert("Giriş başarılı");</script>';
            header("Location: success.php");
        }else{
            echo '<script>alert("Şifre hatalı");</script>';
        }
    }
    else{
        echo '<script>alert("Kullanıcı bulunamadı");</script>';
    }
}
if(isset($_POST['remember-me'])){
    setcookie("username", $username, time() + 60*60*24*30);
    setcookie("password", $password, time() + 60*60*24*30);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="index.php" method="post">
            <!-- Form Header -->
            <h1>Login</h1>

            <!-- Username -->
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            
            <!-- Password -->
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <!-- Remember me and Forgot password -->
            <div class="remember-forgot">
                <label>
                    <input type="checkbox" id="remember" name="remember-me"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="login">Login</button>

            <div class="register-link">
                <p>Don't have account? <a href="register.php">Register</a></p>
            </div>
            
        </form>
    </div>
</body>
</html>