<?php
session_start();
include("connection.php");
$voterid = filter_input(INPUT_POST,'voterid');
$_SESSION["voterid"] = filter_input(INPUT_POST,'voterid');
$_SESSION["password"] = filter_input(INPUT_POST,'password');
#$hash = password_hash($voterid,PASSWORD_BCRYPT);
$hello = $_SESSION["voterid"];
$hash22 = $_SESSION["password"];
$hash = md5($hello);

//$pass = filter_input(INPUT_POST,'password');
$hash2 = md5($hash22);




// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname ="register_php";

$error = "";
$success ="";



// $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


#$sql1 = "select passwordHash from register_php where voterid='$admin'";
#echo '$sql1';
if(mysqli_connect_error())
{
    die('Connection Error'.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "SELECT * from register where voterid='$hello'";
   $result = mysqli_query($conn,$sql);
//    if(!($result)
//    {
//     //    exit();
//    }
//    else
//    {
    $rows = mysqli_fetch_array($result);

    if($rows)
    {
        if(($rows["passwordHash"] == $hash) || ($rows["passwordHash"] == $hash2))
        {
             // $error = "";
             // $success = "Welcome ".$voterid."!!";
             // $msg = "Logout";
             
             if($rows["vote1"] !='1')   
             {
                 header("Location: cards.html");
                 echo "You have already submitted";
             }
             else
             {
             header("Location: form1 (1).html");
            }
            
        }
        else
        {
             // $error = "Invalid Password";
             // $success = "";
             // $msg = "Try Again";
             
            echo "Entered Password is Wrong";
            echo $hash2;
            //session_destroy();
         //    session_end();
        }
    }
    else{
     echo "Error: ". $sql ."
     ". $conn->error;
     }
   }
   
    $conn->close();
   
//    else
//    {
//         // $error = "Invalid VoterId";
//         // $success = "";
//         // $msg = "Try Again";
        
       
//    }
    

// }


?>


<!DOCTYPE html>
<html>
<body>


<p><?php $hash2;?></p>
<p><?php #`echo $success; ?></p>


</body>
</html>
