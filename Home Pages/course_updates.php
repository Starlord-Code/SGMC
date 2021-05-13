<?php
session_start();
include('../config.php');
include('includes_CHF/header.php');
?>

<head>
<title>Edit Details</title> 
</head>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Students info </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM student_course_details where  Branch = '$branch' and Years='$year' and Section='$section' and subjects='$subject' ";;
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code_CHF.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> Student Name </label>
                                <input type="text" name="edit_name" value="<?php echo $row['StudentName'] ?>" class="form-control"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Roll No</label>
                                <input type="text" name="edit_rollno" value="<?php echo $row['Rollno'] ?>" class="form-control"
                                    placeholder="Enter Rollno">
                            </div>
                            <div class="form-group">
                                <label> P1 Marks </label>
                                <input type="text" name="edit_p1" value="<?php echo $row['P1'] ?>" class="form-control" 
                                placeholder="p1 Marks">
                            </div>
                            <div class="form-group">
                                <label> P2 Marks </label>
                                <input type="text" name="edit_p2" value="<?php echo $row['P2'] ?>" class="form-control" 
                                placeholder="P2 Marks">
                            </div>
                            <div class="form-group">
                                <label> Internals </label>
                                <input type="text" name="edit_internals" value="<?php echo $row['Internals'] ?>" class="form-control" 
                                placeholder="Internals">
                                </div>
                            <div class="form-group">
                                <label> EndSem Marks </label>
                                <input type="text" name="edit_endsem" value="<?php echo $row['EndSem'] ?>" class="form-control" 
                                placeholder="EndSem">
                            </div>
                            <div class="form-group">
                                <label> Total </label>
                                <input type="text" name="edit_total" value="<?php echo $row['Total'] ?>" class="form-control" 
                                placeholder="Total">
                            </div>
                            <div class="form-group">
                                <label> Attendance </label>
                                <input type="text" name="edit_attendance" value="<?php echo $row['Attendance'] ?>" class="form-control"
                                 placeholder="Attendance">
                            </div>
                

                            <a href="./add_course_details.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>


<?php
    
    include('includes_CHF/scripts.php');
    include('includes_CHF/footer.php');
?>