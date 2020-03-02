<?php 
$numPlac=$_POST['numPlac'];
$letPlac=$_POST['letPlac'];
$numpl = substr($numPlac,-1);

if($numpl==1 || $numpl==2){ 
    echo("portador da placa  ". ($letPlac.$numPlac) ." você não poderá circular segunda." );
}else if($numpl==3 || $numpl==4){
    echo("portador da placa  ". ($letPlac.$numPlac) ." você não poderá circular terça." );
}else if($numpl==5 || $numpl==6){
    echo("portador da placa  ". ($letPlac.$numPlac) ." você não poderá circular quarta." );
}else if($numpl==7 || $numpl==8){
    echo("portador da placa  ". ($letPlac.$numPlac) ." você não poderá circular quinta." );
}else if($numpl==9 || $numpl==0){
    echo("portador da placa  ". ($letPlac.$numPlac) ." você não poderá circular sexta." );
}


?>