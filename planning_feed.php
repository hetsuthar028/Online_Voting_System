<?php
session_start();
$hello1 = $_SESSION["voterid"];
include("connection.php");
$pln_feed1 = filter_input(INPUT_POST,'pln_feed1');
$pln_feed2 = filter_input(INPUT_POST,'pln_feed2');
$pln_feed3 = filter_input(INPUT_POST,'pln_feed3');
$pln_feed4 = filter_input(INPUT_POST,'pln_feed4');
$pln_feed5 = filter_input(INPUT_POST,'pln_feed5');
$pln_feed6 = filter_input(INPUT_POST,'pln_feed6');
if(mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());    
}
else
{
    $sql = "UPDATE register SET f1='$pln_feed1',f2='$pln_feed2',f3='$pln_feed3',f4='$pln_feed4',f5='$pln_feed5',f6='$pln_feed6' where voterid='$hello1'";
    if($conn->query($sql))
    {
        echo "We appreciate your Feedbacks and valueable time!!  THANK YOU!!";
    }
    else
    {
        echo "Error: ". $sql ."
        ". $conn->error;
    }
    
}



$conn->close(); 
?>