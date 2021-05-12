<?php
session_start();
include("../config.php");

if(isset($_POST['registerbtn']))
{
    $studentname = $_POST['name'];
    $rollno = $_POST['rollno'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $gracemarks = $_POST['marks'];


    $rollno_query = "SELECT * FROM studentsparticipated WHERE rolno='$email' ";
    $rollno_query_run = mysqli_query($db, $email_query);
    if(mysqli_num_rows($rollno_query_run) > 0)
    {
        $_SESSION['status'] = "RollNo is Already Taken. Please Re-check once again.";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: add_course_details.php';
        header($MSG);  
    }
    else
    {
        $query = "INSERT INTO studentsparticipated (studentName,rollno,branch,year,section,Category,subcategory,graceMarks) VALUES ('$studentname','$rollno','$branch','$year','$section','$category','$subcategory','$gracemarks')";
        $query_run = mysqli_query($db, $query);
            
        if($query_run)
        {

            $_SESSION['status'] = " Student info Added";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: add_course_details.php';
            header($MSG);
        }
        else 
        {
            $_SESSION['status'] = "Student info Not Added";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: add_course_details.php';
            header($MSG);  
        }
        
    }
}
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $studentname = $_POST['edit_name'];
    $rollno = $_POST['edit_rollno'];
    $branch = $_POST['edit_branch'];
    $year = $_POST['edit_year'];
    $section = $_POST['edit_section'];
    $gracemarks = $_POST['edit_gracemarks'];
    $query = "UPDATE studentsparticipated SET studentName='$studentname', rollno='$rollno', branch='$branch', year='$year', section='$section', graceMarks='$gracemarks' WHERE id='$id' ";
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
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM student_course_details WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: add_course_details.php';
        header($MSG); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: add_course_details.php';
        header($MSG); 
    }    
}