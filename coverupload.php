<?php
    include("databaseconn/databaseconn.php");
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $desc = $_POST["description"];
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

            $validImageExtention = ['jpg','jpeg','png','png'];
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

                move_uploaded_file($tmpName, '../img/' . $newImageName);

                $query = "INSERT INTO uploadImage VALUES ('','$name','$newImageName','$desc')";
                mysqli_query($conn,$query);
                echo"
                <script>
                    alert ('Successfully Added');
                    document.location.href = 'coverupdata.php';
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
    <title>Image_Upload</title>
</head>
<body>
    <div class="image">
        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="name" id="name"><br><br>
            <label>Files</label>
            <input type="file" name="image"  id="image">
            <label>Description:</label>
            <input type="text" name="description" id="description"><br><br>

            <button type="submit" name="submit">SUBMIT</button>
        </form>
    </div>
    <br><br><br>

    <hr>

    <!-- <a href="viewcoveradmin.php">DATA</a> -->

    <style>
        form input{
            border: 2px solid #000;
            padding: 10px;
        }
        button{
            background-color: #04aa6d;
            /* border: none; */
            border: 2px solid #04aa6d;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 20px;
        }
        button:hover{
            background-color: white;
            padding: 14px 22px;
            color: black;
            border: 2px solid #04aa6d;
        }
    </style>
</body>
</html>