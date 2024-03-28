<?php
include("databaseconn/databaseconn.php");

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $Taddress = $_POST['Taddress'];
    $Paddress = $_POST['Paddress'];
    $type = $_POST['type'];

    $sql = "UPDATE volunteertable SET firstname=?, lastname=?, phone=?, email=?, Taddress=?, Paddress=?, type=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssi", $firstname, $lastname, $phone, $email, $Taddress, $Paddress, $type, $id);
    mysqli_stmt_execute($stmt);

    // Redirect back to volunteer.php after update
    header("Location: volunteer.php");
    exit();
}

// Retrieve the data of the volunteer to be updated
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM volunteertable WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $volunteer = mysqli_fetch_assoc($result);
} else {
    // If no id is provided, redirect back to volunteer.php
    header("Location: volunteer.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Volunteer</title>
</head>
<body>
    <h2>Update Volunteer</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $volunteer['id']; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" value="<?php echo $volunteer['firstname']; ?>"><br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" value="<?php echo $volunteer['lastname']; ?>"><br><br>
        <label for="phone">Contact:</label>
        <input type="text" name="phone" id="phone" value="<?php echo $volunteer['phone']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $volunteer['email']; ?>"><br><br>
        <label for="Taddress">Temporary Address:</label>
        <input type="text" name="Taddress" id="Taddress" value="<?php echo $volunteer['Taddress']; ?>"><br><br>
        <label for="Paddress">Permanent Address:</label>
        <input type="text" name="Paddress" id="Paddress" value="<?php echo $volunteer['Paddress']; ?>"><br><br>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" value="<?php echo $volunteer['type']; ?>"><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
