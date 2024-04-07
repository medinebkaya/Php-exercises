<?php 
include("connect.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO kullanicilar (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    echo '<script>';
    if ($result) {
        echo 'alert("Kayıt Başarılı");';
        echo 'window.location.href = "index.php";';
    } else {
        echo 'alert("Kayıt Başarısız");';
    }
    echo '</script>';
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
        <form action="register.php" method="post">
            <!-- Form Header -->
            <h1>Register</h1>

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

            <!-- Email -->
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bx-mail-send'></i>
            </div>
            
            <button type="submit" class="btn" name="login">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="index.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
