<?php 
session_start();
include('../config.php');
include('includes_CM/header.php');

?>
<head>
<title>View Software Engineering Interval</title> 
</head>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Software Engineering :
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
         $query = "SELECT * FROM softwareengineering";
         $query_run = mysqli_query($connection, $query);


      ?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
<th>Id</th>
<th>Minimum</th>
<th>Maximum</th>
<th>Grade</th>
</tr>
<?php

if ($connection->connect_error) {
die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT ID, Minimum,Maximum,Grade FROM softwareengineering";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Minimum"] . "</td><td>"
. $row["Maximum"]. "</td><td>". $row["Grade"]. "</td></tr>" ;
}
echo "</table>";
} else { echo "0 results"; }
$connection->close();
?>
</table>
</body>
</html>