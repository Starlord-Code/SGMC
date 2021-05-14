<?php 
session_start();
include('../config.php');
include('includes_CHF/header.php');

?>

<head>
<title>Details Entry</title> 
</head>



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
            <th scope="col"> Total </th>
            <th scope="col"> Grade </th>
            <th scope="col">EDIT </th>
           
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
            <td> <?php echo $row ['Total']; ?></td>
            <td> <?php echo $row ['Grade']; ?></td>
            <td>
                <form action="./update_edit_grade_CHF.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row ['ID']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
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
        <button type="button" class="btn btn-info" onclick="location.href = './Course Handling Faculty homepage.php';">Go back</button>
      </table>

    </div>
  </div>
</div>

</div>
<?php
    
    include('includes_CHF/scripts.php');
    include('includes_CHF/footer.php');
   ?>