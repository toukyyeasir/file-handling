<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<form method="post">

		<fieldset>
		<legend>1. Basic Information</legend>
		<label for="FName">First Name</label>
		<input type="text" id="FName" name="FName">
		
		<label for="LName">Last Name</label>
		<input type="text" id="LName" name="LName">

		<br>
		<label for="Gender">Gender</label>
		<input type="radio" id="male" name="Gender"> Male
		<input type="radio" id="female" name="Gender"> Female
		
		
		<br>

		<label for="Email">Email</label>
		<input type="email" id="Email" name="Email"><br> 
		
		
		
		
		
		
		</fieldset>
		

		<fieldset>
		<legend>Contact Information</legend>
		<br>


		<label for="UsrName">User Name</label>
		<input type="text" id="UsrName" name="UsrName">
		<br>

		<label for="pass">Password : </label>
		<input type="password" id="pass" name="pass">
		<br>


		<label for="Rcvremail">Recovery Email</label>
		<input type="email" id="Rcvremail" name="Rcvremail"><br> 
		
		
		
		
		
		
		
		</fieldset>

		<input type="submit" value="Submit"></input>


		</form>
		
		
		
		<?php 

		$FName= $_POST['FName'];
		$LName= $_POST['LName'];
		$Gender= $_POST['Gender'];
		$EMAIL= $_POST['Email'];
		$UserName= $_POST['UsrName'];
		$pass= $_POST['pass'];
		$recovery_email= $_POST['Rcvremail'];

			$filepath = "temp1.txt";
			echo readfile($filepath);

			echo "<br>";

		$f1 = fopen($filepath, "r");

		echo "<br>";

		echo fread($f1, filesize($filepath));
		

		fclose($f1);

		$f4 = fopen($filepath, "a");

		// fwrite($f4, "\n hello \n");

		fwrite($f4, "\n $FName \n");
		fwrite($f4, " $LName \n");
		fwrite($f4, " $Gender \n");
		fwrite($f4, " $EMAIL \n");
		fwrite($f4, " $UserName \n");
		fwrite($f4, " $pass \n");
		fwrite($f4, " $recovery_email \n");

		fclose($f4);




		 ?>
		
		
		
		
		
		











</body>
</html>