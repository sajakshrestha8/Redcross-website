<!-- Membership form -->
<?php

    if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['amount'])){

        include ('../databaseconn/databaseconn.php');
        $firstname = $_POST['Fname'];
        $lastname = $_POST['Lname'];
        $email = $_POST['email'];
        $phone = $_POST['contact'];
        $Paddress = $_POST['Paddress'];
        $Taddress = $_POST['Taddress'];
        
        
            $sql = "INSERT INTO `membershiptable` (`firstname`, `lastname`,`email`, `Taddress`, `Paddress`, `contact`) VALUES ('$firstname', '$lastname', '$email', '$Taddress', '$Paddress' , '$phone')";

            $result = mysqli_query($conn,$sql);
        
    }
?>



<!-- Donation form -->
<?php

    // if($_SERVER['REQUEST_METHOD'] == "POST"){

    //     include ('../databaseconn/databaseconn.php');
    //     $firstname = $_POST['Fname'];
    //     $lastname = $_POST['Lname'];
    //     $amount = $_POST['amount'];
    //     $phone = $_POST['contact'];
    //     $Paddress = $_POST['Paddress'];
    //     $Taddress = $_POST['Taddress'];
        
        
    //         $sql = "INSERT INTO `donationtable` (`firstname`, `lastname`,`Paddress`, `phone`, `Donation_received`) VALUES ('$firstname', '$lastname', '$Paddress', '$phone' , '$amount')";

    //         $result = mysqli_query($conn,$sql);
        
    // }
?>




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
        <title>Membership</title>
    </head>
    
    <body>
    <?php include("nav.php");
    ?>    
    <br><br>

        <style>
            body{
                background-image: url(Image/membership.png);
                background-repeat: no-repeat;
                background-size: 88% 25rem;
                background-origin: content-box;
                background-position: 5.8rem 5rem;
            }

            .membership-form-grid{
                display: grid;
                grid-template-columns: 0.7fr 0.7fr 1fr;
                margin-left: 12rem;
            }

            /* .hidden-membership-form{
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 1fr 1fr;
            } */

            .membership-form{
                margin-top: 30rem;
                background-color: #ffffff;
                height: 20rem;
                width: 20rem;
                text-align: center;
                padding-top: 0.5rem;
                border: 1px solid red;
                transition:all 300ms ease;
                margin-bottom: 2rem;
            }

            .membership-form:hover{
                box-shadow: 0 5px 5px 0 rgb(104, 104, 104);
            }

            .membership-form-head{
                font-size: 20px;
                width: 19rem;
                height: 8rem;
                background-color: #e5e5e5;
                margin-left: auto;
                margin-right: auto;
                padding-top: 2rem;
                padding-bottom: 1rem;
            }

            .hidden-form{
                width: 65%;
                margin-left: 16rem;
                display: flex;
                justify-content: center;
                background-color: #f4ebeb;
                border-radius: 10px;
                margin-bottom: 1rem;
            }

            .membership-form-body{
                padding-top: 2rem;
                font-size: 13px;
                line-height: 130%;
                padding-left: 1rem;
                padding-right: 1rem;
                color: rgb(66, 65, 65);
            }

            .membership-button{
                margin-top: 2rem;
                background-color: #E11B22;
                color: white;
                width: 7rem;
                height: 1.5rem;
                border-radius: 5px;
                border: none;
            }

            .close{
                border: none;
                background-color: #f4ebeb;
            }

        </style>
    <div class="membership-form-grid">
        <div class="membership-form">
            <div class="membership-form-head">
            <label><b>Want to be a Redcross member?</b></label>
        </div>
            <div class="membership-form-body">
            <label > Redcross membership leads you to be the member of Nepal Red Cross Society, where you can be involved in multiple Red Cross activities.</label>
        </div>
        <div>
            <button onclick="showForm(1)" class="membership-button"><b>Be a Member</b></button>
        </div>
        </div>

        <div class="membership-form">
            <div class="membership-form-head">
            <label><b>Want to Doante Us?</b></label>
        </div>
            <div class="membership-form-body">
            <label > As Nepal Red Cross Society is a non profitable organization donation is the major way of income in Redcross for multiple task and projects</label>
        </div>
        <div>
            <button onclick="showForm(2)" class="membership-button"><b>Doante Us</b></button>
        </div>
        </div>

        <div class="membership-form">
            <div class="membership-form-head">
            <label><b>Want to be a Red Cross Volunter?</b></label>
        </div>
            <div class="membership-form-body">
            <label > Red Cross volunteer helps the Nepal Red Cross Society during the needed time like natural disasters and organizing the different Campaings.</label>
        </div>
        <div>
            <button onclick="showForm(3)" class="membership-button"><b>Be a Member</b></button>
        </div>
        </div>
        </div>
       

        <!-- Form for Redcross membership -->
        <div class="hidden-membership-form">
        <div class="hidden-form">
        <form id="RC" method="post">
            <button onclick="closeForm()" class="close"><svg xmlns="http://www.w3.org/2000/svg" height="34" viewBox="0 -960 960 960" width="34"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></button>

            <h2 class="formheader">Redcross Membership</h2>
            <h3>Personal details</h3><br>
            <label>Name: </label>
            <input type="text" id=" Fname" name="Fname" placeholder="First Name">
            <input type="text" id=" Lname" name="Lname" placeholder="Last Name"><br><br>

            <label>Email: </label>
            <input type="email" id="email" name="email" placeholder="Email"><br><br>

            <label for="Number">Phone number:</label>
            <input type="tel" id="number" name="contact"><br><br>

            <label for="receipt">Payment Receipt:</label>
            <input type="file" name="pay" id="pay">
            <div>
            <!-- Temporary address -->
            <div class="temp">
            <h3>Temporary Address</h3>

            <!-- <label>Zone</label>
            <select name="zone" id="zone">
                <option value="Mahakali">Mahakali</option>
                <option value="Seti">Seti</option>
                <option value="Karnali">Karnali</option>
                <option value="Bheri">Bheri</option>
                <option value="`Rapti">Rapti</option>
                <option value="Dhawaligiri">Dhawaligiri</option>
                <option value="Lumbini">Lumbini</option>
                <option value="Gandaki">Gandaki</option>
                <option value="Bagmati">Bagmati</option>
                <option value="Narayani">Narayani</option>
                <option value="Janakpur">Juanakpur</option>
                <option value="Sagarmatha">Sagarmatha</option>
                <option value="Koshi">Koshi</option>
                <option value="Mechi">Mechi</option>
            </select><br><br>

            <label>DISTRICT:</label>
            <input type="text" alt="DISTRICT" id="DISTRICT"><br><br>

            <label>Village/ Municipality: </label>
            <input type="text" id="village"><br><br>

            <label>Tole: </label>
            <input type="text" id="tole"><br><br>

            <label>Village/ Municipality: </label>
            <input type="text" id="village"><br><br> -->

            <input type="text" name="Taddress" id="Taddress">
            
        
    </div>

    <!-- permanent address -->
    <div class="perm">
    <h3>Permanent Address</h3>

    <!-- <label>Zone</label>
    <select name="zone" id="zone">
        <option value="Mahakali">Mahakali</option>
        <option value="Seti">Seti</option>
        <option value="Karnali">Karnali</option>
        <option value="Bheri">Bheri</option>
        <option value="`Rapti">Rapti</option>
        <option value="Dhawaligiri">Dhawaligiri</option>
        <option value="Lumbini">Lumbini</option>
        <option value="Gandaki">Gandaki</option>
        <option value="Bagmati">Bagmati</option>
        <option value="Narayani">Narayani</option>
        <option value="Janakpur">Juanakpur</option>
        <option value="Sagarmatha">Sagarmatha</option>
        <option value="Koshi">Koshi</option>
        <option value="Mechi">Mechi</option>
    </select><br><br>

    <label>DISTRICT</label>
    <input type="text" alt="DISTRICT" id="DISTRICT"><br><br>

    <label>Village/ Municipality: </label>
    <input type="text" id="village"><br><br>

    <label>Tole: </label>
    <input type="text" id="tole"><br><br>

    <label>Village/ Municipality: </label>
    <input type="text" id="village"><br><br> -->

    <input type="text" name="Paddress" id="Paddress">
    </div><br><br>

