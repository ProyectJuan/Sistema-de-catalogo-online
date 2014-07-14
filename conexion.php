<?Php

 
///Conectamos a la DB
<<<<<<< HEAD
 $conexion = mysql_connect("localhost","root","");
=======

$conexion = mysql_connect("localhost","root","123");
>>>>>>> FETCH_HEAD
mysql_select_db("catalogo", $conexion);

if (!$conexion)
   {
///Error por si pasa algo...
 
echo "Ocurrio un error al realizar al conexion
contacte con el administrador.\n";
exit; }
?>
