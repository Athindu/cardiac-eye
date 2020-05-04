<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $_SESSION["UserId"]=$myusername;
      $sql = "SELECT id FROM admin WHERE id = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) { 
header ("location: ../homePage/Home_index.php");

 }else {
         $message = "Username and Password not matched !";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location: ../index.php");
      }
   }
?>

