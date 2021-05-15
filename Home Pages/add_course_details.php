<?php 
session_start();
include('../config.php');
include('includes_CHF/header.php');

?>

<head>
<title>Details Entry</title> 
</head>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./code_CHF.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Student Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label> Roll No</label>
                <input type="text" name="rollno" class="form-control" placeholder="Enter CB.EN.U4xxxxxxx" required>
            </div>
            <div class="form-group">
                <label> P1 Marks </label>
                <input type="text" name="p1" class="form-control" placeholder="p1 Marks" >
            </div>
            <div class="form-group">
                <label> P2 Marks </label>
                <input type="text" name="p2" class="form-control" placeholder="P2 Marks" >
            </div>
            <div class="form-group">
                <label> Internals </label>
                <input type="text" name="internals" class="form-control" placeholder="Internals" >
            </div>
            <div class="form-group">
                <label> EndSem Marks </label>
                <input type="text" name="endsem" class="form-control" placeholder="EndSem" >
            </div>
            <div class="form-group">
                <label> Total </label>
                <input type="text" name="total" class="form-control" placeholder="Total">
            </div>
            <div class="form-group">
                <label> Attendance </label>
                <input type="text" name="attendance" class="form-control" placeholder="Attendance">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Students Details
            <br> 
            
    </h6>
  </div>

  <div class="card-body">
    <?php
     $branch=$_SESSION['Branch'];
     $year=$_SESSION['Year'];
     $section=$_SESSION['Section'];
     $subject=$_SESSION['Subject'];

     if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
     {
       echo '<h2> '.$_SESSION['status'].' </h2';
       unset($_SESSION['status']);
     }

    ?>

    <div class="table-responsive">
      <?php
         $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
         $query = "SELECT * FROM student_course_details where  Branch = '$branch' and Years='$year' and Section='$section' and Subjects='$subject' ";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Student Name </th>
            <th scope="col"> RollNo </th>
            <th scope="col"> P1 </th>
            <th scope="col"> P2 </th>
            <th scope="col"> Internals </th>
            <th scope="col"> EndSem </th>
            <th scope="col"> Total </th>
            <th scope="col"> Attendance </th>
            <th scope="col">EDIT </th>
            <th scope="col">DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
 
      
          <tr>
            <td><?php echo $row ['ID']; ?> </td>
            <td> <?php echo $row ['StudentName']; ?></td>
            <td> <?php echo $row ['Rollno']; ?></td>
            <td> <?php echo $row ['P1']; ?></td>
            <td> <?php echo $row ['P2']; ?></td>
            <td> <?php echo $row ['Internals']; ?></td>
            <td> <?php echo $row ['EndSem']; ?></td>
            <td> <?php echo $row ['Total']; ?></td>
            <td> <?php echo $row ['Attendance']; ?></td>
            <td>
                <form action="./course_updates.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row ['ID']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
            <button type="submit" data-toggle="modal" data-target="#DELETE" 
            class="btn btn-danger">DELETE</button>
                 
            </td>

          </tr> <div class="modal fade" id="DELETE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "DELETE" below if you are ready to delete the record.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="code_CHF.php" method="POST"> 
                       <input type="hidden" name="delete_id" value="<?php echo $row ['ID']; ?>">
                       <button type="submit" name="delete_btn" class="btn btn-primary"> DELETE</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>
        <button type="button" class="btn btn-info" onclick="location.href = './Course Handling Faculty homepage.php';">Go back</button>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="button" class="btn btn-primary me-md-2" data-toggle="modal" data-target="#addadminprofile">
                 Add Student info 
                 </button>
                <br>
                 
        </div> 
      </table>

    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_CHF/scripts.php');
    include('includes_CHF/footer.php');
   ?>