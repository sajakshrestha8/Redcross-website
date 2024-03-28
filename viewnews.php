<?php
require_once("databaseconn/databaseconn.php");

$sql = "SELECT * FROM newsandposts";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News/Posts</title>
    <style>
        #vform{
            width: 100%;
        }
        #vform table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin: 5px;
        }
        #vform table tr{
            border: 3px solid black;
            padding: 5px; 
        }
        #vform table th{
            padding: 15px;
            background-color: #020231;
            color: #ffffff;
        }
        #vform table th:hover{
            background-color: blueviolet;
            color: coral;
        }
    </style>
</head>
<body>
    <section id="vform">
        <table>
            <tr>
                <th>SN</th>
                <th>Title</th>
                <th>Category</th>
                <th>Files</th>
                <th>News</th>
                <th>By</th>
                
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['sn']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><img src="../newsimg/<?php echo $row['newImageName']; ?>" alt="image" width="200px" height="200px"></td>
                <td><?php echo $row['news']; ?></td>
                <td><?php echo $row['author']; ?></td>
                
            </tr>  
            <?php
            }
            ?>
        </table>
    </section>
</body>
</html>
