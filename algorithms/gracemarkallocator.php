<?php


$grace=5;
$marks=array(92,90,87,93,90);
$subjects=array();
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
                echo "Adding ".$x." to ".$q."th subject\n";
            }
        }
  
    }

}

for($i=0;$i<count($marks);$i++)
{

    echo $marks[$i] ."   ";

}

?>