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
            $branch=$_SESSION['Branch'];
            $year=$_SESSION['Year'];
            $section=$_SESSION['Section'];
            $subject=$_SESSION['Subject'];
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM student_course_details where  Branch = '$branch' and Years='$year' and Section='$section' and Subjects='$subject' ";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code_grade_CHF.php" method="POST">

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
                                <label> Total </label>
                                <input type="text" name="edit_total" value="<?php echo $row['Total'] ?>" class="form-control" 
                                placeholder="Total">
                            </div>
                            <div class="form-group">
                                <label> Grade </label>
                                <input type="text" name="edit_grade" value="<?php echo $row['Grade'] ?>" class="form-control"
                                 placeholder="Grade">
                            </div>
                

                            <a href="./update_grade_CHF.php" class="btn btn-danger"> CANCEL </a>
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