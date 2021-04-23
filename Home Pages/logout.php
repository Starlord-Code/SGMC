<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: ../Grace_Mark_Allocator_Login.html');
}


?>