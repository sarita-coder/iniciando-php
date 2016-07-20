<?php
// comentario de una linea
/*
*/
echo "hola mundo" ;
echo "<br> Hola amo aprender <br> estoy <h1> aprendiendo Php</h1>";
// variables
$nombre="Jonathan";
$Nombre="SARIS";
echo $nombre."&nbsp;".$Nombre;
echo "<br />";
$num1=2;
$num2=78;
$suma=$num1+$num2;
echo $suma;
echo "<br> La variable \$suma tiene el valor de $suma<br>";

$modulo = $num2%$num1;
if($modulo==0){
	echo "El n&uacute;mero es Par";
} else{
	echo "El n&uacute;mero es Impar";
}

for($i=0;$i<=10;$i++){
	echo $i."<br/>";
}

?>