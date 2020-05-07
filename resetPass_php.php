<?php
session_start();
$sec1 = filter_input(INPUT_POST,'sec1');
$sec2 = filter_input(INPUT_POST,'sec2');
$sec3 = filter_input(INPUT_POST,'sec3');

$hello3 = $_SESSION["voterid"];
$host = "localhost";
$dbusername="root";
$dbpassword="";
$dbname = "register_php";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
    die('Connection Error'.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "UPDATE register set sec1='$sec1',sec2='$sec2',sec3='$sec3' WHERE voterid='$hello3'";
    $result = mysqli_query($conn,$sql);
   if(!($result))
   {
       exit();
   }
   $rows = mysqli_fetch_array($result);
   if($rows)
   {
       if($rows["sec1"] == $sec1 && $rows["sec2"] == $sec2 && $rows["sec3"] == $sec3)
       {
            <input type="text">
            echo "Valid";
       }
   }
}


?>



