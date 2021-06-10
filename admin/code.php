<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $subject = $_POST['subject'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $address = $_POST['address'];


    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: register.php';
        header($MSG);  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,subject,firstName,lastName,phone,DOB,email,password,usertype,address) VALUES ('$username','$subject','$fname','$lname','$phone','$dob','$email','$password','$usertype','$address')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                $MSG = 'Location: register.php';
                header($MSG);
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                $MSG = 'Location: register.php';
                header($MSG);  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            $MSG = 'Location: register.php';
            header($MSG);  
        }
    }
}
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $subject = $_POST['edit_subject'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $phone = $_POST['edit_phone'];
    $dob = $_POST['edit_DOB'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertype = $_POST['edit_usertype'];
    $address = $_POST['edit_address'];
    $query = "UPDATE register SET username='$username', subject='$subject', firstName='$fname', lastName='$lname', phone='$phone', DOB='$dob',email='$email', password='$password', usertype='$usertype', address='$address ', WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: register.php';
        header($MSG); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: register.php';
        header($MSG); 
    }
}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: register.php';
        header($MSG); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: register.php';
        header('Location: register.php'); 
    }    
}  
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertype = mysqli_fetch_array($query_run);

    if($usertype['usertype'] == "Admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: dashboard.php');
    }
    else if($usertype['usertype'] == "Class Advisor")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Class_Advisor_Login.html');
    }
    else if($usertype['usertype'] == "Course HandlingFaculty")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Course_Handling_Faculty_Login.html');
    }
    else if($usertype['usertype'] == "Course Mentor")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Course_Mentor_Login.html');
    }
    else if($usertype['usertype'] == "Event Coordinator")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Grace_Mark_Allocator_Login.html');
    }
    else if($usertype['usertype'] == "Exam Coordinator")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../Exam_Coordinator_Login.html');
    }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: index.php');
    }
}



?>