</div>
    <button class="formsubmit" type="submit" name="submit">Submit</button>
</form>
</div>

<!-- Form for Donation -->
<div class="donationform">
    <form id="RC1" method="post">

        <h2 class="formheader">Donation Form</h2>
        <label class="labelhead"><b>Donation Amount</b></label><br>
        <input type="text" id="amount" name="amount" placeholder="Rupee" required class="moneyinput"><br>
        <label class="label">Donation</label><br><br>
        <label class="labelhead"><b>Credit Card Details</b></label><br>
        <input type="text" id="fname" name="Fname" placeholder="First Name" class="moneyinput">
        <input type="text" id="Laname" name="Lname" placeholder="Last Name" class="moneyinput">
        <input type="text" name="Cnummber" id="Cnummber" placeholder="1234 1234 1234 1234" class="moneyinput">
        <input type="text" id="Edate" placeholder="MM/YY" class="moneyinput">
        <select name="Bloodgroup" id="Group" class="CountryO">
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Afganistan">Afganistan</option>
            <option value="Japan">Japan</option>
        </select><br><br>

        <label class="labelhead"><b>Full Name</b></label><br>
        <input type="text" id="Firstname" class="moneyinput">
        <input type="text" id="Lastname" class="moneyinput">
        <label class="label">First name</label>
        <label class="label">Last Name</label><br><br>

        <label class="labelhead"><b>Address</b></label><br>
        <select name="zone" id="zone" class="CountryO">
            <option value="Mahakali">Mahakali</option>
            <option value="Seti">Seti</option>
            <option value="Karnali">Karnali</option>
            <option value="Bheri">Bheri</option>
            <option value="`Rapti">Rapti</option>
            <option value="Dhawaligiri">Dhawaligiri</option>
            <option value="Lumbini">Lumbini</option>
            <option value="Gandaki">Gandaki</option>
            <option value="Bagmati">Bagmati</option>
            <option value="Narayani">Narayani</option>
            <option value="Janakpur">Juanakpur</option>
            <option value="Sagarmatha">Sagarmatha</option>
            <option value="Koshi">Koshi</option>
            <option value="Mechi">Mechi</option>
        </select><br>
        <label class="label">zone</label>

        <input type="text" id="Municipality" class="CountryO"><br>
        <label class="label">Village/Municipality</label><br>

        <input type="text" class="moneyinput" id="Tole">
        <input type="text" class="moneyinput" id="Tole"><br>

        <label class="label">Tole</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label id="HouseN" class="label">House Number</label><br><br>

        <label for="email" class="labelhead"><b>E-mail</b></label><br>
        <input type="email" id="Demail" class="moneyinput" placeholder="example@example.com"><br><br>

        <label for="contact" class="labelhead"><b>Contact</b></label><br>
        <input type="int" id="contact" name="contact" class="contact"><br><br>


       <button class="formsubmit" name="submit">Submit</button>
    </form>
