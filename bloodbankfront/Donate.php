<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
        <title>Donation</title>
    </head>
    
    <body>
        <?php include("nav.php");
        ?>
       

        <style>
            body{
                background-image: url(Image/Moneydonationimage.jpg);
                margin-top: 0px;
                background-repeat: no-repeat;
                opacity: 100%;
                background-size: 1700px 600px; 
          }
        </style>
        </div> <br>   
        <div class="donationform">
            <form>

                <h2 class="formheader">Donation Form</h2>
                <label class="labelhead"><b>Donation Amount</b></label><br>
                <input type="text" id="amount" placeholder="Rupee" required class="moneyinput"><br>
                <label class="label">Donation</label><br><br>
                <label class="labelhead"><b>Credit Card Details</b></label><br>
                <input type="text" id="fname" placeholder="First Name" class="moneyinput">
                <input type="text" id="Laname" placeholder="Last Name" class="moneyinput">
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
                <label class="label">First name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

               <button class="formsubmit">Submit</button>
            </form>
        </div>

        <?php include("footer.php");
        ?>

    </body>

</html>