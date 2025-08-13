<!DOCTYPE html>
<html>
	<head><title>Registration Received</title></head>
	<body>
		Reg.php (this is a PHP file)
		<br><br>
		
		<?php
		
			// note: I could have used $_GET
			// because these were passed via
			// <form ... method="get" ...>
			$user = $_REQUEST["username"];
			$pass = $_REQUEST["password"];
		?>
		
		<h1> Username is <?php print $user; ?>
		and Password is <?php print $pass; ?>
		<br><br>
		
		<?php
		
			$mysqli = new mysqli("localhost", "root", "root", "summer25");
			if($mysqli->connect_error)
			{
				print ("Error is: " . $mysqli->connect_error);
				exit();
			}

			$result = $mysqli->query("SELECT * FROM users where username = \"$user\"");
					
			if($result->num_rows > 0)
			{
				print "Username $user was found on " . $result->num_rows . " rows!";
			}
			else
			{
				print "Username $user was not found!";
				
				// add the user as a new user with INSERT statement
				
				$resultIns = $mysqli->query( "INSERT INTO users (username, password)"
						. " VALUES ( \"$user\" , \"$pass\" )" );

				if ($resultIns !== true)
				{
					print "Insert failed!";
				}
				else
				{
					print "User not found...inserted into table.";
				}
			}
			error_log("I MADE IT!");
			$mysqli->close();
		?>
	</body>
</html>