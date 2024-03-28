<?php

require_once("databaseconn/databaseconn.php");
$sql = "SELECT * FROM login";

$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>USER's Data</title>
</head>
<body>
    <section id="vform">
        <table>
            <tr>
                <th>SN</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Date</th>
            </tr>

            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>

                <td><?php echo $row['sn']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['userName']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <!-- <td>php echo $row['paymentslip']; </td> -->
                <!-- <td><php echo $row['email']; ?></td> -->
            </tr>  
                    <?php
                }
                
                ?>
        </table>
    </section>


    <style>
        #vform{
            width: 100%;
        }
        #vform table{
            width: 100%;
            /* border: 3px solid #c8c8c8; */
            /* border: 3px solid black; */
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
</body>
</html>