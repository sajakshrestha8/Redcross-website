<?php
    include ('databaseconn/databaseconn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHomepage</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <section id="hcards">
        <div class="firstrow">
            <div class="firstcard">
                <a href="viewuseradmin.php">
                    <img src="../image/user.jpg" alt="userImage">
                    <h2>
                        <?php
                            $sql = "SELECT COUNT(*) AS count FROM login";
                            $result = $conn->query($sql);

                            // Print result
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "" . $row["count"];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </h2>
                    <h1>USER's</h1>
                </a>
            </div>
            <div class="secondcard">
                <a href="memberadmin.php">
                    <img src="../image/members.jpg" alt="memberImage">
                    <h2>
                        <?php
                            $sql = "SELECT COUNT(*) AS count FROM membershiptable";
                            $result = $conn->query($sql);

                            // Print result
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "" . $row["count"];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </h2>
                    <h1>MEMBER's</h1>
                </a>
            </div>
            <div class="secondcard">
                <a href="donationdetailadmin.php">
                    <img src="../image/donation.jpg" alt="memberImage">
                    <h2>
                    <?php
                            $sql = "SELECT COUNT(*) AS count FROM donationtable";
                            $result = $conn->query($sql);

                            // Print result
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "" . $row["count"];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </h2>
                    <h1>Donation's</h1>
                </a>
            </div>
        </div>
        <div class="secondrow">
            <div class="thirdcard">
                <a href="volunteeradmin.php">
                    <img src="../image/volunteer.jpg" alt="volunteerImage">
                    <h2>
                    <?php
                            $sql = "SELECT COUNT(*) AS count FROM volunteertable";
                            $result = $conn->query($sql);

                            // Print result
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "" . $row["count"];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </h2>
                    <h1>Volunteer's</h1>
                </a>
            </div>
            <div class="fourthcard">
                <a href="blooddonationadmin.php">
                    <img src="../image/blooddonor.jpg" alt="blooddonorImage">
                    <h2>
                    <?php
                            $sql = "SELECT COUNT(*) AS count FROM message";
                            $result = $conn->query($sql);

                            // Print result
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "" . $row["count"];
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </h2>
                    <h1>Blood Donor's</h1>
                </a>
            </div>
        </div>

        
    </section>

    <style>
    
    #hcards{
    /* display: flex;
    flex-wrap: nowrap; */
    /* align-items: center;
    justify-content: center;
    margin: 1.7rem; */
    /* padding: 20px; */
    width: 100%;
    }
    a{
        text-decoration: none;
    }
    #hcards .firstrow{
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
    }
    #hcards .firstcard, .secondcard{
        border: 1px solid black;
        width: 30%;
        height: 300px;
        border-radius: 40px;
        margin: 20px;
        padding: 40px;
        display: block;
        /* align-items: center; */
        text-align: center;
        justify-content: center;
    }
    .firstcard img, .secondcard img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: transparent;
    }
    /* .secondcard img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
    } */
    #hcards .firstcard:hover{
        background: #ebe9e9;
        cursor: pointer;
    }
    #hcards .secondcard:hover{
        background: #ebe9e9;
        cursor: pointer;
    }

    #hcards .secondrow{
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: center;
    }
    #hcards .thirdcard, .fourthcard{
        border: 1px solid black;
        width: 30%;
        height: 300px;
        border-radius: 40px;
        margin: 20px;
        padding: 40px;
        display: block;
        /* align-items: center; */
        text-align: center;
        justify-content: center;
    }
    .thirdcard img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
    .fourthcard img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
    #hcards .thirdcard:hover{
        background: #ebe9e9;
        cursor: pointer;
    }
    #hcards .fourthcard:hover{
        background: #ebe9e9;
        cursor: pointer;
    }

    </style>
</body>
</html>

