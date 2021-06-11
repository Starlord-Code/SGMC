<?php 
session_start();
include('../config.php');
include('includes_CA/header.php');

?>
<head>
<title>View Students Course Marks</title> 
<style>
    .table1 tr
    {
        display:inline-flex;
    }
    .table1 tr td
    { 
        display:flex;
        flex:inline;
        flex-direction:row;
    }
    .table tr td .colored{
        color:rgb(252, 59, 45);
    }

</style>
<script> 
        var zx=0;
        function toggle($zx) { if(checkboxElem.checked) {<? $notifylist[$z]=1; ?>} else {<? $notifylist[$z]=0; ?>} };;
        function toggle1(<? $z ?>,image) {  
           <? $notifylist[$z]=1; echo $notifylist[$z]; ?> ;
           if(image.src=="assets/images/unchecked.jpg")
            image.src="assets/images/checked.jpg";
          else 
            image.src="assets/images/unchecked.jpg"; }
        function toggle2(<? $z ?>,image) {  
           <? if ( $notifylist[$z]==1 ) $notifylist[$z] = 0 ; else $notifylist[$z] = 1 ; ?> ;
            image.style.backgroundColor="red";
             }
</script>
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
         $query = "SELECT * FROM studentdetails AS A INNER JOIN coursemarks AS B INNER JOIN studentsparticipated AS C where A.RollNumber=B.RollNumber AND A.RollNumber=C.rollno AND A.branch='" . $branch . "' and A.Year='" . $year . "' and A.Section= '" . $section . "';";
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
            <th scope="col"> Grace Marks </th>
            <th scope="col"> SGPA </th>
            <th scope="col"> Apply </th>
            <th scope="col"> Report </th>
          </tr>
        </thead>
        <tbody>
        
        <?php
          $qq = mysqli_num_rows($query_run);
          if($qq > 0)
          {
            $notifylist = array_fill(0, $qq , 0);
            $z=0;
            while($row =mysqli_fetch_assoc($query_run)){
              ?>
        
        <?php
        $grace=$row ['graceMarks'];
        $subjects=(array('Maths','Physics','Chemistry','OS','SoftwareEngineering','CompilerDesign'));
        $marks=array( 0, 0, 0, 0, 0);
        for($i=0;$i<count($subjects);$i++)
        {
            $marks[$i]=$row[$subjects[$i]];
        }
        $grades    =    array('E','D','C','C+','B','B+','A','A+');
        $grademarks=    array( 0 , 60, 70, 75,  80, 85,  90, 95);
        for($i=0;$i<count($marks);$i++)
        {
            if($grace==0)
            {
                break;
            }
            $marksubject=$marks[$i];
            for($j=0;$j<count($grades);$j++)
            {
                $x=$grademarks[$j]-$marksubject;
                if($x>0)
                {
                    if($x<=$grace)
                    {
                        $grace-=$x;
                        $marks[$i]+=$x;
                        $q=$i+1;
                    }
                }
  
            }

        }


        ?>
                
          <tr>
            <td> <?php echo $row ['StudentName']; ?></td>
            <td> <?php echo $row ['RollNumber']; ?></td>
            <td> <?php echo $row ['Branch']; ?> </td>
            <td> <?php echo $row ['Year']; ?> </td>
            <td> <?php echo $row ['Section']; ?> </td>
            <?php
            if ($row ['Maths'] == $marks[array_search('Maths',$subjects,true)])
            {
                $Maths = $row ['Maths'];
                ?><td ><input type='hidden' name='Maths' value= "<?php echo $row ['Maths']; ?>" >
                  <span name='maths' value="<?php echo $row ['Maths']; ?>"> <?php echo $row ['Maths']; ?></span> </td><?php    
            }
            else
            {
                $Maths = $marks[array_search('Maths',$subjects,true)];
                ?><td ><input type='hidden'  name='maths' value="<?php echo $row ['Maths']+ $marks[array_search('Maths',$subjects,true)]; ?>">
                <span name='maths' value="<?php echo $row ['Maths']+ $marks[array_search('Maths',$subjects,true)]; ?>"><?php echo $row ['Maths']  ?></span><span class="colored"> -> <?php echo $marks[array_search('Maths',$subjects,true)]; ?> </span></td><?php    
            }
            if ($row ['Physics'] == $marks[array_search('Physics',$subjects,true)])
            {
                $Physics = $row ['Physics'];
                ?><td> <input type="hidden" name='physics' value="<?php echo $row ['Physics']; ?>">
                <span name='physics' value="<?php echo $row ['Physics']; ?>"><?php echo $row ['Physics']; ?></span> </td><?php    
            }
            else
            {
                $Physics = $marks[array_search('Physics',$subjects,true)];
                ?><td> <input type='hidden' name='physics' value="<?php echo $row ['Physics'] + $marks[array_search('Physics',$subjects,true)]; ?>">
                <span name='physics' value="<?php echo $row ['Physics'] + $marks[array_search('Physics',$subjects,true)]; ?>"><?php echo $row ['Physics']; ?></span><span class="colored"> -> <?php echo $marks[array_search('Physics',$subjects,true)]; ?> </span></td><?php    
            }
            if ($row ['Chemistry'] == $marks[array_search('Chemistry',$subjects,true)])
            {
                $Chemistry = $row ['Chemistry'];
                ?><td> <input type='hidden' name='Chemistry' value="<?php echo $row ['Chemistry']; ?>">
                <span name='Chemistry' value="<?php echo $row ['Chemistry']; ?>"><?php echo $row ['Chemistry']; ?></span> </td><?php    
            }
            else
            {
                $Chemistry = $marks[array_search('Chemistry',$subjects,true)] ;
                ?><td> <input type='hidden' name='Chemistry' value="<?php echo $row ['Chemistry'] + $marks[array_search('Chemistry',$subjects,true)]; ?>">
                <span name='Chemistry' value="<?php echo $row ['Chemistry'] + $marks[array_search('Chemistry',$subjects,true)]; ?>"><?php echo $row ['Chemistry']; ?></span><span class="colored"> -> <?php echo $marks[array_search('Chemistry',$subjects,true)]; ?> </span></td><?php    
            }
            if ($row ['OS'] == $marks[array_search('OS',$subjects,true)])
            {
                $OS = $row ['OS'] ;
                ?><td> <input type='hidden' name='OS' value="<?php echo $row ['OS']; ?>">
                <span name='OS' value="<?php echo $row ['OS']; ?>"><?php echo $row ['OS']; ?></span> </td><?php    
            }
            else
            {
                $OS = $marks[array_search('OS',$subjects,true)];
                ?><td> <input type='hidden' name='OS' value="<?php echo $row ['OS'] + $marks[array_search('OS',$subjects,true)]; ?>">
                <span  name='OS' value="<?php echo $row ['OS'] + $marks[array_search('OS',$subjects,true)]; ?>"><?php echo $row ['OS']; ?></span><span class="colored"> -> <?php echo $marks[array_search('OS',$subjects,true)]; ?> </span></td><?php    
            }
            if ($row ['SoftwareEngineering'] == $marks[array_search('SoftwareEngineering',$subjects,true)])
            {
                $Software = $row ['SoftwareEngineering'] ;
                ?><td> <input type='hidden' name='SoftwareEngineering' value="<?php echo $row ['SoftwareEngineering']; ?>">
                <span name='SoftwareEngineering' value="<?php echo $row ['SoftwareEngineering']; ?>"><?php echo $row ['SoftwareEngineering']; ?></span> </td><?php    
            }
            else
            {
                $Software =  $marks[array_search('SoftwareEngineering',$subjects,true)];
                ?><td> <input type='hidden' name='SoftwareEngineering' value="<?php echo $row ['SoftwareEngineering'] + $marks[array_search('SoftwareEngineering',$subjects,true)]; ?>">
                <span name='SoftwareEngineering' value="<?php echo $row ['SoftwareEngineering'] + $marks[array_search('SoftwareEngineering',$subjects,true)]; ?>"><?php echo $row ['SoftwareEngineering']; ?></span><span class="colored"> -> <?php echo $marks[array_search('SoftwareEngineering',$subjects,true)]; ?> </span></td><?php    
            }
            if ($row ['CompilerDesign'] == $marks[array_search('CompilerDesign',$subjects,true)])
            {
                $compiler = $row ['CompilerDesign'] ;
                ?><td> <input type='hidden' name='CompilerDesign' value="<?php echo $row ['CompilerDesign']; ?>">
                <span name='CompilerDesign' value="<?php echo $row ['CompilerDesign']; ?>"><?php echo $row ['CompilerDesign']; ?></span> </td><?php    
            }
            else
            {
                $compiler = $row ['CompilerDesign'] + $marks[array_search('CompilerDesign',$subjects,true)];
                ?><td> <input type='hidden' name='CompilerDesign' value="<?php echo $marks[array_search('CompilerDesign',$subjects,true)]; ?>">
                <span name='CompilerDesign' value="<?php echo $row ['CompilerDesign'] + $marks[array_search('CompilerDesign',$subjects,true)]; ?>"><?php echo $row ['CompilerDesign']; ?></span><span class="colored"> -> <?php echo $marks[array_search('CompilerDesign',$subjects,true)]; ?> </span></td><?php    
            }
            ?>
            <td> <?php echo $row ['graceMarks']; ?> </td>
            <td> <?php echo $row ['SGPA']; ?> </td>
            <td>
                <form action="code.php" method="post">
                    <input type='hidden' name='Maths' value="<?php echo $Maths ; ?>">
                    <input type='hidden' name='Physics' value="<?php echo $Physics ; ?>">
                    <input type='hidden' name='Chemistry' value="<?php echo $Chemistry ; ?>">
                    <input type='hidden' name='OS' value="<?php echo $OS ; ?>">
                    <input type='hidden' name='SoftwareEngineering' value="<?php echo $Software ; ?>">
                    <input type='hidden' name='CompilerDesign' value="<?php echo $compiler ; ?>">
                    <input type="hidden" name="mark_apply_id" value="<?php echo $row ['RollNumber']; ?>">
                    <button  type="submit" name="mark_apply_btn" class="btn btn-success">APPLY</button>
                </form>  
            </td>
            <td>
              <img src="./assets/images/unchecked.jpg" style="width:20px;height:20px;" onclick='if(this.src="./assets/images/unchecked.jpg"){this.src="./assets/images/checked.jpg";} else {this.src="./assets/images/unchecked.jpg";};'>
              <button type="button" id="z2" name="reportbutton" style="border:none;" class="btn btn-info" onclick="togglereport()"></button>
            </td> 
            <td>
            <section title=".squaredThree">
    <!-- .squaredThree -->
    <div class="squaredThree">
      <input type="checkbox" value="None" id="squaredThree" name="check" checked />
      <label for="squaredThree"></label>
    </div>
    <!-- end .squaredThree -->
  </section>
            </td> 
          </tr>
          
          <?php
            }
          }else {
            echo "No Records Found";
          }

        ?>
        
        </tbody>

      </table>
      <div style="padding-left:90%; margin-bottom:10px;">
          <form action="code.php" method="post">
            <button type="submit" name="ca_apply_all_btn" class="btn btn-info" >Apply All</button>
          </form>
      </div>
      <div style="padding-left:90%; margin-bottom:10px;">
        <button type="button" class="btn btn-info" onclick="location.href = './class advisor homepage.php';">Go back</button>
      </div>
      <div style="padding-left:90%;">
        <button type="button" class="btn btn-info" onclick=<?php for($i=0;$i<$qq;$i++) echo $notifylist[$i] ;  ?>>Report</button>
      </div>
      <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
      var $on = 'section';
      $($on).css({
        'background':'none',
        'border':'none',
        'box-shadow':'none'
        });
      }); 
        function togglereport()
        {
          /*if(zx==1)
          {
            q.src=="./assets/images/unchecked.jpg";
            zx=0;
            return;
          }
          var zx=1;
          
          if(q.src=="./assets/images/unchecked.jpg"){q.src="./assets/images/checked.jpg";zx=1;} 
          else if(q.src=="./assets/images/checked.jpg"){q.src="./assets/images/unchecked.jpg";}
          */
          zq=document.getElementById('z2');
          if(zq.src=="./assets/images/unchecked.jpg"){zq.src="./assets/images/checked.jpg";} 
          else {zq.src="./assets/images/unchecked.jpg";}
          
        }
      </script>
      
    </div>
  </div>
