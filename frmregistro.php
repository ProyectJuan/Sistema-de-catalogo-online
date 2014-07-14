<?php

include_once("conexion.php");

$tipo_camara = $_POST['tipo_camara'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$precio4 = $_POST['precio4'];
$precio5 = $_POST['precio5'];
$caracteristicas = $_POST['caracteristicas'];
$tienda1 = $_POST['tienda1'];
$tienda2 = $_POST['tienda2'];
$tienda3 = $_POST['tienda3'];
$tienda4 = $_POST['tienda4'];
$tienda5 = $_POST['tienda5'];




$dbQuery=mysql_query("INSERT INTO camaras VALUES('$tipo_camara','$marca','$modelo','$precio1','$precio2','$precio3','$precio4','$precio5','$caracteristicas','$tienda1','$tienda2','$tienda3','$tienda4','$tienda5')");
         

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