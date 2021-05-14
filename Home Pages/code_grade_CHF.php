<?php
session_start();
include("../config.php");

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $StudentName = $_POST['edit_name'];
    $RollNo = $_POST['edit_rollno'];
    $Total = $_POST['edit_total'];
    $Grade = $_POST['edit_grade'];
    $query = "UPDATE student_course_details SET  Grade='$Grade' WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: add_course_details.php';
        header($MSG); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: add_course_details.php';
        header($MSG); 
    }
}
?>