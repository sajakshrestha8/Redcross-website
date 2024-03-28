<?php

include("databaseconn/databaseconn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Message</title>
</head>
<body>
<body>
    <section id="vform">
        <table>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <!-- <th>Operations</th> -->
                
            </tr>
            <?php 
                $i = 1;
                $result = mysqli_query($conn,"SELECT * FROM message ORDER BY id DESC");
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['date']; ?></td>
                
                <!-- <td>
                    <button type="update" class="update">Update</button>
                    <button type="delete" class="delete">Delete</button>   
                </td> -->
                
            </tr>
            <?php } ?>
        </table>
    </section>


    <style>
        #vform{
            width: 100%;
        }
        #vform table{
            width: 100%;
            /* border: 3px solid #c8c8c8; */
            border: 3px solid black;
            border-collapse: collapse;
            text-align: center;
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
        table td .update{
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
        table td .delete{
            background-color: #f44336; 
            border: 2px solid #f44336;
            color: white;
            padding: 14px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
           
        }

        table td .update:hover{
            background-color: white;
            padding: 14px 22px;
            color: black;
            border: 2px solid #04aa6d;
        }
        table td .delete:hover{
            background-color: white;
            padding: 14px 22px;
            color: black;
            border: 2px solid #f44336;
        }

    </style>
</body>
</html>

