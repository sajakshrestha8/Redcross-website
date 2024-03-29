<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include("nav.php");
?>
<br><br>
    
    <div class="requirement-background">
        <!-- Health slogan by Mr. SAJAK SHRESTHA -->
        <label class="requirement-head"><b>HEALTHY BLOOD GOOD FOR BETTER HEALTH</b></label> 
    </div><br>

    <style>
        .requirement-background{
            background-image: url(Image/requirement.png);
            background-repeat: no-repeat;
            margin-left: 2rem;
            margin-right: 2rem;
            margin-top: 2rem;
            height: 25rem;
            background-size: 100% 30rem;
            padding-top: 7rem;
        }

        
        .requirement-background{
            font-family: Poppins;
            font-size: 40px;
            color: white;
           padding-left: 50rem;
           text-align: center;
        }

        .grid{
            margin-left: 2rem;
            margin-right: 2rem;
            margin-top: 2rem;
        }

    </style>

    <div class="requirementhead">
        <label><b>Requirements for blood donation</b></label><br>
    </div>

    <div class="requirementbody">
        <label>To ensure the safety of both patients and donors, these are someof the requirements donors must
            meet to be eligible to donate blood based on their donation type. To explore a list of eligibility information</label>
    </div>


    <div class="grid">
        
        <div class="border">
            <img src="Image/Age.jpg" alt="CPR" class="CPRdesc-img">
        </div>
            <div class="msg-margin">
                <label class="CPR-msg-head"><b>AGE</b></label><br>  <br>
                <label class="CPR-msg">- Typically, donors need to be within a certain age range. In many places, individuals between the ages of 17 and 65 are eligible to donate. Some countries may have different age limits, and there may be variations for first-time donors. </label>
            </div>
            
            
                <div class="msg-margin">
                    <label class="CPR-msg-head"><b>WEIGHT</b></label><br>  <br>
                    <label class="CPR-msg">- Donors often need to meet a minimum weight requirement, usually around 50 kilograms (110 pounds). This helps ensure the donor's well-being and reduces the risk of adverse effects due to blood loss.</label><br>
                </div>

                <div>
                    <img src="Image/weight.jpg" alt="CPR" class="CPRdesc-img">
                </div>

                <div class="border">
                    <img src="Image/health.webp" alt="CPR" class="CPRdesc-img">
                </div>
                    <div class="msg-margin">
                        <label class="CPR-msg-head"><b>HEALTH</b></label><br>  <br>
                        <label class="CPR-msg">- Donors should be in good health on the day of donation. They should not have any acute illnesses, infections, or conditions that might affect the safety of the donor or the quality of the donated blood.</label>
                    </div>
                    
                    
                        <div class="msg-margin">
                            <label class="CPR-msg-head"><b>MEDICAL HISTORY</b></label><br>  <br>
                            <label class="CPR-msg">-Donors typically undergo a brief medical history review to assess any risk factors or conditions that might affect the suitability of their blood for donation. It's important to provide accurate information about your health and any medications you may be taking.</label><br>
                        </div>
        
                        <div>
                            <img src="Image/Medical History.jpeg" alt="CPR" class="CPRdesc-img">
                        </div>

                        <div class="border">
                            <img src="Image/travel-history.jpg" alt="CPR" class="CPRdesc-img">
                        </div>
                            <div class="msg-margin">
                                <label class="CPR-msg-head"><b>TRAVEL HISTORY</b></label><br>  <br>
                                <label class="CPR-msg">- Some locations may have restrictions based on recent travel, especially to areas with a higher risk of certain infections or diseases. This is to ensure the safety of the blood supply.</label>
                            </div>
                            
                            
                                <div class="msg-margin">
                                    <label class="CPR-msg-head"><b>Lifestyle and Behaviors</b></label><br>  <br>
                                    <label class="CPR-msg">- Certain lifestyle factors or behaviors, such as recent drug use or high-risk sexual activity, may affect eligibility. Honest and accurate reporting is crucial for the safety of both the donor and the recipient.</label><br>
                                </div>
                
                                <div>
                                    <img src="Image/lifestyle.jpg" alt="CPR" class="CPRdesc-img">
                                </div>
                </div>
                <?php include("footer.php");
  ?>
</body>
</html>