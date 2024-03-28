<?php
include("databaseconn/databaseconn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../style/menubarstyle.css"> -->
    <title>ImageData</title>
</head>
<body>
    <div class="table_container">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <!-- <th>Operations</th> -->
            </tr>
            <?php 
                $i = 1;
                $rows = mysqli_query($conn,"SELECT * FROM uploadImage ORDER BY id DESC");
            ?>

            <?php foreach($rows as $row) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><img src="../img/<?php echo $row['image']; ?>" alt="image" width="200px" height="200px"></td>
                <td><?php echo $row["description"]; ?></td>
                <!-- <td>
                    <button type="update" class="update">Update</button>
                    <button type="delete" class="delete">Delete</button>   
                </td> -->
                <!-- <button type="update">Update</button>
                <button type="delete">Delete</button> -->
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <style>
        .table_container{
            width: 1000px;
        }
        .table_container table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin: 5px;
        }
        .table_container table tr, td{
            border: 3px solid black;
            padding: 5px; 
        }
        .table_container table th{
            padding: 15px;
            background-color: #020231;
            color: #ffffff;
        }
        .table_container table th:hover{
            background-color: blueviolet;
            color: coral;
        }
        .table_container table td .update{
            background-color: #04aa6d;
            /* border: none; */
            border: 2px solid #04aa6d;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }
        .table_container table td .delete{
            background-color: #f44336; 
            border: 2px solid #f44336;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }

        .table_container table td .update:hover{
            background-color: white;
            padding: 14px 22px;
            color: black;
            border: 2px solid #04aa6d;
        }
        .table_container table td .delete:hover{
            background-color: white;
            padding: 14px 22px;
            color: black;
            border: 2px solid #f44336;
        }
    </style>
</body>
</html>