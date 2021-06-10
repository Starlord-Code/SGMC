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
    $gracemarks = $_POST['marks'];


    $rollno_query = "SELECT * FROM studentsparticipated WHERE rolno='$email' ";
    $rollno_query_run = mysqli_query($db, $email_query);
    if(mysqli_num_rows($rollno_query_run) > 0)
    {
        $_SESSION['status'] = "RollNo is Already Taken. Please Re-check once again.";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: register.php';
        header($MSG);  
    }
    else
    {
        $query = "INSERT INTO studentsparticipated (studentName,rollno,branch,year,section,graceMarks) VALUES ('$studentname','$rollno','$branch','$year','$section','$gracemarks')";
        $query_run = mysqli_query($db, $query);
            
        if($query_run)
        {

            $_SESSION['status'] = " Student info Added";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: register.php';
            header($MSG);
        }
        else 
        {
            $_SESSION['status'] = "Student info Not Added";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: register.php';
            header($MSG);  
        }
        
    }
}
if(isset($_POST['eventaddbtn']))
{
    $ID = $_POST['ID'];
    $EventType = $_POST['EventType'];
    $Category = $_POST['Category'];
    $SubCategory = $_POST['SubCategory'];


    $id_query = "SELECT * FROM events WHERE ID='$ID' ";
    $id_query_run = mysqli_query($db, $id_query);
    if(mysqli_num_rows($id_query_run) > 0)
    {
        $_SESSION['status'] = "ID is Already Taken. Please Re-check once again.";
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: event_update.php';
        header($MSG);  
    }
    else
    {
        $query = "INSERT INTO events (ID,EventType,Category,SubCategory) VALUES ('$ID','$EventType','$Category','$SubCategory')";
        $query_run = mysqli_query($db, $query);
            
        if($query_run)
        {

            $_SESSION['status'] = " Event Info Added";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: event_update.php';
            header($MSG);
        }
        else 
        {
            $_SESSION['status'] = "Event Info Not Added";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: event_update.php';
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
    $category = $_POST['edit_category'];
    $subcategory = $_POST ['edit_subcategory'];
    $query = "UPDATE studentsparticipated SET studentName='$studentname', rollno='$rollno', branch='$branch', year='$year', section='$section', graceMarks='$gracemarks' , Category='$category' , subcategory='$subcategory' WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

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
if(isset($_POST['updateprobtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_uname'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $etype = $_POST['edit_etype'];
    $phone = $_POST['edit_phone'];
    $dob = $_POST['edit_dob'];
    $address = $_POST['edit_address'];
    $query = "UPDATE eventcoordinator SET username='$username', Firstname='$fname', Lastname='$lname', Event type='$etype', Phone='$phone', DOB='$dob' , MailID='$mailid' , Address='$address' WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

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
if(isset($_POST['updateproca']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_uname'];
    $fname = $_POST['edit_fname'];
    $lname = $_POST['edit_lname'];
    $subject = $_POST['subject'];
    $phone = $_POST['edit_phone'];
    $dob = $_POST['edit_dob'];
    $address = $_POST['edit_address'];
    $query = "UPDATE classadvisor SET username='$username', Firstname='$fname', Lastname='$lname', subject='$subject', Phone='$phone', DOB='$dob' , MailID='$mailid' , Address='$address' WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

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
if(isset($_POST['event_apply_btn']))
{
    $id1 = $_POST['event_apply_id'];
    $id = $_POST['ID'];
    $name = $_POST['Name'];
    $category = $_POST['Category'];
    $subcategory = $_POST['SubCategory'];
        $query = "UPDATE events1 SET ID='$id' , Name='$name' , Category='$category', SubCategory='$subcategory' WHERE ID='$id1' ";
        $query_run = mysqli_query($db, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: event_update.php';
            header($MSG); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: event_update.php';
            header($MSG); 
        }
    
}
if(isset($_POST['mark_apply_btn']))
{
    $rollnumber1 = $_POST['mark_apply_id'];
    $maths = $_POST['Maths'];
    $physics = $_POST['Physics'];
    $Chemistry = $_POST['Chemistry'];
    $OS = $_POST['OS'];
    $SoftwareEngineering = $_POST['SoftwareEngineering'];
    $CompilerDesign = $_POST['CompilerDesign'];
    $SGPA = $maths*3/100 + $physics*2/100 + $Chemistry*2/100 + $OS*1/100 + $SoftwareEngineering*1/100 + $CompilerDesign*1/100 ; 
        $query = "UPDATE coursemarks SET  Maths='$maths' , Physics='$physics' , Chemistry='$Chemistry' , OS='$OS' , SoftwareEngineering='$SoftwareEngineering' , CompilerDesign='$CompilerDesign' , SGPA='$SGPA' WHERE RollNumber='$rollnumber1' ";
        $query_run = mysqli_query($db, $query);
        $query1 = "UPDATE studentsparticipated SET graceMarks=0 WHERE rollno='$rollnumber1'";
        $query_run1 = mysqli_query($db, $query1);
        if($query_run && $query_run1)
        {
            $_SESSION['status'] = "Grace Marks are Applied";
            $_SESSION['status_code'] = "success";
            $MSG = 'Location: update_CM_CA.php';
            header($MSG); 
        }
        else
        {
            $_SESSION['status'] = "Grace Marks are Not Applied";
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: update_CM_CA.php';
            header($MSG); 
        }
    
}
if(isset($_POST['ca_apply_all_btn']))
{
    $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $query1="SELECT branch,year,section FROM classadvisor WHERE ID=161";
    $query_run1=mysqli_query($connection,$query1);
    $row =mysqli_fetch_assoc($query_run1);
    $section=$row['section'];
    $branch=$row['branch'];
    $year=$row['year'];
    $query = "SELECT * FROM studentdetails AS A INNER JOIN coursemarks AS B INNER JOIN studentsparticipated AS C where A.RollNumber=B.RollNumber AND A.RollNumber=C.rollno AND A.branch='" . $branch . "' and A.Year='" . $year . "' and A.Section= '" . $section . "';";
    $query_run = mysqli_query($connection, $query);
    $qq = mysqli_num_rows($query_run);
          if($qq > 0)
          {
            $notifylist = array_fill(0, $qq , 0);
            $z=0;
            while($row =mysqli_fetch_assoc($query_run)){
        $grace=$row ['graceMarks'];
        $subjects=(array('Maths','Physics','Chemistry','OS','SoftwareEngineering','CompilerDesign'));
        $marks=array( 0, 0, 0, 0, 0);
        for($i=0;$i<count($subjects);$i++)
        {
            $marks[$i]=$row[$subjects[$i]];
        }
        $grades    =    array('E','D','C','C+','B','B+','A','A+');
        $grademarks=    array( 0 , 60, 70, 75,  80, 85,  90, 95);
        for($i=0;$i<count($marks);$i++)
        {
            if($grace==0)
            {
                break;
            }
            $marksubject=$marks[$i];
            for($j=0;$j<count($grades);$j++)
            {
                $x=$grademarks[$j]-$marksubject;
                if($x>0)
                {
                    if($x<=$grace)
                    {
                        $grace-=$x;
                        $marks[$i]+=$x;
                        $q=$i+1;
                    }
                }
  
            }

        }

        
    $rollnumber1 = $row['RollNumber'];
    $maths = $marks[array_search('Maths',$subjects,true)];
    $physics = $marks[array_search('Physics',$subjects,true)];
    $Chemistry = $marks[array_search('Chemistry',$subjects,true)];
    $OS = $marks[array_search('OS',$subjects,true)];
    $SoftwareEngineering = $marks[array_search('SoftwareEngineering',$subjects,true)];
    $CompilerDesign = $marks[array_search('CompilerDesign',$subjects,true)];
    $SGPA = $maths*3/100 + $physics*2/100 + $Chemistry*2/100 + $OS*1/100 + $SoftwareEngineering*1/100 + $CompilerDesign*1/100 ; 
    $query2 = "UPDATE coursemarks SET  Maths='$maths' , Physics='$physics' , Chemistry='$Chemistry' , OS='$OS' , SoftwareEngineering='$SoftwareEngineering' , CompilerDesign='$CompilerDesign' , SGPA='$SGPA' WHERE RollNumber='$rollnumber1' ";
    $query_run2 = mysqli_query($db, $query);
        $query1 = "UPDATE studentsparticipated SET graceMarks=0 WHERE rollno='$rollnumber1'";
        $query_run1 = mysqli_query($db, $query1);
        if($query_run2 && $query_run1)
        {
            ; 
        }
        else
        {
            $_SESSION['status'] = "Grace Marks are Not Applied from ".$row['RollNumber'].". Problem occured at ".$row['RollNumber'];
            $_SESSION['status_code'] = "error";
            $MSG = 'Location: update_CM_CA.php';
            header($MSG);
        }
            
        }
        }
          
        $_SESSION['status'] = "Grace Marks are Applied";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: update_CM_CA.php';
        header($MSG);
}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM studentsparticipated WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

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
        header($MSG); 
    }    
}

if(isset($_POST['event_delete_btn']))
{
    $id = $_POST['event_delete_id'];
    $query = "DELETE FROM events1 WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        $MSG = 'Location: event_update.php';
        header($MSG); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        $MSG = 'Location: event_update.php';
        header($MSG); 
    }    
} 
if (isset($_POST["export"])) {
    $query = "SELECT * FROM studentsparticipated ORDER BY Category , subcategory";
    $query_run = mysqli_query($db, $query);

    $timestamp = time();
    $filename = 'Export_excel_' . $timestamp . '.xls';
        
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");    
    $isPrintHeader = false;
    
    if(mysqli_num_rows($query_run) > 0)
        {
            while ($row =mysqli_fetch_assoc($query_run)) {
                if (! $isPrintHeader) {
                    echo implode("\t", array_keys($row)) . "\n";
                    $isPrintHeader = true;
                }
                echo implode("\t", array_values($row)) . "\n";
                
            }
        }else {
            echo "No Records Found";
          }

    exit();
    
} 



?>