</div>

<!-- Form for Volunteer -->


<div class="hidden-form">
    <form id="RC2">

        <h2 class="formheader">Volunter?</h2>
        <h3>Personal details</h3>
        <label>Name: </label>   
        <input type="text" id=" Fname" name="Fname" placeholder="First Name">
        <input type="text" id=" Lname" name="Lname" placeholder="Last Name"><br><br>

        <label>Email: </label>
        <input type="email" id="email" name="email" placeholder="Email"><br><br>

        <label for="Number">Phone number:</label>
        <input type="tel" id="number" name="contact"><br><br>

        <div>
        <!-- Temporary address -->
        <div class="temp">
        <h3>Temporary Address</h3>

        <label>Zone</label>
        <select name="zone" id="zone">
            <option value="Mahakali">Mahakali</option>
            <option value="Seti">Seti</option>
            <option value="Karnali">Karnali</option>
            <option value="Bheri">Bheri</option>
            <option value="`Rapti">Rapti</option>
            <option value="Dhawaligiri">Dhawaligiri</option>
            <option value="Lumbini">Lumbini</option>
            <option value="Gandaki">Gandaki</option>
            <option value="Bagmati">Bagmati</option>
            <option value="Narayani">Narayani</option>
            <option value="Janakpur">Juanakpur</option>
            <option value="Sagarmatha">Sagarmatha</option>
            <option value="Koshi">Koshi</option>
            <option value="Mechi">Mechi</option>
        </select><br><br>

        <label>DISTRICT</label>
        <input type="text" alt="DISTRICT" id="DISTRICT"><br><br>

        <label>Village/ Municipality: </label>
        <input type="text" id="village"><br><br>

        <label>Tole: </label>
        <input type="text" id="tole"><br><br>

        <label>Village/ Municipality: </label>
        <input type="text" id="village"><br><br>
    
</div>

<!-- permanent address -->
<div class="perm">
<h3>Permanent Address</h3>

<label>Zone</label>
<select name="zone" id="zone">
    <option value="Mahakali">Mahakali</option>
    <option value="Seti">Seti</option>
    <option value="Karnali">Karnali</option>
    <option value="Bheri">Bheri</option>
    <option value="`Rapti">Rapti</option>
    <option value="Dhawaligiri">Dhawaligiri</option>
    <option value="Lumbini">Lumbini</option>
    <option value="Gandaki">Gandaki</option>
    <option value="Bagmati">Bagmati</option>
    <option value="Narayani">Narayani</option>
    <option value="Janakpur">Juanakpur</option>
    <option value="Sagarmatha">Sagarmatha</option>
    <option value="Koshi">Koshi</option>
    <option value="Mechi">Mechi</option>
</select><br><br>

<label>DISTRICT</label>
<input type="text" alt="DISTRICT" id="DISTRICT"><br><br>

<label>Village/ Municipality: </label>
<input type="text" id="village" required><br><br>

<label>Tole: </label>
<input type="text" id="tole" required><br><br>

<label>Village/ Municipality: </label>
<input type="text" id="village" required><br><br>
</div>

</div>
<button class="formsubmit" type="submit">Submit</button>
</form>
</div>
</div>

<script>
    var btn = document.getElementById('RC');
    var btn1 = document.getElementById('RC1');
    var btn2 = document.getElementById('RC2');
    
    btn.style.display = "none";
    btn1.style.display = "none";
    btn2.style.display = "none";

    function showForm(x){
        if(x==1){
            btn.style.display = "block";
            btn1.style.display = "none";
            btn2.style.display = "none";
        }  
        else if(x==2) {
            btn.style.display = "none";
            btn1.style.display = "block";
            btn2.style.display = "none";
        }
        else if (x==3) {
            btn.style.display = "none";
            btn1.style.display = "none";
            btn2.style.display = "block";
        }

        function closeForm(){
            const form = document.getElementById(RC);
            RC.style.display = "none"; 
        }
    };
</script>       
</div>

<?php include("footer.php");
  ?>

   </body>     
</html>