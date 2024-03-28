<?php
    include("databaseconn/databaseconn.php");
    if(isset($_POST["submit"])){
        $category = $_POST["category"];
        $title = $_POST["title"];
        $news = $_POST["news"];
        $author = $_POST["author"];
        if($_FILES["image"]["error"] === 4){
            echo "
            <script>
                alert ('Image doesnot exist');
            </script>";
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtention = ['jpg','jpeg','png','JPG','JPEG','PNG'];
            $imageExtention = explode('.',$fileName);
            $imageExtention = strtolower(end($imageExtention));

            if(!in_array($imageExtention, $validImageExtention)){
                echo "
                <script>
                    alert ('Invalid Image Extention');
                </script>";
            }
            elseif($fileSize > 2097152){
                echo "
                <script>
                    alert ('File is too large');
                </script>";
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtention;

                move_uploaded_file($tmpName, '../newsimg/' . $newImageName);

                $query = "INSERT INTO newsandposts VALUES ('','$category','$title','$news','$author','$newImageName')";
                mysqli_query($conn,$query);
                echo"
                <script>
                    alert ('Successfully Added');
                    document.location.href = 'newsadmin.php';
                </script>";
            }
        }
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
                <label>CATEGORY</label>
                <select name="category" id="category" placeholder="Select a category" required>
                    <option>-- --</option>
                    <option value="Poverty Allevations" id="category1">Poverty Allevations</option>
                    <option value="Disaster Response and Relief" id="category2">Disaster Response and Relief</option>
                    <option value="Mental Health Support" id="category3">Mental Health Support</option>
                    <option value="Social Cause Activism" id="category4">Social Cause Activism</option>
                    <option value="Hunger and Food Security" id="category5">Hunger and Food Security</option>
                    <option value="Human Rights" id="category6">Human Rights</option>
                </select>
                
                <label>TITLE:</label>
                <input type="text" name="title" id="title" colspan="30" placeholder="Enter the title here.....">

                <label>FILE:</label>
                <input type="file" name="image" id="image">

                <label>NEWS</label>
                <textarea name="news" id="news" cols="30" rows="10"></textarea>

                <label>BY:</label>
                <input type="text" id="author" name="author" colspan="30" placeholder="Enter the writer name here.....">

            
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