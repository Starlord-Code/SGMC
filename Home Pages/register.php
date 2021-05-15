
<?php 
session_start();
include('../config.php');
include('includes_G/header.php');

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
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Student Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label> Roll No</label>
                <input type="text" name="rollno" class="form-control" placeholder="Enter CB.EN.U4xxxxxxx">
            </div>
            <div class="form-group">
            <label> Branch </label>
            <select class="form-control"  name="branch" aria-label="Default select example" >
              <option selected>Branch</option>
              <option value="CSE">CSE</option>
              <option value="ECE">ECE</option>
              <option value="EEE">EEE</option>
              <option value="MEC">MEC</option>
              <option value="Others">Others</option>
            </select>
            </div>
            <div class="form-group">
            <label> Year </label>
            <select class="form-control"  name="year" aria-label="Default select example" >
              <option selected>Year</option>
              <option value="1">1st Year</option>
              <option value="2">2nd Year</option>
              <option value="3">3rd Year</option>
              <option value="4">4th Year</option>
            </select>
            </div>
            <div class="form-group">
                <label> Section </label>
                <input type="text" name="section" class="form-control" placeholder="Section">
            </div>
            <div class="form-group">
            <label> Category </label>
            <select class="form-control"  name="category" aria-label="Default select example" >
              <option selected>Category</option>
              <option value="NSS">NSS</option>
              <option value="SPORTS">Sports</option>
              <option value="CULTURAL">Cultural</option>
              <option value="SPECIAL EVENTS">Special Events</option>
              <option value="OTHERS">Others</option>
            </select>
            </div>
            <div class="form-group">
                <label> subcategory </label>
                <input type="text" name="subcategory" class="form-control" placeholder="Section">
            </div>
            <div class="form-group">
            <label> Grace Marks</label>
            <select class="form-control"  name="marks" aria-label="Default select example" >
              <option selected>Grace Marks</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              
            </select>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Student info 
            </button>
    </h6>
  </div>

  <div class="card-body">
    <?php

     if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
     {
       echo '<h2> '.$_SESSION['status'].' </h2';
       unset($_SESSION['status']);
     }

    ?>

    <div class="table-responsive">
      <?php
         $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
         $query = "SELECT * FROM studentsparticipated";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Student Name </th>
            <th scope="col"> RollNo </th>
            <th scope="col"> Branch </th>
            <th scope="col"> Year </th>
            <th scope="col"> Section </th>
            <th scope="col"> Category </th>
            <th scope="col"> SubCategory </th>
            <th scope="col"> Grace Marks </th>
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
            <td> <?php echo $row ['studentName']; ?></td>
            <td> <?php echo $row ['rollno']; ?></td>
            <td> <?php echo $row ['branch']; ?> </td>
            <td> <?php echo $row ['year']; ?> </td>
            <td> <?php echo $row ['section']; ?> </td>
            <td> <?php echo $row ['Category']; ?> </td>
            <td> <?php echo $row ['subcategory']; ?> </td>
            <td> <?php echo $row ['graceMarks']; ?> </td>
            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row ['ID']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
               
                  <button type="submit" data-toggle="modal" data-target="#DELETE" 
                        class="btn btn-danger">
                        DELETE</button>
                
            </td>
             
            <div class="modal fade" id="DELETE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="code.php" method="POST"> 
                       <input type="hidden" name="delete_id" value="<?php echo $row ['ID']; ?>">
                       <button type="submit" name="delete_btn" class="btn btn-primary"> DELETE</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
        


          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

        <button type="button" class="btn btn-info" onclick="location.href = './Grace Mark Allocator homepage.php';">Go back</button>
        
      </table>

      
        

    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
   ?>