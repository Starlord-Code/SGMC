<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php');

?>
<head>
<title>Edit Details</title> 
</head>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM register WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label> Subject </label>
                                <input type="text" name="edit_subject" value="<?php echo $row['subject'] ?>" class="form-control"
                                    placeholder="Enter subject">
                            </div>
                            <div class="form-group">
                                <label> First Name</label>
                                <input type="text" name="edit_fname" value="<?php echo $row['firstName'] ?>" class="form-control"
                                    placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label> Last Name </label>
                                <input type="text" name="edit_lname" value="<?php echo $row['lastName'] ?>" class="form-control"
                                    placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label> Phone </label>
                                <input type="number" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control"
                                    placeholder="Enter phone Number">
                            </div>
                            <div class="form-group">
                                <label> DOB </label>
                                <input type="date" name="edit_DOB" value="<?php echo $row['DOB'] ?>" class="form-control"
                                    placeholder="Enter DOB">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>UserType</label>
                                <select class="form-control"  name="edit_usertype" aria-label="Default select example" value="<?php echo $row['usertype'] ?>" >
                                        <option value="Admin">Admin</option>
                                        <option value="Class Advisor">Class Advisor</option>
                                        <option value="Course HandlingFaculty">Course HandlingFaculty</option>
                                        <option value="Course Mentor">Course Mentor</option>
                                        <option value="Event Coordinator">Event Coordinator</option>
                                        <option value="Exam Coordinator">Exam Coordinator</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label> Address </label>
                                <input type="text" name="edit_address" value="<?php echo $row['address'] ?>" class="form-control"
                                    placeholder="Enter address">
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
include('includes/scripts.php');
include('includes/footer.php');
?>