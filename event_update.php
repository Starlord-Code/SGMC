
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
                <label> ID </label>
                <input type="text" name="ID" class="form-control" placeholder="Enter ID">
            </div>

            <div class="form-group">
                <label> EventType </label>
                <input type="text" name="EventType" class="form-control" placeholder="Enter EventType">
                
            </div>
            
            <div class="form-group">
            <label> Category </label>
            <select class="form-control"  name="Category" aria-label="Default select example" >
              <option selected></option>
              <option value="Sports">Sports</option>
              <option value="NSS">NSS</option>
              <option value="NCC">NCC</option>
              <option value="Cultural">Cultural</option>
              <option value="SpecialEvents">Special Events</option>
            </select>
            </div>
            <div class="form-group">
            <label> Sub-Category </label>
            <select class="form-control"  name="SubCategory" aria-label="Default select example" >
              <option selected></option>
              <option value="Cricket">Cricket</option>
              <option value="Football">Football</option>
              <option value="Anokha">Anokha</option>
              <option value="Eventide">Eventide</option>
            </select>
            </div>
            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="eventaddbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Events Details 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Event Info 
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
         $query = "SELECT * FROM events1 ORDER BY Category , SubCategory";
         $query_run = mysqli_query($connection, $query);


      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col"> ID </th>
            <th scope="col"> EventType </th>
            <th scope="col"> Category </th>
            <th scope="col"> Sub-Category </th>
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
 
            <?php
              $id="";
              $name="";
              $category="";
              $subcategory="";
            ?>
          <tr>
          <form action="code.php" method="post">
            <td> <?php echo $row ['ID']; ?>
              <input type="text" name='ID' value= "<?php echo $row ['ID']; ?>" >
              <?php $id = $row['ID']; ?>
            </td>
            <td> 
              <input type="text" name='Name' value= "<?php echo $row ['Name']; ?>" >
              <?php $name = $row['Name']; ?>
            </td>
            <td> 
            <select class="form-control"  name="Category" aria-label="Default select example" >
              <option selected value="<?php echo $row ['Category'] ; ?>"><?php echo $row ['Category'] ; ?></option>
              <option value="Sports">Sports</option>
              <option value="NSS">NSS</option>
              <option value="Anokha">Anokha</option>
              <option value="Cultural">Cultural</option>
              <option value="Others">Others</option>
            </select>
            <?php $category = $row['Category']; ?>
            </td>
            <td> 
            <select class="form-control"  name="SubCategory" aria-label="Default select example" >
              <option selected value="<?php echo $row ['Subcategory'] ; ?>"><?php echo $row ['Subcategory']; ?> </option>
              <option value="Cricket">Cricket</option>
              <option value="Football">Football</option>
              <option value="Day care on orphanages">Day care on orphanages</option>
              <option value="Others">Others</option>
            </select>
            <?php $subcategory = $row['Subcategory']; ?>
            </td>
            <td>
                    <input type="hidden" name="event_apply_id" value="<?php echo $row ['ID']; ?>">
                    <button  type="submit" name="event_apply_btn" class="btn btn-success"> APPLY</button>
            </td>
            <td>
                  <input type="hidden" name="event_delete_id" value="<?php echo $row ['ID']; ?>">
                  <button type="submit" name="event_delete_btn" class="btn btn-danger"> DELETE</button>
            </td>
            </form>
          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

      </table>
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