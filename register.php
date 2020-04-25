<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="refresh" content="3;url=login.php" /> -->
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
        <a class="navbar-brand" href="cards.html">Online Voting System</a>
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
	
<div class="container">

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

								
		</div>



	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="POST" role="form" action="register_php.php" enctype="multipart/form-data">
									<center><b>Voterid:</b></center>
									<div class="form-group">
										<input type="text" name="Voter-id" id="Voter-id" tabindex="1" class="form-control" placeholder="Voter-id" value="" required >
									</div>

									<div class="form-group">
										<input type="text" name="FName" id="FName" tabindex="1" class="form-control" placeholder="First Name" value="" required >
									</div>
									
									<div class="form-group">
										<input type="text" name="MName" id="Mname" tabindex="1" class="form-control" placeholder="Middle Name" value="" required >
									</div>
									
									<div class="form-group">
										<input type="text" name="LName" id="Lname" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
									</div>
									<center><b>Address:</b></center>
									
									<div class="form-group">
										<input type="text" name="Address" id="Address" tabindex="1" class="form-control" placeholder="Address" value="" required >
									</div>
									<center><b>Date Of Birth:</b></center>
									<div class="form-group">
										<input type="Date" name="DOB" id="DOB" tabindex="1" class="form-control" placeholder="Date Of Birth" value="" required >
									</div>

									<div class="form-group">
										<input type="Number" name="pno" id="pno" tabindex="1" class="form-control" placeholder="Phone Number" value="" required >
									</div>
									<center><b>Personal Image:</b></center>
									<div class="form-group">
										<input type="File" name="Pimage" id="Pimage" tabindex="1" class="form-control" placeholder="PersonalImage" >
									</div>
									<center><b>Aadhar Card Iamge:</b></center>
									<div class="form-group">
										<input type="file" name="Document" id="Document" tabindex="1" class="form-control" placeholder="Document" >
									</div>

								
									<!-- <div class="form-group"> -->
										<!-- <div class="row"> -->
											<!-- <div class="col-sm-6 col-sm-offset-3"> -->
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											<!-- </div> -->
										<!-- </div> -->
									<!-- </div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	
</body>
</html>