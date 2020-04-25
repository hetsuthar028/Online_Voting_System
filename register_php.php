<?php

session_start();
include("connection.php");
$voterid = filter_input(INPUT_POST, 'Voter-id');
$_SESSION["voterid"] = filter_input(INPUT_POST, 'Voter-id');
$fname = filter_input(INPUT_POST,'FName');
$mname = filter_input(INPUT_POST,'MName');
$lname = filter_input(INPUT_POST,'LName');
$address = filter_input(INPUT_POST,'Address');
$dob = filter_input(INPUT_POST,'DOB');
$pno = filter_input(INPUT_POST,'pno');
//$image1 = $_FILES['Pimage']['name'];
//$image2 = $_FILES['Document']['name'];

$target_dir = "upload/";
// $target_file = $target_dir.basename($image1);
$target_file = $target_dir . basename($_FILES["Pimage"]["name"]);
// $target_file1 = $target_dir.basename($image2);
$target_file1 = $target_dir . basename($_FILES["Document"]["name"]);
$uploadOk1  = 1;
$uploadOk2  = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$location1 = "C:/wamp64/www/New_folder/Practice/exercise-files/upload/"."$voterid"."_1"."."."$imageFileType";
$location2 = "C:/wamp64/www/New_folder/Practice/exercise-files/upload/"."$voterid"."_2"."."."$imageFileType1";

// $host = "localhost";
// $dbusername ="root";
// $dbpassword ="";
// $dbname = "register_php";
// $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);



if (mysqli_connect_error())
{
die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
}

else{
    $hash = md5($voterid);
    $sql = "INSERT INTO register(voterid,fname,mname,lname,address1,dob,pno,passwordHash,location1,location2) values ('$voterid','$fname','$mname','$lname','$address','$dob','$pno','$hash','$location1','$location2')";   
    
if ($conn->query($sql))
{
#echo "New record is inserted sucessfully";
    if(file_exists($target_file))
    {
        echo "Sorry. Already Exist First";
        $uploadOk1 = 0;
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
        echo "Sorry. Already Exist Second";
        $uploadOk2 = 0;
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
    if($uploadOk1 ==1 && $uploadOk2 == 1)
     header("Location: security_question.php");
//   header("Location: register_redirect.html");
}
else
{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}








?>

<html>
<head>
<!-- <meta http-equiv="refresh" content="3;url=login.php" /> -->

</head>
<body>
    
<?php
echo $location1;
echo $location2;
?>
</body>
</html>