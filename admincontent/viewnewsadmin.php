<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/menubarstyle.css">
    <title>Home Dashboard</title>
</head>
<body>
    <?php 
        include 'menubar.php';
    ?>
    <section class="main-content">
        <div class="content-header">
            <div class="content-title">
                <span>News/Posts</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user-info">
                <div class="search-box">
                    <input type="text" placeholder="Search">
                </div>
                
                <img src="../image/profile.jpg" alt="profile_pic" title="pradhumna"> 
                
            </div>
        </div>
    

    <div class="card-container">
        <h3 class="main-title">Home</h3>
        <div class="card-wrapper">
           <?php include '../viewnews.php' ?>
        </div>
    </div>
   
    </section>


    
</body>
</html>