
<?php 


$conexion = mysql_connect("localhost","root","123");
mysql_select_db("catalogo", $conexion); 

$id = $_GET['id'];
$usuario=$_POST['usuario'];
$apellido=$_POST['nombre_com'];
$password=$_POST['password'];
$descripcion=$_POST['descripcion'];
$email=$_POST['email'];

	
   $sql = mysql_query("SELECT * FROM usuarios WHERE id = '$id'");
   
   while($f = mysql_fetch_array($sql)){
	$query =mysql_query("UPDATE usuarios SET `usuario`='$usuario',`nombre_com`='$nombre_com',`password`='$password',`descripcion`='$descripcion' ,`email`='$email' where Id ='$id' ");
	
	}
	
	if ($query = true){

	echo "<script type='text/javascript'>
		alert('Perfil Editado Exitosamente');
		 window.location='modificar_admin.php';
		</script>";
		
		}else{
		
		
		"<script type='text/javascript'>
		alert('error al modificar');
		window.location='modificar.php';
		</script>";
		
		}

?> 

