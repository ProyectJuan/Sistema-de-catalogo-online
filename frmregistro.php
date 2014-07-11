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
$imagen = $_POST['data'];

if ( ! isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
    echo "ha ocurrido un error";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
     
        //este es el archivo temporal
        $imagen_temporal  = $_FILES['imagen']['tmp_name'];  
        //este es el tipo de archivo
        $tipo = $_FILES['imagen']['type'];
        //leer el archivo temporal en binario
        $fp     = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        //escapar los caracteres
        $data = mysql_escape_string($data);


$dbQuery=mysql_query("INSERT INTO camaras VALUES('','$tipo_camara','$marca','$modelo','$precio1','$precio2','$precio3','$precio4','$precio5','$caracteristicas','$tienda1','$tienda2','$tienda3','$tienda4','$tienda5','$data','$tipo')");
         

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
}
else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
  }
?>