<?php
  include("../databaseconn/databaseconn.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="nav.js"></script>
        <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
        <link rel="stylesheet" href="style.css" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    
    <body>
      <?php include("nav.php");
      ?>
      <br><br><br>

      <script src="search.js"></script>
      <my-search></my-search>


      <style>
          body{
          background-image: url(Image/frontimg1.jpeg);
          background-repeat: no-repeat;
          background-size: 95% 50rem;
          background-position: 2.5rem 5rem;
        }

        .index-news{
          height: 100%;
          width: 100%;
          object-fit: fill;
        }
        .new_image{
          height: 400px;
          width: 100%;
          /* object-fit: cover;
          object-position: center; */
        }
        .news-update {
            padding-top: 1rem;
            padding-bottom: 5rem;
            float: left;
            /* background-color: rgb(234, 234, 234); */
            margin-left: 9rem;
        }

        .News-and-updates {
            font-size: 40px;
            color: rgb(247, 77, 77);
            display: flex;
            justify-content: center;
        }
        .news-desc {
            height: 8rem;
            width: 30rem;
            text-align: justify;
            margin-top: -10rem;
            margin-left: 15rem;
            margin-bottom: 5rem;
            background: rgb(255, 255, 255);
            position: absolute;
            border-radius: 5px;
            padding-top: 0.5rem;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .news-content {
            position: relative;
        }

        .news-image {
            width: 60%;
            height: 90%;
            border-radius: 5px;
        }

        .news-heading {
            font-size: 30px;
            display: flex;
            justify-content: center;
        }

        .news-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: white;
            margin-left: -8rem;
            /* width: 700px;
            height: 500px; */
        }
      </style>

    <div class="headermargin1">
      <label class="givebloodheader1"><b>Give your hands to </b></label><br>
      <label class="givebloodheader1"><b>serve, and your</b></label><br>
      <label class="givebloodheader1"><b>hearts to love</b></label>
    <div class="bodymargin1">
      <label class="gbloodheader1">True service is not merely an external act but stems</label><br>
      <label class="gbloodheader1"> from a heart filled with love and compassion. By </label><br>
      <label class="gbloodheader1">offering our hands to serve others, we can transform  </label><br>
      <label class="gbloodheader1">lives and nurture a more compassionate world.</label><br>
    </div>
    </div>

        </style>  
        <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->

    <?php 
    
  //   $result = mysqli_query($conn,"SELECT * FROM  uploadimage ORDER BY id DESC");
  //   while($row = mysqli_fetch_assoc($result)) {
  // ?>



  <!-- //   <div class="mySlides fade">
  //     <div class="numbertext">2 / 3</div>
  //     <a href="News.html">
  //     <img src='../img/<?php echo $row['image']; ?>' class="new_image">
  //   </a>
  //     <div class="text"><?php echo $row['description']; ?></div>
  //   </div> -->


    <!-- <?php  ?> -->
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <a href="News.html"><img src="image/Volunteer_Convention_2023_Cover.jpg"class="index-news"></a>
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
  </div>
  <script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>



<h1 style="text-align: center;">News and Updates</h1>
    <div class="news-grid">

      <?php 

      $result = mysqli_query($conn,"SELECT * FROM  newsandposts ORDER BY sn DESC");
      while($row = mysqli_fetch_assoc($result)) {
      ?>
    


    <div class="news-update">
        <div>
            <label class="News-and-updates"><b><?php echo $row['title']; ?></b></label>
        </div>
        <label style="text-align: left; font-family: Poppins; padding-top: 1rem;" class="news-heading"><?php echo $row['title']; ?></label>
        
        <div class="news-content">
            <div class="news">
                <!-- <img src="Image/Rcampaign.jpg" alt="news 1" class="news-image"> -->
                <img src='../newsimg/<?php echo $row['newImageName']; ?>' class="new_image" width="450px" height="350px">
            </div>
            <div class="news-desc">
                <p><p><?php echo $row['news']; ?></p></p>
            </div>
        </div>

        <!-- <label style="text-align: left; font-family: Poppins;"
            class="news-heading">Volunteer_Convention_2023</label>
        <div class="news">
            <img src="image/Volunteer_Convention_2023_Cover.jpg" alt="news 1" class="news-image">
        </div>
        <div class="news-desc">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio accusantium exercitationem voluptas
                nostrum fugit voluptatem? Explicabo odio dolor accusantium dicta tenetur. Voluptatem, blanditiis!
                Perspiciatis nulla dolor a, omnis quia sed!</p>
        </div> -->
    </div>


    <?php } ?>
    
    </div>
    <?php 
        include("footer.php");
    ?>

      
    </body>
</html>