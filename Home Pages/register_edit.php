<?php 
session_start();
include('../config.php');
include('includes_G/header.php');
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
                
                $query = "SELECT * FROM studentsparticipated WHERE id='$id' ";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> Student Name </label>
                                <input type="text" name="edit_name" value="<?php echo $row['studentName'] ?>" class="form-control"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Roll No</label>
                                <input type="text" name="edit_rollno" value="<?php echo $row['rollno'] ?>" class="form-control"
                                    placeholder="Enter Rollno">
                            </div>
                            <div class="form-group">
                                <label>Branch</label>
                                <input type="text" name="edit_branch" value="<?php echo $row['branch'] ?>"
                                    class="form-control" placeholder="Enter Branch">
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" name="edit_year" value="<?php echo $row['year'] ?>"
                                    class="form-control" placeholder="Enter Year">
                            </div>
                            <div class="form-group">
                                <label>Section</label>
                                <input type="text" name="edit_section" value="<?php echo $row['section'] ?>"
                                    class="form-control" placeholder="Enter Sections">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="edit_category" value="<?php echo $row['Category'] ?>"
                                    class="form-control" placeholder="Enter Category">
                            </div>
                            <div class="form-group">
                                <label>Sub-Category</label>
                                <input type="text" name="edit_subcategory" value="<?php echo $row['subcategory'] ?>"
                                    class="form-control" placeholder="Enter Sub-Category">
                            </div>
                            <div class="form-group">
                                <label>Grace Marks</label>
                                <select class="form-control"  name="edit_gracemarks" aria-label="Default select example" value="<?php echo $row['graceMarks'] ?>" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                  </select>
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
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
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
?>