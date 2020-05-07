<?php

session_start();

$voter = filter_input(INPUT_POST,'voterid');
$_SESSION["voterid1"]  =  filter_input(INPUT_POST,'voterid');
include("connection.php");




if(mysqli_connect_error())
{
    die('Connection Error'.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "SELECT voterid from register where voterid='$voter'";
    $result = mysqli_query($conn,$sql);
    if(!($result))
    {
        exit();
    }
    $rows = mysqli_fetch_array($result);
 
    if($rows)
    {
        if($rows["voterid"] == $voter)
        {
            header("Location: check_sq.php");
        
        }
        else
        {
            // echo "Your Voterid is not registered.";
            exit();
        }
    }

}





?>