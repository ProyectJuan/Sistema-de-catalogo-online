<?Php

 
error_reporting(0);

function coneccionbd(){

$con = mysql_connect("localhost","root","");

if (!$con){
die('Could not connect: ' . mysql_error());
}

mysql_select_db("catalogo", $con);
return($con);
}

?>
