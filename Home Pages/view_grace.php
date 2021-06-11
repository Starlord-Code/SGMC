<?php 
session_start();
include('../config.php');
include('includes_CA/header.php');

?>
<head>
<title>View Students Course Marks</title> 
</head>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Students' Grace Marks
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
         $query1="SELECT branch,year,section FROM classadvisor WHERE ID=161";
         $query_run1=mysqli_query($connection,$query1);
         $row =mysqli_fetch_assoc($query_run1);
         $section=$row['section'];
         $branch=$row['branch'];
         $year=$row['year'];
         $query = "SELECT * FROM studentsparticipated ;";
         $query_run = mysqli_query($connection, $query);
         

      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> Student Name </th>
            <th scope="col"> RollNo </th>
            <th scope="col"> Branch </th>
            <th scope="col"> Year </th>
            <th scope="col"> Section </th>
            <th scope="col"> GraceMarks </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
 
      
          <tr>
            <td> <?php echo $row ['studentName']; ?></td>
            <td> <?php echo $row ['rollno']; ?></td>
            <td> <?php echo $row ['branch']; ?> </td>
            <td> <?php echo $row ['year']; ?> </td>
            <td> <?php echo $row ['section']; ?> </td>
            <td> <?php echo $row ['graceMarks']; ?> </td>
          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

      </table>
      <div style="padding-left:90%;margin:10px;">
        <button type="button" class="btn btn-info" onclick="location.href = 'update_CM_CA.php';">Update</button>
      </div>
      <div style="padding-left:90%;">
        <button type="button" class="btn btn-info" onclick="location.href = './class advisor homepage.php';">Go back</button>
      </div>
    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_CA/scripts.php');
    include('includes_CA/footer.php');
   ?>