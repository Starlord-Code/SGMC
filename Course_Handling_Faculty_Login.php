<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM coursehandlingfaculty WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die("Your Login Name or Password is invalid");
      $active = $row['active'];
      $row1 =mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       
         $_SESSION['Branch'] = $row1 ['Branch'];
         $_SESSION['Year'] =  $row1 ['Years'];
         $_SESSION['Section'] = $row1 ['Section'];
         $_SESSION['Subject'] = $row1 ['subjects'];
         $_SESSION['login_user'] = $myusername;
         
         header("location: ./Home Pages/Course Handling Faculty homepage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>