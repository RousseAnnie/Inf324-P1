<?php
if (isset($_POST["Aceptar"]))
	{
		$cidoc=$_POST["cidoc"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$cargo=$_POST["cargo"];
		$color=$_POST["color"];

		include "conexion.inc.php";

		mysqli_query("insert into docente values (".$cidoc.",'".$nombre."','".$apellido."','".$cargo."','"$color"')");
	}
	else
	{
		header("Location: actualiza.php");
	}	
?>