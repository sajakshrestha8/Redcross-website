<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        include ('databaseconn/databaseconn.php');
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $exists = false;
        if(($password == $cpassword) && $exists == false){
            $sql = "INSERT INTO `login` (`userName`, `password`, `date`, `first_name`, `last_name`) VALUES ( '$username', '$password', current_timestamp(), '$fname', '$lname');";

            $result = mysqli_query($conn,$sql);

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/signupstyle.css"> -->
    <title>Signup</title>
</head>
<body>
    <div class="box">
        <h2>ADD USER</h2>
        <form action="adduseradmin.php" method="post">
            <div class="input-box">
                <label >First Name:</label>
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <label >Last Name:</label>
                <input type="text" name="lname" id="lname" placeholder="Last Name">
            </div>
            <div class="input-box">
                <label >User Name:</label>
                <input type="text" name="username" id="username" placeholder="UserName"><br>
                <label >Password:</label>
                <input type="text" name="password" id="password" placeholder="Password"><br>
                <label >Confirm Password:</label>
                <input type="text" name="cpassword" id="cpassword" placeholder="Confirm Password"><br>
                <span> * Please make sure to type the same password.</span>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins",sans-serif;
        }
        /* body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;  
        } */

        .box{
            width: 500px;  
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            min-height: 80vh;    

        }
        .box h2{
            text-align: center;
            font-size: 26px;

        }
        .box input{
            width: 100%;
            position: relative;
            padding: 20px 40px;
            margin: 10px;
            border: 2px solid #333;
            border-radius: 40px;
            font-size: 16px;
            background: transparent;
        }

        .input-box span{
            width: fit-content;
            font-size: 12px;
            color: #f50606;
            margin-left: 20px;
            padding: 20px;
        }
        .box button{
            width: 100%;
            height: 45px;
            background: #333;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
        }
        .box button:hover{
            background-color: rgb(14, 251, 132);
        }
    </style>
</body>
</html>