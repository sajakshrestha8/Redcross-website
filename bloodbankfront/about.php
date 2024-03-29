<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css" />
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Give blood</title>
  </head>
  <body>
    <?php
     include("nav.php");
    ?> 
  
  <br /><br />

    <style>
      body,
      html {
        background-image: url(Image/aboutus-coverr.webp);
        background-repeat: no-repeat;
        background-size: 88% 25rem;
        background-origin: content-box;
        background-position: 5.8rem 5rem;
        /* background-attachment: fixed; */
      }

      .aboutus-bg-darkness{
        height: 25rem;
        width: 88%;
        background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(73, 72, 72));
        margin-left: 5.8rem;
        margin-top: 2rem;
        opacity: 0.6;
        padding-top: 0.6rem;
      }

      .aboutus-container-grid{
        display: grid;
        grid-template-rows: 1fr;
        grid-template-columns: 1fr 1fr 1fr;
        gap: -2rem;
      }

      .Aboutintro {
        font-family: Poppins;
        font-size: 40px;
        color: white;
        margin-left: 8rem;
      }

      .paraheader {
        font-family: Poppins;
        font-size: 20px;
        color: white;
        margin-left: 8rem;
      }

      .giveabouthead {
        font-family: Poppins;
        font-size: 20px;
      }

      .hoverbtns {
        background-color: #d12114;
        color: rgb(255, 255, 255);
        border-radius: 5px;
        height: 1.5rem;
        width: 40%;
        margin-left: 6rem;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-top: 3.2rem;
        cursor: pointer;
      }

      .donationbloodlogo1 {
        height: 70px;
        width: 75px;
        border-radius: 50%;
        border: 2px solid red;
        opacity: 50%;
      }

      .giveabouthead {
        font-family: Poppins;
        font-size: 20px;
      }

      .container{
        display: inline-block;
        margin-top: 5rem;
        margin-left: 1rem;
        margin-bottom: 3rem;
        padding-bottom: 3rem;
      }

      .giveaboutbody {
        font-family: Poppins;
        font-size: 15px;
        margin-left: 1rem;
        margin-right: 1rem;
      }

      .ourworklogo {
        height: 70px;
        width: 75px;
        border-radius: 50%;
        border: 2px solid red;
        opacity: 50%;
      }
    </style>
    <div class="aboutus-bg-darkness">
    <div class="headermargin">
      <label class="Aboutintro"><b>ABOUT US</b></label
      ><br />
      <div class="bodymargin">
        <label class="paraheader"
          >At the Red Cross, our mission is multifaceted. </label><br>
        <label class="paraheader"
          >We offer vital services such as disaster response, emergency
          assistance, </label><br>
        <label class="paraheader">
          health and safety education, blood donation programs. </label><br>
        <label class="paraheader">Join us in our mission to make the world a safer, healthier,
        </label>
        <br>
        <label class="paraheader"> and more compassionate place for all.</label>
      </div>
    </div>
  </div>

    <div class="aboutus-container-grid">

    <div class="container">
      <div class="doanteblood">
        <div class="herodoanteblood">
          <img src="Image/work.avif" alt="our work" class="ourworklogo" /><br />
          <label class="giveabouthead"><b>Our works </b></label><br />
        </div>
        <label class="giveaboutbody">We have contributed our efforts to </label>
        <label class="giveaboutbody">conduct various works listed here.</label>
        <button class="hoverbtns">
          <a href="ourwork.php" style="text-decoration: none; color: white">Learn more..</a>
        </button>
      </div>
    </div>

    <div class="container">
      <div class="doanteblood">
        <div class="herodoanteblood">
          <img src="Image/bookpng.parspng.com-5.png" alt="requirements" class="donationbloodlogo1"><br>
          <label class="giveabouthead"><b>Who we are??</b></label>
        </div>
        <label class="giveaboutbody">Learn more about Who we are in</label><br>
        <label class="giveaboutbody">terms of an organization</label>
        <button class="hoverbtns">
          <a href="whoweare.php" style="text-decoration: none; color: white">Learn more..</a>
        </button>
      </div>
    </div>

    <div class="container">
      <div class="doanteblood">
        <div class="herodoanteblood">
          <img src="Image/blood.png" alt="requirements" class="donationbloodlogo"><br>
          <label class="giveabouthead"><b>career</b></label
          ><br />
        </div>
        <label class="giveaboutbody">career oppurtunity university</label><br />
        <label class="giveaboutbody"> programs</label>
        <button class="hoverbtns">
          <a href="career.php" style="text-decoration: none; color: white"
            >Learn more..</a
          >
        </button>
      </div>
    </div>
  </div>

  <?php include("footer.php");
  ?>

  </body>
</html>
