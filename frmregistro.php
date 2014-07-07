<?php


$tipo_camara = $_POST['tipo_camara'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$valor = $_POST['valor'];
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$valor4 = $_POST['valor4'];
$tienda = $_POST['tienda'];
$tienda1 = $_POST['tienda1'];
$tienda2 = $_POST['tienda2'];
$tienda3 = $_POST['tienda3'];
$tienda4 = $_POST['tienda4'];
$caracteristicas = $_POST['caracteristicas'];


include_once("conexion.php");


$dbQuery=mysql_query("INSERT INTO productos (tipo_camara, marca, modelo, valor, valor1, valor2, valor3, valor4, tienda, tienda1, tienda2, tienda3, tienda4, caracteristicas, imagen, imagen1, imagen2, imagen3, imagen4, ) VALUES ('".$tipo_camara."','".$marca."','".$modelo."','".$valor."','".$valor1."','".$valor2."','".$valor3."','".$valor4."','".$tienda."','".$tienda1."','".$tienda2."','".$tienda3."','".$tienda4."','".$caracteristicas."');");

if ($dbQuery = true)){ 

echo"<script type=\"text/javascript\">
alert('Producto Agregado Correctamente');
 window.location='agregar.php';
 </script>";
}else{

"<script type=\"text/javascript\">
alert('Error');
 window.location='agregar.php';
 </script>";

}
mysql_close($conexion);
		



?>