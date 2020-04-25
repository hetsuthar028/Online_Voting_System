<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
    </head>
    <body>
        <!-- <div class="container">
            <div class="row">
            <div class="panel panel-login">asjdhkasjdh</div>
            </div>
            
        </div> -->


        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><B>ONLINE VOTING</B></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">POLITCAL  PARTIES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">HTP</a></li>
            <li><a href="#">JKP</a></li>
            <li><a href="#">HTY</a></li>
            <li><a href="#">ADSA</a></li>
            <li><a href="#">AEWRWF</a></li>
            <li><a href="#">JCB</a></li>
          </ul>
        </li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> </a></li>-->
      </ul>
    </div>
  </nav>
  <div class="container">
        <h1><center> A Bit more security question...</center></h1>
        <div class="form-inline">
<form method="POST" action="security_question_php.php">
        <h1>1. What is your pet name?</h1>
        <input type="text" name="sec1" value="" placeholder="Pet Name" required class="form-control">
        <h1>2. What is your Favourite Book</h1>
        <input type="text" name="sec2" value="" placeholder="Favourite Book" required class="form-control">
        <h1>3. Your First school name?</h1>
        <input type="text" name="sec3" value="" placeholder="First School" required class="form-control"><br><br>
        <input type="submit" name="submit" class="btn btn-success"><br><br>
        <a href="reset_php.php">Reset Your password </a>
</form>
</div>
</div>
    </body>
</html>
