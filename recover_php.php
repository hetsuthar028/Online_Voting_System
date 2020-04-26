<?php
session_start();
$npass1 = filter_input(INPUT_POST,'npassword1');
$npass2 = filter_input(INPUT_POST,'npassword2');
include("connection.php");
$check1 = $_SESSION["voterid1"];
$hash = md5($npass1);
if(mysqli_connect_error())
{
	die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	if($npass1 == $npass2)
	{
		$sql = "UPDATE register set passwordHash = '$hash' where voterid='$check1'";
		if($conn->query($sql))
		{
			echo "Password Updated Successfully";
		}
		else
		{
			echo "Error: ". $sql ."
		". $conn->error;
		}
	}
	else
	{
		echo "Both the password does not matches";
	}
}




?>