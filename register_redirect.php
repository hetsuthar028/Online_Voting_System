<?php
session_start();

?>
<html>
    <head>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <div class="alert alert-success">
            <strong>Success!</strong> Your Voterid is  <?php   echo $_SESSION["voterid"];   ?>  <br> Your Password is :
          </div>
    </body>
</html>