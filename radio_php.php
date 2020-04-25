<?php
include("connection.php");
session_start();

#include 'login_php.php';
$vote = filter_input(INPUT_POST,'vote');
$_SESSION["vote2"] = filter_input(INPUT_POST,'vote');


$hello1 = $_SESSION["voterid"];
// $host = "localhost";
// $dbusername = "root";
// $dbpassword = "";
// $dbname = "register_php";



// $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);



if(mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());    
}

else
{
    
    $sql2 = "SELECT vote1 from register where voterid='$hello1'";
    
    $result = mysqli_query($conn,$sql2);
      if(!($result))
      {
          exit();
      }
      else
      {
          $rows = mysqli_fetch_array($result);
          if($rows)
          {
              
              
              
                  $sql = "UPDATE register SET vote1='$vote' WHERE voterid='$hello1'";
                  if($conn->query($sql))
                  {
                      echo "Radio worked!!!";
                  header("Location: login_direct.php");
                  }
                  else
                  {
                      echo "Error: ". $sql ."
                      ". $conn->error;
                  }
                

          }
      }
     

      
    

   
    $conn->close();

}








?>


<!DOCTYPE html>
<html>
<body>
<p></p>
</body>
</html>