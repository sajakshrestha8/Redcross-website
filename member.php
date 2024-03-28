<?php

include("databaseconn/databaseconn.php");
// $sql = "SELECT * FROM membershiptable";

// $result = mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Membership</title>
</head>
<body>
    <section id="vform">
        <table>
            <tr>
                <th>SN</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Temporary Address</th>
                <th>Permanent Address</th>
                <th>Contact</th>
                <!-- <th>Operations</th> -->
                <!-- <th>Payment Slip</th> -->
                <!-- <th>Date</th> -->
            </tr>

            <?php 
                $i = 1;
                $result = mysqli_query($conn,"SELECT * FROM membershiptable ORDER BY sn DESC");
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['Taddress']; ?></td>
                <td><?php echo $row['Paddress']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <!-- <td>
                    <button type="update" class="update">Update</button>
                    <button type="delete" class="delete">Delete</button>   
                </td> -->
                
            </tr>
            <?php } ?>
        </table>
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
            padding: 14px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            
        }
        table td .delete{
            background-color: #f44336; 
            border: 2px solid #f44336;
            color: white;
            padding: 14px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
           
        }

        table td .update:hover{
            background-color: white;
            padding: 14px 18px;
            color: black;
            border: 2px solid #04aa6d;
        }
        table td .delete:hover{
            background-color: white;
            padding: 14px 18px;
            color: black;
            border: 2px solid #f44336;
        }

    </style>
</body>
</html>