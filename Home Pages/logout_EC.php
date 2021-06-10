<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: ../Exam_Coordinator_Login.php');
}


?>