<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn about Blood</title>
</head>
<body>
    <script src="try.js"></script>
    <my-header></my-header><br><br><br>

    <div class="text-container">
        <p class="container-quote"><b>A PINT OF SWEAT, SAVES A GALLON OF BLOOD</b></p>
    </div>

    <div class="learnblood-contains">
        <label class="learnblood-head"><b>What is blood?</b></label>
        <iframe class="yt-video-learnblood"
                src="https://www.youtube.com/watch?v=Op1bt4RFp-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                </iframe> <br>
                <div class="body-margin">
                    <label class="learnblood-body">
                    Blood is a vital fluid that circulates throughout the human and many animal bodies, transporting essential substances to various parts of the organism. It plays a crucial role in maintaining homeostasis, providing oxygen and nutrients to cells, removing waste products, and supporting the immune system.</label>
                </div><br>

                <label class="learnblood-head"><b>IMPORTANCE OF BLOOD SUPLY</b></label>
                <div class="body-margin">
                    <label class="learnblood-body">Blood suply in very crucial and impotant for various reasons like Emergency suitation, Maternal and child health, Disease treatment, Natural disaster, Infectious diseases, Surgical procedure, Community health program, Preventing shortage and so on.</label>
                </div>

                <div class="want-to-donate">
                    <label class="donate-head">Ready to donate?</label>
                    <a href="Donor.php"><button class="secendory-donate"><b>Donate Blood</b></button></a>
                </div>
    </div>

    <div></div>
    <style>
        body{
            background-image: url(Image/bloodinfo.jpg);
            background-repeat: no-repeat;
            background-size: 95% 25rem;
            background-position: 2.5rem 5rem; 
        }

        .text-container{
            height: 25rem;
            width: 40%;
            /* background-color: black; */
            margin-top: 0.5rem;
            margin-left: 2.5rem;
            padding-top: 3rem;
            padding-left: 2rem;
        }

        .container-quote{
            font-size: 60px;
            color: #ffffff;
        }

        .learnblood-contains{
            padding-top: 2rem;
            width: 92%;
            height: 100%;
            background-color: #e5e5e5e5;
            margin-left: 3.9rem;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
        }

        .learnblood-head{
            font-size: 45px;    
            display: grid;
            justify-content: center;
        }

        .yt-video-learnblood{
            margin-left: 11.5rem;
            height: 20rem;
            width: 65rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .body-margin{
            margin-left: 8rem;
            margin-right: 8rem;
            text-align: center;
        }
        .learnblood-body{
            font-size: 20px;
            color: rgb(111, 107, 107);
        }

        .want-to-donate{
            height: 100%;
            width: 20rem;
            margin-left: 34rem;
            background-color: #ffffff;
            padding-top: 1rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            padding-bottom: 1rem;
        }

        .donate-head{
            font-size: 20px;
            display: grid;
            justify-content: center;
        }

        .secendory-donate{
            margin-left: 6rem;
            background-color: #E11B22 ;
            color: #ffffff;
            height: 1.8rem;
            width: 7rem;
            border-radius: 5px;
        }   
    </style>

<?php include("footer.php");
  ?>
</body>
</html>