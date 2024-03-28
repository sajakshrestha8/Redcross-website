<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/menubarstyle.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <section class="sidebar">
        <div class="logo">
            <ul class="menu">
                <li class="active">
                    <a href="#"><span>Admin Dashboard</span></a>
                </li>
                <li class="<?php if ($_SERVER["REQUEST_URI"] == "/phpclasses/certificatepractice/bloodbank/admincontent/homeadmin.php") echo "active" ?>">
                    <a href="homeadmin.php"><span>Home</span></a>
                </li>
                <li>
                    <a href="#" class="sub-btn">Cover Image</a>
                        <div class="sub-menu">
                            <a href="coveradmin.php" class="sub-item "><span>ADD Cover</span></a>
                            <a href="viewcoveradmin.php" class="sub-item"><span>View Cover</span></a>
                        </div>
                </li>
                <!-- <li class="<?php if ($_SERVER["REQUEST_URI"] == "/phpclasses/certificatepractice/bloodbank/admincontent/newsadmin.php") echo "active" ?>">
                    <a href="newsadmin.php"><span>News/Post</span></a>
                </li> -->
                <li>
                    <a href="#" class="sub-btn">News/Posts</a>
                        <div class="sub-menu">
                            <a href="newsadmin.php" class="sub-item"><span>News/Post</span></a>
                            <a href="enewsadmin.php" class="sub-item"><span>Emergency-Post</span></a>
                            <a href="viewnewsadmin.php" class="sub-item"><span>View Posts</span></a>
                        </div>
                </li>
                <li>
                    <a href="messageadmin.php"><span>Message</span></a>
                </li>
                <li>
                    <a href="donationdetailadmin.php"><span>Donation Details</span></a>
                </li>
                <li>
                    <a href="blooddonationadmin.php"><span>Blood Donor Form</span></a>
                </li>
                <li>
                    <a href="volunteeradmin.php"><span>Volunteer</span></a>
                </li>
                <li>
                    <a href="memberadmin.php"><span>Membership</span></a>
                </li>
                <li>
                    <!-- <a href="certificateadmin.php"><span>Certificate's</span></a> -->
                    <a href="#" class="sub-btn">Certificates</a>
                        <div class="sub-menu">
                            <a href="certificateadmin.php" class="sub-item"><span>Volunteer Certificate</span></a>
                            <a href="membercertadmin.php" class="sub-item active"><span>Member Certificate</span></a>
                            <a href="donorcertadmin.php" class="sub-item active"><span>Blood Donor Certificate</span></a>
                        </div>
                </li>
                <li>
                    <a href="#" class="sub-btn">Users</a>
                        <div class="sub-menu">
                            <a href="adduseradmin.php" class="sub-item "><span>Add User</span></a>
                            <a href="viewuseradmin.php" class="sub-item"><span>View User</span></a>
                        </div>
                </li>
                <li>
                    <a href="../login.php"><span>Logout</span></a>
                </li>
            </ul>
            <!-- <div class="logout">
                <a href="../login.php"><span>Logout</span></a>
            </div> -->
        </div>
    </section>

    <!-- <section class="main-content">
        <div class="content-header">
            <div class="content-title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user-info">
                <div class="search-box">
                    <input type="text" placeholder="Search">
                </div>
                
                <img src="profile.jpg" alt="profile_pic"> 
                
            </div>
        </div>

        <div class="card-container">
            <h3 class="main-title">Volunteer's Data</h3>
            <div class="card-wrapper">
                php include '../home.php' ?>
            </div>
        </div>
    </section> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
            });
        });
    </script>
 
</body>
</html>

