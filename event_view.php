
<?php 
session_start();
include('../config.php');
include('includes_G/header.php');

?>

<head>
<title>Details Entry</title> 
</head>



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Events Details 
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
         $query = "SELECT * FROM events ORDER BY Category , SubCategory";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> EventType </th>
            <th scope="col"> Category </th>
            <th scope="col"> Sub-Category </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
 
      
          <tr>
            <td> <?php echo $row ['ID']; ?>  </td>
            <td> <?php echo $row ['EventType'] ; ?> </td>
            <td> <?php echo $row ['Category'] ; ?>  </td>
            <td> <?php echo $row ['SubCategory'] ; ?> </td>
          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

      </table>
      <div style="padding-left:90%;margin-bottom:10px;">
        <button type="button" class="btn btn-info" onclick="location.href = './event_update.php';">Update</button>
      </div>
      <div style="padding-left:90%">
        <button type="button" class="btn btn-info" onclick="location.href = './Grace Mark Allocator homepage.php';">Go back</button>
      </div>
    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
   ?>