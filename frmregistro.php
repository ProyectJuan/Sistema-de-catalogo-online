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


require("conexion.php");
$con=coneccionbd();

$dbQuery=("INSERT INTO productos VALUES('','$tipo_camara','$marca','$modelo','$valor','$valor1','$valor2','$valor3','$valor4','$tienda','$tienda1','$tienda2','$tienda3','$tienda4','$caracteristicas')");
         
mysql_query($dbQuery,$con); 
mysql_close($con);

if ($dbQuery = true){ 

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







?>