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
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Online Voting System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<h1>Assessment</h1>

<form action="save.php" method="post">

<p class="p1">
Question 1</p>
<p class="p4">
Are you tall or short?</p>

<p class="p3"> 
<input type="radio" name="q1" value="1" />
1
<input type="radio" name="q1" value="2" />
2
<input type="radio" name="q1" value="3" />
3
<input type="radio" name="q1" value="4" />
4
<input type="radio" name="q1" value="5" />
5
</p><br><br>
</form>

<img src="Images/image1.png" alt="Submit" class="thumbnail" align="right" width="58"      height="52" id="question2">
<img src="Images/save.png" alt="Submit" class="thumbnail" align="right" width="65" height="52">
</body>

</html>