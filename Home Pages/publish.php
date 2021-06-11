
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
    <h6 class="m-0 font-weight-bold text-primary">Students Marks Details
    </h6>
    <?php
        $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $query1="SELECT classadvisor FROM update_details WHERE ID = 1";
        $query_run1=mysqli_query($connection,$query1);
        $row =mysqli_fetch_assoc($query_run1);
        if($row['classadvisor']=="True")
        {
            ?>
            <h6 class="m-0 font-weight-bold text-primary" >Marks had been updated by the class advisor</h6>
            <?php
        }
        else
        {
            ?>
            <h6 class="m-0 font-weight-bold text-primary" >Marks have not yet been updated by the class advisor</h6>
            <?php
        }
    ?>
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
         $query = "SELECT * FROM student_course_details";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Student Name </th>
            <th scope="col"> RollNo </th>
            <th scope="col"> Branch </th>
            <th scope="col"> Years </th>
            <th scope="col"> Section </th>
            <th scope="col"> Subjects </th>
            <th scope="col"> P1 </th>
            <th scope="col"> P2 </th>
            <th scope="col"> Internals </th>
            <th scope="col"> EndSem </th>
            <th scope="col"> Total </th>
            <th scope="col"> Attendance </th>
            <th scope="col"> Grades </th>
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
            <td> <?php echo $row ['Branch']; ?> </td>
            <td> <?php echo $row ['Years']; ?> </td>
            <td> <?php echo $row ['Section']; ?> </td>
            <td> <?php echo $row ['Subjects']; ?> </td>
            <td> <?php echo $row ['P1']; ?> </td>
            <td> <?php echo $row ['P2']; ?> </td>
            <td> <?php echo $row ['Internals']; ?> </td>
            <td> <?php echo $row ['EndSem']; ?> </td>
            <td> <?php echo $row ['Total']; ?> </td>
            <td> <?php echo $row ['Attendance']; ?> </td>
            <td> <?php echo $row ['Grades']; ?> </td>
            
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
                <button type="submit" id="btnExport" name='publishexport'
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