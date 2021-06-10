<?php 
session_start();
include('../config.php');
include('includes_CM/header.php');

?>
<head>
<title>View Subjects</title> 
</head>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Subjects :
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
         $query = "SELECT * FROM subjects";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Subject </th>
            <th scope="col">View Intervals </th>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
 
      
          <tr>
            <td><?php echo $row ['ID']; ?> </td>
            <td> <?php echo $row ['Subject']; ?></td> 
           
            <td>
                <form action="view_intervals.php" method="post">
                    <input type="hidden" name="view_id" value="<?php echo $row ['ID']; ?>">
                    <button  type="submit" name="view_btn" class="btn btn-success" value="view_intervals.php"> VIEW</button>
                </form>
            </td> 
        
          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

        <button type="button" class="btn btn-info" onclick="location.href = './course mentor homepage.php';">Go back</button>

      </table>

    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_CM/scripts.php');
    include('includes_CM/footer.php');
   ?>