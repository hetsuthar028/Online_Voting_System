<?php

session_start();
include("connection.php");
$voter = $_SESSION["voterid"];
$source = "C:/Users/Het Suthar/Desktop/Screenshot_1.png";
if(mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());    
}
else
{
    $sql = "SELECT * from register where voterid='$voter'";
    $result = mysqli_query($conn,$sql);
    // if(!($result)
    // {
        
    // }
    // else
    // {
        $rows = mysqli_fetch_array($result);
    // }
    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
</head>
<body>
    <form action="Profile_Update.php" method="POST"  enctype="multipart/form-data">
    Voterid : <span> <?php echo $_SESSION["voterid"];?></span>
    <br>
    First Name : <span><?php echo $rows["fname"];?></span>
    <br>
    Middle Name :  <span><?php echo $rows["mname"];?></span>
    <br>
    Last Name :  <span><?php echo $rows["lname"];?></span>
    <br>
    Address :  <span><?php echo $rows["address1"];?></span>
    <br>
    Date Of Birth :  <span><?php echo $rows["dob"];?></span>
    <br>
    Phone Number :  <span><?php echo $rows["pno"];?></span>
    <br>
    Image 1:
        <?php
        // $loc=  "C:\Users\Het Suthar\Desktop\Screenshot_1.png";
        
        // header('Content-Type: image/jpeg');
        // echo file_get_contents($loc);
        // echo '<img src="$source">';
        echo $rows["location1"];
?>
<br>
Image 2:
    <?php
        echo $rows["location2"];
    ?>
        
        
    
    
    <br>
    
    
    <a href="Profile_Update.php" class="btn btn-primary"> Edit Profile</a>
    <!-- <input type="button" class="button" value="Edit Profile"> -->
    </form>
</body>
</html>