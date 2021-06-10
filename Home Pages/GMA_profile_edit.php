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
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Grace Mark Allocator info </h6>
        </div>
        <div class="card-body">
        <?php

            //if(isset($_POST['pro_edit']))
            //{
                //$id = $_POST['pro_edit'];
                
                $id=$_SESSION['ID'];
                $query = "SELECT * FROM eventcoordinator WHERE id= '$id'";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>">

                            <div class="form-group">
                                <label> User Name </label>
                                <input type="text" name="edit_uname" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label> First Name </label>
                                <input type="text" name="edit_fname" value="<?php echo $row['Firstname'] ?>" class="form-control"
                                    placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label> Last Name </label>
                                <input type="text" name="edit_lname" value="<?php echo $row['Lastname'] ?>"
                                    class="form-control" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group">
                                <label> Event Type </label>
                                <input type="text" name="edit_etype" value="<?php echo $row['Event type'] ?>"
                                    class="form-control" placeholder="Enter Event Type">
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <label> Phone </label>
                                <input type="text" name="edit_phone" value="<?php echo $row['Phone'] ?>"
                                    class="form-control" placeholder="Enter Phone">
                            </div>
                            <div class="form-group">
                                <label> DOB </label>
                                <input type="text" name="edit_dob" value="<?php echo $row['DOB'] ?>"
                                    class="form-control" placeholder="Enter DOB">
                            </div>
                            <div class="form-group">
                                <label> MailID </label>
                                <input type="text" name="edit_mailid" value="<?php echo $row['MailID'] ?>"
                                    class="form-control" placeholder="Enter MailID">
                            </div>
                            <div class="form-group">
                                <label> Address </label>
                                <input type="text" name="edit_address" value="<?php echo $row['Address'] ?>"
                                    class="form-control" placeholder="Enter Address">
                            </div>
                            
                            <a href="Grace Mark Allocator homepage.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updateprogma" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            //}
        ?>
        </div>
    </div>
</div>

</div>


<?php
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
?>