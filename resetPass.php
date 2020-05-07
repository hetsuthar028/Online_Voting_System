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
        
<form method="POST" action="resetPass_php.php">
        <h1>1. What is your pet name?</h1>
        <input type="text" name="sec1" value="" placeholder="Pet Name" required>
        <h1>2. What is your Favourite Book</h1>
        <input type="text" name="sec2" value="" placeholder="Favourite Book" required>
        <h1>3. Your First school name?</h1>
        <input type="text" name="sec3" value="" placeholder="First School" required>
        <input type="submit" name="submit">
        <!-- <a href="reset_php.php">Reset Your password </a> -->
</form>
    </body>
</html>
