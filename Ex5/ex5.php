<?php
(int)$expoente=(int)$_POST['exp']; 
(int)$base=(int)$_POST['base'];
(int)$resultado=$base;
(int)$i=0;

if($expoente==0){
    echo('o resultado da potenciação é: <strong> 1<strong>');
}else{

for ($i=2; $i<=$expoente ; $i++) {  
    
        
    $resultado=$resultado*$base;
    
}


echo('o resultado da potenciação é: <strong>'.$resultado. '<strong>');
}

?>