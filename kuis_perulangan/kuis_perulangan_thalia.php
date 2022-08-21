
<!-- SOAL 1-->
<?php
    $x = 1;
    while($x <= 6)
    {
        echo '*';
        $x++;
    }
?>

<br>
<br>

<!-- SOAL 2-->
<?php
    $x = 1;
    while($x <= 5)
    {
        echo '******<br>';
        $x++;
    }
?>

<br>
<br>

<!-- SOAL 3-->
<?php
    $s=6;
     for($a=1; $a<=$s; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$s; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }
?>