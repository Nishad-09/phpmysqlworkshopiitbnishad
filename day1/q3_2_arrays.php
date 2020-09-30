<!DOCTYPE html>
<html>
<body>
<?php
$m1=array(
        array(2,3),
        array(4,5)
    );
    $m2=array(
        array(6,7),
        array(8,9)
    );
    echo "Addition of two 2x2 matrices is: <br>";
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $m1[$i][$j]+$m2[$i][$j]." ";
        }
        echo "<br>";
        }
    
?>
</body>
</html>
