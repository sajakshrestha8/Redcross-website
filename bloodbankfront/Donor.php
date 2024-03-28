<?php
    include("../databaseconn/databaseconn.php");

    if(isset($_POST['submit'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $fullname = $fname . $lname;
        $email = $_POST['email'];
        $bloodgroup = $_POST['bloodgroup'];
        $phone = $_POST['contact'];
        $Taddress = $_POST['Taddress'];
        $Paddress = $_POST['Paddress'];

        $sql = "INSERT INTO `blooddonation` (`fullname`, `email`, `bloodgroup`, `phone`, `Taddress`, `Paddress`, `date`) VALUES ('$fullname', '$email', '$bloodgroup', '$phone', '$Taddress', '$Paddress', current_timestamp())";

        $result = mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("nav.php"); ?>
    <br><br>

    <div class="Donor-form">
        <div class="black-border">
            <label class="donateform-note-head"><b>GIVE BLOOD </b></label><br>
            <label class="donateform-note-head"><b>SAVE LIVES</b></label>
        </div>
    </div><br>

    <label class="giveblood-heading"><b>Fill the Form to be a Blood Donation Member</b></label><br>

    <div class="form">
        <form id="RC1" method="post">
    
            <h2 class="formheader">Blood Donation Membership</h2>
            <h3>Personal details</h3>
            <label>Name: </label>
            <input type="text" id="fname" name="fname" placeholder="First Name" required class="input-text">
            <input type="text" id="lname" name="lname" placeholder="Last Name" required class="input-text"><br><br>
    
            <label>Email: </label>
            <input type="email" id="email" name="email" placeholder="Email" required class="input-text"><br><br>
    
            <label>Blood Group:</label>
            <select name="bloodgroup" id="bloodgroup" class="input-text">
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br><br>
    
            <label for="Number">Phone number:</label>
            <input type="tel" id="number" name="contact" class="input-text"><br><br>

            <div>
                <!-- Temporary address -->
                <div class="temp">
                    <label>Temporary Address</label>
                    <input type="text" name="Taddress" id="Taddress" class="input-text">
                </div>
    
                <!-- permanent address -->
                <div class="perm">
                    <label>Permanent Address</label>
                    <input type="text" name="Paddress" id="Paddress" class="input-text">
                </div>
            </div>
    
            <button class="formsubmit" type="submit" name="submit">Submit Form</button>
        </form>
    </div>

    <style>
        .Donor-form {    
            background-image: url(Image/Donate-blood.webp);
            background-repeat: no-repeat;
            background-size: 100% 40rem;
            height: 25rem;
            margin-top: 3rem;
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .black-border {
            height: 100%;
            width: 50%;
            background-color: black;
            opacity: 0.8;
            padding-top: 5rem;
        }

        .donateform-note-head {
            font-family: Poppins;
            font-size: 60px;
            color: white;
            padding-left: 5rem;
        }

        .giveblood-heading {
            font-family: Poppins;
            font-size: 40px;
            padding-left: 20rem;  
        }

        input {
            height: 1.7rem;
            border-radius: 5px;
            border-top: none;
            border-left: none;
            transition: all 300ms ease;
            padding-left: 0.3rem;
        }

        input:hover {
            box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.54);
            -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.54);
            -moz-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.54);
        }
    </style>

    <?php include("footer.php"); ?>
</body>
</html>