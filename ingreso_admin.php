<?php

include_once("conexion.php");


		$usuario = $_POST['usuario'];
		$apellido = $_POST['nombre_com'];
		$password = $_POST['password'];
		$password1 = $_POST['password1'];
		$descripcion = $_POST['descripcion'];
		$tipouser = $_POST['tipouser'];
		$email = $_POST['email'];




		if ($_POST['password']== $_POST['password1']) {
	
				$dbQuery=mysql_query("INSERT INTO usuarios (usuario, nombre_com, password, descripcion, tipouser, email ) VALUES ('".$usuario."','".$nombre_com."','".$password."','".$descripcion."','".$tipouser."','".$email."');");
   	             
				 echo"<script type=\"text/javascript\">alert('Usuario Agregado Exitosamente'); window.location='menu.php';</script>";
				 

					}else{
				echo"<script type=\"text/javascript\">alert('La contrasena debe coincidir'); window.location='agregar_admin.php';</script>";
						}

?>