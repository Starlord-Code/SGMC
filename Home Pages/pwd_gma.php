<?php
session_start();
include("../config.php");

if(isset($_POST['PwdChangebtn']))
{
    $currentpwd = $_POST['edit_current_password'];
    $newpassword = $_POST['edit_new_password'];
    $confirmpassword = $_POST['edit_confirm_password'];
    $username = $_POST['edit_username'];


    $rollno_query = "SELECT * FROM eventcordinator WHERE password='$currentpwd' and username='$username' ";
    $rollno_query_run = mysqli_query($db, $rollno_query);
    if(mysqli_num_rows($rollno_query_run) > 0)
    {
        $query = "UPDATE eventcoordinator SET password='$newpassword' where username='$username' ";
        $query_run = mysqli_query($db, $query);

        if($query_run){
            $_SESSION['status'] = "Your password is Updated";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: GMA_Pwd.php';
            header($MSG); 
        }
        else{
            $_SESSION['status'] = "Your password is NOT Updated";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: GMA_Pwd.php';
            header($MSG); 
        }
    }
    else
    {
        $_SESSION['status'] = "Your Current Password is InCorrect. Please Re-check once again.";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: GMA_Pwd.php';
        header($MSG);  
    }
  
  
}

?>