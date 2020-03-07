<?php 

$num=$_POST['num'];
$i=1;


for($i=1;$i<=$num;$i++){

if($num%$i==0){
    echo($i.' ');
}
}

?>