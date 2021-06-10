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
    <h6 class="m-0 font-weight-bold text-primary">Students' Course Marks
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
         $query = "SELECT * FROM studentdetails AS A INNER JOIN coursemarks AS B where A.RollNumber=B.RollNumber AND branch='" . $branch . "' and year='" . $year . "' and section= '" . $section . "';";
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
            <th scope="col"> Maths </th>
            <th scope="col"> Physics </th>
            <th scope="col"> Chemistry </th>
            <th scope="col"> OS </th>
            <th scope="col"> Software Engineering </th>
            <th scope="col"> Compiler Design </th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
 
      
          <tr>
            <td> <?php echo $row ['StudentName']; ?></td>
            <td> <?php echo $row ['RollNumber']; ?></td>
            <td> <?php echo $row ['Branch']; ?> </td>
            <td> <?php echo $row ['Year']; ?> </td>
            <td> <?php echo $row ['Section']; ?> </td>
            <td> <?php echo $row ['Maths']; ?> </td>
            <td> <?php echo $row ['Physics']; ?> </td>
            <td> <?php echo $row ['Chemistry']; ?> </td>
            <td> <?php echo $row ['OS']; ?> </td>
            <td> <?php echo $row ['SoftwareEngineering']; ?> </td>
            <td> <?php echo $row ['CompilerDesign']; ?> </td>
            
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