</div>

</div>

<?php
    
    include('includes_CA/scripts.php');
    include('includes_CA/footer.php');
   ?>
   <style>
        @import "compass/css3";
        .squaredThree {
  width: 20px;
  position: relative;
  margin: 0px auto;
  padding:0px;
  label {
    padding:0px;
    width: 20px;
    height: 20px;
    cursor: pointer;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    border-radius: 4px;
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,.4);
    &:after {
      content: '';
      width: 9px;
      height: 5px;
    padding:0px;
      position: absolute;
      top: 4px;
      left: 4px;
      border: 3px solid #fcfff4;
      border-top: none;
      border-right: none;
      background: transparent;
      opacity: 0;
      transform: rotate(-45deg);
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }    
  }
  *{box-sizing: border-box;}
body {
  background: $background;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  h1, h2, em {
    color: #eee;
    font-size: 30px;
    text-align: center;
    margin: 20px 0 0 0;
    -webkit-font-smoothing: antialiased;
    text-shadow: 0px 1px #000;
  }
  em{
    font-size: 14px;
    text-align: center;
    display: block;
    margin-bottom: 50px;
  }
  .ondisplay{
    text-align:center;
    padding:20px 0;
    section{
      width:10px;
      height:10px;
      background: #555;
      display:inline-block;
      position: relative;
      text-align: center;
      margin-top:5px;
      border: 1px solid gray;
      border-radius: 5px;
      box-shadow:
        0 1px 4px rgba(0, 0, 0, 0.3), 
        0 0 40px rgba(0, 0, 0, 0.1) inset;
      &:after{
/*         visibility: hidden; */
        content:attr(title);
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 3px;
        color: #fff;
        font-size: 12px;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        text-shadow: 0px 1px #000; 
      }
    }
  }
}
}
      </style>
      <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
      var $on = 'section';
      $($on).css({
        'background':'none',
        'border':'none',
        'box-shadow':'none'
        });
      }); 
      </script>