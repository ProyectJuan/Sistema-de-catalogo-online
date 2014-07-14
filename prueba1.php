<?php 
								$conexion = mysql_connect("localhost","root","");
								if(!$conexion){
									die("error".mysql_error());
								}
							     mysql_select_db("catalogo", $conexion);
							    
							    
							    $result = mysql_query("SELECT *  FROM camaras");
							   
							  While($row = mysql_fetch_array($result)) {
							  	echo $row['modelo']." | ".$row[1];
}
							     ?>