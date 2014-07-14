<?Php

 
///Conectamos a la DB

 $conexion = mysql_connect("localhost","root","");



mysql_select_db("catalogo", $conexion);

if (!$conexion)
   {
///Error por si pasa algo...
 
echo "Ocurrio un error al realizar al conexion
contacte con el administrador.\n";
exit; }
?>
