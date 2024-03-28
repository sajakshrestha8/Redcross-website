<?php
    include("databaseconn/databaseconn.php");
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $name = $_POST["name"];
        $location = $_POST["location"];
        $phone = $_POST["phone"];
        $description = $_POST["description"];
        

        $query = "INSERT INTO eposts(`id`,`title`, `name`,`location`, `phone`, `description`,`date`) VALUES ('','$title','$name','$location','$phone','$description',current_timestamp())";
            mysqli_query($conn,$query);
            echo"
                <script>
                    alert ('Successfully Added');
                    document.location.href = 'enewsadmin.php';
                </script>";
        }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style/menubarstyle.css"> -->
    <title>News/Posts</title>
</head>
<body>
    <section id="newsportal">
        <div class="add_news">
            <!-- <h3>NEWS/POSTS</h3> -->
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                
                <label>TITLE:</label>
                <input type="text" name="title" id="title" colspan="30" placeholder="Enter the title here.....">

                <label>Name:</label>
                <input type="text" name="name" id="name">

                <label>Location:</label>
                <textarea name="location" id="location" cols="30" rows="10"></textarea>

                <label>Phone</label>
                <input type="text" id="phone" name="phone" colspan="30" placeholder="Enter the writer name here.....">

                <label>Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>

                <button type="submit" name="submit" class="submit">SUBMIT</button>
            </form>
        </div>
    </section>



    <style>
                
        #newsportal{
            max-width: 100%;
            display: flex;
        }
        #newsportal input,select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        #newsportal input:focus,select:focus,textarea:focus{
            border-color: #1e88e5;
            box-shadow: 0 0 3px 2px rgba(30, 136, 229, 0.5);
        }

        #newsportal textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            /* background-color: #f8f8f8; */
            resize: none;
        }

        #newsportal button{
            background-color: #5b7b2c;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }
        #newsportal button:hover{
            background-color: green;
            color: #ffffff;
        }

        /* button{
            background-color: #04aa6d;
            border: none;
            border: 2px solid #04aa6d;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 10px;
        } */


    </style>
</body>
</html>