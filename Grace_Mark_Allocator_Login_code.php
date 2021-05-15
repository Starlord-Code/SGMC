<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM eventcoordinator WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       
         $_SESSION['login_user'] = $myusername;
         
         header("location: ./Home Pages/Grace Mark Allocator homepage.php");
      }else {

         $_SESSION['status'] = "Your Login Name or Password is invalid";
         $_SESSION['status_code'] = "error";
         $MSG = "location: ./Grace_Mark_Allocator_Login.php";
         header($MSG); 
         
      }
   }
?>