
<?php 
session_start();
include('../config.php');
include('includes_G/header.php');

?>
<head>
<title>View Students Details</title> 
</head>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Students Details
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
            <th scope="col"> Grace Marks </th>
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
            <td> <?php echo $row ['graceMarks']; ?> </td>
            
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
      <div class="btn">
            <form action="code.php" method="post">
                <button type="submit" id="btnExport" name='export'
                    value="Export to Excel" class="btn btn-success">Export
                    to Excel</button>
            </form>
        </div>

    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
   ?>