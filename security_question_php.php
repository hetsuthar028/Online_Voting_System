<?php
session_start();
include("connection.php");
$sec1 = filter_input(INPUT_POST,'sec1');
$sec2 = filter_input(INPUT_POST,'sec2');
$sec3 = filter_input(INPUT_POST,'sec3');

$hello3 = $_SESSION["voterid"];
// $host = "localhost";

// $dbusername="root";
// $dbpassword="";
// $dbname = "register_php";

// $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error())
{
    die('Connection Error'.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "UPDATE register set sec1='$sec1',sec2='$sec2',sec3='$sec3' WHERE voterid='$hello3'";
    if ($conn->query($sql))
    {
        echo "Data inserted";
        header("Location: register_redirect.html");
    }
    else
    {
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
}



?>