<?php

    require_once ('databaseconn/databaseconn.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
    

    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$query);
    
    if($result->num_rows == 1 ){
        // header("Location:../../projectV/admindash/admindash.php");
        // header("Location:admincontent/menubar.php");
        header("Location:admincontent/homeadmin.php");
        exit();
    }else{
        echo "failed";
        
    }
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/loginstyle.css">
</head>
<body>
    <section class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <img src="image/user.png" alt="user" width="30px" height="30px">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <img src="image/lock.png" alt="password">
            </div>
            
            <button type="submit" class="btn">LOGIN</button>
        </form>
    </section>
</body>
</html>