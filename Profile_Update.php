<?php
session_start();
include("connection.php");
$voter = $_SESSION['voterid'];
$source = "C:\Users\Het Suthar\Desktop\Screenshot_1.png";
if(mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());    
}
else
{
    $sql = "SELECT * from register where voterid='$voter'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($result);

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Profile_Update.php" method="POST">
    1. First Name : 
        <input type="text" placeholder="First Name" value="<?php echo $rows['fname'];?>">
    <br>
    2. Middle Name : 
    <input type="text" placeholder="First Name" value="<?php echo $rows['mname'];?>">
    <br>
    3. Last Name : 
    <input type="text" placeholder="First Name" value="<?php echo $rows['lname'];?>">
    <br>
    4. Address : 
    <input type="text" placeholder="First Name" value="<?php echo $rows['address1'];?>">
    <br>
    5. Date of Birth : 
    <input type="date" placeholder="First Name" value="<?php echo $rows['dob'];?>">
    <br>
    6. Phone Number :
    <input type="number" placeholder="First Name" value="<?php echo $rows['pno'];?>">
    <br>
    7. Personal Image : 
    <input type="file" placeholder="First Name" name="Pimage">
    <br>
    8. Aadhar Card Image :
    <input type="file" placeholder="First Name" name="Aadhar">
    <br>
    <input type="button" class="button" value="Update">
    </form>

</body>

</html>
<?php

include("connection.php");
$voter = $_SESSION["voterid"];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["Pimage"]["name"]);
$target_file1 = $target_dir . basename($_FILES["Aadhar"]["name"]);
$uploadOk1  = 1;
$uploadOk2  = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$location1 = "C:/wamp64/www/New_folder/Practice/exercise-files/upload/"."$voter"."_1"."."."$imageFileType";
$location2 = "C:/wamp64/www/New_folder/Practice/exercise-files/upload/"."$voter"."_2"."."."$imageFileType1";


if (mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "UPDATE register SET location1='$location1', location2='$location2' where voterid='$voter'";
    if($conn->query($sql))
    {
        if(file_exists($target_file))
        {
            
            $uploadOk1 = 1;
        }
        else
        {
            $uploadOk1 =0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) 
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. in first";
        $uploadOk1 = 0;
    }
    if($uploadOk1 == 0)
    {
        echo "Try again! In First";
    }
    else
    {   
        if(move_uploaded_file($_FILES["Pimage"]["tmp_name"],$target_file))
        {
            echo "The file".basename($_FILES["Pimage"]["name"])."has been successfully uploaded";
            
            rename("$target_file","$location1");
            
            // header("Location: register_redirect.html");
        }
        else
        {
            echo "Your Personal Image can't be uploaded.<br> Please try again!! <br><br>";
           //    header("Location : register.php");
        }
    }

    if(file_exists($target_file1))
    {
        // echo "Sorry. Already Exist Second";
        $uploadOk2 = 1;
    }
    else
    {
        $uploadOk2 =0;
    }
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
    && $imageFileType1 != "gif" ) 
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. in second";
        $uploadOk2 = 0;
    }
    if($uploadOk2 == 0)
    {
        echo "Try again! In Second";
    }
    else
    {
         if(move_uploaded_file($_FILES["Document"]["tmp_name"],$target_file1))
        {
            echo "The file".basename($_FILES["Document"]["name"])."has been successfully uploaded";
            rename("$target_file1","$location2");
            // header("Location: security_question.php");
        }
        else
        {
            echo "Your Document can't be updated. <br> Please Try Again!!<br>";
            //header("Location : register.php");
        }
    }
    }
    else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}


?>