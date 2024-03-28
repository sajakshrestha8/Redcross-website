<?php 


include("../databaseconn/databaseconn.php");

?>



<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and updates</title>
</head>

<body>
    <!-- <script type=module src=try.js></script>
    <my-header></my-header><br><br> -->

    <style>
        body {
            background-image: url(Image/News-cover-page.jpg);
            background-repeat: no-repeat;
            background-size: 1700px 600px;
            background-origin: content-box;
            background-position: 0px 0px;
            background-attachment: fixed;
        }

        .transparent-backgrouond {
            height: 15rem;
            background-color: black;
            opacity: 0.6;
            padding-top: 6rem;
            padding-left: 15rem;
        }

        .News-cover-text {
            font-size: 50px;
            color: white;
        }

        .news-update {
            padding-top: 1rem;
            padding-bottom: 5rem;
            float: left;
            background-color: rgb(234, 234, 234);
            margin-left: 12rem;
        }

        .News-and-updates {
            font-size: 40px;
            color: rgb(247, 77, 77);
            display: flex;
            justify-content: center;
        }

        .Ememrgency-News-and-updates {
            font-size: 20px;
            color: rgb(247, 77, 77);
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
            flex-wrap: wrap;
            background-color: white;
            /* width: 700px;
            height: 500px; */
        }

        .emergency-news {
            margin-left: 15.5rem;
            background-color: #e5e5e5;
            padding-left: 2rem;
            padding-right: 4rem;
            width: 18rem;
            padding-top: 1rem;
            margin-top: -40.5rem;
            /* top: 0; */
        }

        .emergency-heading {
            font-size: 18px;
            padding-left: 0.1rem;
            padding-top: 1rem;
        }

        .emergency-desc-data {
            display: grid;
            grid-template-columns: 1fr;
        }

        /* .emergency-image{
                display: block;
                margin-left: 3rem;
                background-size: cover;
                width: 30rem;
                height: 20rem;
                aspect-ratio: 4/3 auto;
                margin-top: 2rem;
                z-index: 1;
                margin-bottom: 5rem;
            } */

        .emergency-image-in {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .emergency-desc {
            height: 15rem;
            width: 16rem;
            margin-bottom: 5rem;
            border-radius: 5px;
            border-radius: 5px;
            padding-left: 0.1rem;
            padding-right: 1rem;
            font-size: 12px;
        }
    </style>
    <?php
        include("nav.php");
    ?>
    <div class="transparent-backgrouond">
        <div class="News-cover-text"><label><b>News</b></label></div>
    </div>


    <!-- Starting of news section -->
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
                    <p><?php echo $row['news']; ?></p>
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
        <!-- end of news section -->

        <!-- start of emergency news section -->

        <div class="emergency-news">
            <div>
                <label class="Ememrgency-News-and-updates"><b>Emergency Updates</b></label>
            </div>

            
           
            <div class="emergency-desc-data">
            <?php 
            
            $result = mysqli_query($conn,"SELECT * FROM  eposts ORDER BY id DESC");
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="emergency-desc">
                <h3>Title:</h3>
                <label><b><?php echo $row['title']; ?></b></label>
                <h4>Name:</h4>
                <label><?php echo $row['name']; ?></label>
                <h4>Location:</h4>
                <label><?php echo $row['location']; ?></label>
                <h4>Phone Number:</h4>
                <label ><?php echo $row['phone']; ?></label>
                <h4>Description:</h4>
                <label><?php echo $row['description']; ?>
                </label>
                <hr>
            </div>
                
            <!-- <div class="emergency-desc">
                <h4>Name:</h4>
                <label>Sajak</label>
                <h4>Location:</h4>
                <label>Kathhmandu</label>
                <h4>Phone Number:</h4>
                <label for="">98000000</label>
                <h4>Description:</h4>
                <label>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore non aliquid dolor minus sequi
                    cumque harum praesentium distinctio doloribus, quasi tempora quisquam odio pariatur sed fuga minima
                    deleniti nam perferendis!
                </label>
                <hr> -->
            </div>
            <?php } ?>
        </div>



    </div>

    <!-- End of emergency news section -->

    <?php
        include("footer.php");
    ?>

</html>

