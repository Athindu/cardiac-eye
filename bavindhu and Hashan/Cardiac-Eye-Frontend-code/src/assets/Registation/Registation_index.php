<?php
require_once("dbcontroller.php");
	/* Password Matching Validation */
	if($_POST['password_1'] != $_POST['password_2']){ 
	$error_message = 'Passwords should be same<br>';
	 header("Location: ../index.php"); 
	}
	
	if(!isset($error_message)) {
		
		$db_handle = new DBController();
		$query = "INSERT INTO admin (id, username, passcode) VALUES
		('" . $_POST["id"] . "', '" . $_POST["username"] . "', '" . $_POST["password_1"]."')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
						 $message = "You have registered successfully!";	
  echo "<script type='text/javascript'>alert('$message');</script>";
	header("Location: ../index.php");
			 
		} else {
			 $message = "Problem in registration. Try Again!";
  echo "<script type='text/javascript'>alert('$message');</script>";
   header("Location: ../index.php");
		}
	}

?>
