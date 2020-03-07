<?php
$num=$_POST["num"];
$i=$num-1;
$n=0;

for ($i=$num-1;$i>2;$i--){
    
    if($num==1){
        echo('Esse número não é primo.');
    }else if($num%$i==0){
        echo('Esse número não é primo');
        $n=$n+1;
    }

}
if ($n==0){
    echo('Esse número é primo.');
}
    





?>