<?php 

$num=$_POST['num'];
(int)$termo=1;
(int)$anterior=0;
$termo2=0;


for($i=1;$i<=$num;$i++){

   $termo2=$termo+$anterior;
   $termo=$anterior;
   $anterior=$termo2;
   
   


}

echo('O '.$num.'° termo é: '.$termo2 );

?>