<?php

session_start();
include("connection.php");
$sec1 = filter_input(INPUT_POST,'sec1');
$sec2 = filter_input(INPUT_POST,'sec2');
$sec3 = filter_input(INPUT_POST,'sec3');

$check = $_SESSION["voterid1"];

if(mysqli_connect_error())
{
    die('Connection Error'.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "SELECT * from register where voterid ='$check'";
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
             header("Location: recover.php");
            }
            else
            {
                echo "Entered information is wrong.";
            }
    }
}


?>