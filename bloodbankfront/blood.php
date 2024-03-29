<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <title>Give blood</title>
</head>
<body>
    
<?php include("nav.php");
?>
<br><br>

    <style>
        body, html{
            background-image: url(Image/giveblood.jpg);
            background-repeat: no-repeat;
            background-size: 88% 25rem;
            background-origin: content-box;
            background-position: 5.8rem 5rem;
            /* background-attachment: fixed; */
        }
    </style>

    <div class="headermargin">
        <label class="givebloodheader"><b>GIVE BLOOD SAVE LIVES</b></label><br>
        <div class="bodymargin">
            <label class="gbloodheader">Even a single donation can save lives. Blood gives </label><br>
            <label class="gbloodheader">us energy by bringing oxygen and nutrients to the</label><br>
            <label class="gbloodheader">body's cells. It also carries waste products to the liver </label><br>
            <label class="gbloodheader">and kidneys for removal. Blood contains different types</label><br>
            <label class="gbloodheader"> of cells and other components.</label>
        </div>
    </div>

    <div class="blood-container">
        <div class="doanteblood">   
            <div class="herodoanteblood">
                <img src="Image/blooddonor.png" alt="blooddonor" class="donationbloodlogo"><br>
                <label class="givebloodhead"><b>Blood Donor Form</b></label><br>
            </div><br>
            <label class="givebloodbody">Fill the form below to</label><br>
            <label class="givebloodbody"> donate the blood</label><br>
            <button class="doantebloodbtn"><a href="Donor.php" style="text-decoration: none; color: white;">Form</a></button>
        </div>

    </div>

    <div class="container1">
        <div class="doanteblood">   
            <div class="herodoanteblood">
                <img src="Image/bookpng.parspng.com-5.png" alt="requirements" class="donationbloodlogo1"><br>
                <label class="givebloodhead"><b>Requirements for blood Donation</b></label><br>
            </div><br>
            <label class="givebloodbody">Learn more about the</label><br>
            <label class="givebloodbody">minimum requirement</label><br>
            <label class="givebloodbody">required for blood</label><br>
            <label class="givebloodbody">donation</label>
            <button class="doantebloodbtn1"><a href="Requirement.php" style="text-decoration: none; color: white;">Learn more</a></button>
        </div>

    </div>

    <div class="container1">
        <div class="doanteblood">   
            <div class="herodoanteblood">
                <img src="Image/blood.png" alt="requirements" class="donationbloodlogo"><br>
                <label class="givebloodhead"><b>Learn about blood</b></label><br>
            </div><br>
            <label class="givebloodbody">Discover blood facts</label><br>
            <label class="givebloodbody">and statistics</label>
            <button class="doantebloodbtn"><a href="Bloodinfo.php" style="text-decoration: none; color: white;">Learn more</a></button>
        </div>

    </div>

    <?php include("footer.php");
  ?>

</body>
</html>