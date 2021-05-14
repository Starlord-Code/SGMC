<?php
session_start();
include("../config.php");

if(isset($_POST['registerbtn']))
{
    $StudentName = $_POST['name'];
    $RollNo = $_POST['rollno'];
    $Branch = $_SESSION['Branch'];
    $Year = $_SESSION['Year'];
    $Section = $_SESSION['Section'];
    $Subject = $_SESSION['Subject'];
    $P1 = $_POST['p1'];
    $P2 = $_POST['p2'];
    $Internals = $_POST['internals'];
    $EndSem = $_POST['endsem'];
    $Total = $_POST['total'];
    $Attendance = $_POST['attendance'];
    


    $rollno_query = "SELECT * FROM student_course_details WHERE Rollno='$RollNo' ";
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
        $query = "INSERT INTO student_course_details (StudentName,RollNo,Years,Branch,Section,Subjects,P1,P2,Internals,EndSem,Total,Attendance) VALUES ('$StudentName','$RollNo','$Year','$Section','$Subject','$P1','$P2','$Internals','$EndSem','$Total','$Attendance')";
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
    $StudentName = $_POST['edit_name'];
    $RollNo = $_POST['edit_rollno'];
    $P1 = $_POST['edit_p1'];
    $P2 = $_POST['edit_p2'];
    $Internals = $_POST['edit_internals'];
    $EndSem = $_POST['edit_endsem'];
    $Total = $_POST['edit_total'];
    $Attendance = $_POST['edit_attendance'];
    $query = "UPDATE student_course_details SET StudentName='$StudentName', RollNo='$RollNo', P1='$P1', P2='$P2', Internals='$Internals', EndSem='$EndSem', Total='$Total', Attendance='$Attendance' WHERE id='$id' ";
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