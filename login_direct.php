<?php
 session_start();
// $host = "localhost";
// $dbusername = "root";
// $dbpassword="";
// $dbname = "register_php";

// $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
// $hello2 = $_SESSION["voterid"];
// if(mysqli_connect_error())
// {
//     die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());    
// }
// else{
//     $sql = "SELECT vote1 from register where voterid='$hello2'";
//     if($result = $conn->query($sql))
//     {
//         $rows = mysqli_fetch_array($result);
//         if($rows)
//         {
//             if($rows["vote1"] == 'htp')
//             {
//                 header("Location :htp.html");
//             }
//         }
//     }


// }
//echo "Thank you for you vote";
if($_SESSION["vote2"] == 'htp')
{
    header("Location: HTP_f.html");
}
else if($_SESSION["vote2"] == 'ght')
{
    header("Location: GHT.html");
}
else if($_SESSION["vote2"] == 'hre')
{
    header("Location: HRE.html");
}
else if($_SESSION["vote2"] == 'qwe')
{
    header("Location: QWE.html");
}
else if($_SESSION["vote2"] == 'asd')
{
    header("Location: ASD.html");
}
else if($_SESSION["vote2"] == 'hel')
{
    header("Location: HEL.html");
}
else if($_SESSION["vote2"] == 'nota')
{
    header("Location: NOTA.html");
}

?>


<!DOCTYPE html>
<html>

<body>
<h1 class="success"> &#128512;</h1>

</body>

</html>