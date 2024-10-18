<?php
 $wawa = 2;
 $precio = 2500;
    $descuento = $precio - ($precio* 20/100); 
    $descuento2 = $precio - ($precio* 10/100); 
    $wawa > 2 ? print("compraste ". $wawa . " camisas a ". $wawa * $descuento) : print("compraste ". $wawa . " camisa a ". $wawa * $descuento2 );
$edad = 60;
$genero = "m";
if($genero == "m"){
    if($edad > 60)
    print(" se puede jubilar");
else{
    print(" no");
}
}elseif($genero == "f"){
    if($edad >= 54)
    print(" se puede jubilar");
else{
    print(" no puede");
}
}else{
    print(" Ingrese un genero valido");
}
#$edad > 60 && $genero = "m" ? print() : print();
?>