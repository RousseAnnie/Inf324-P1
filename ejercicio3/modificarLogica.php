<?php
	include "conexion.inc.php";

	//$color=$_POST["color"];
	$bandera=$_POST["bandera"];

	if(isset($_POST["Aceptar"]))
	{
		if($bandera=="adicionar")
		{
			$resultado=mysqli_query($con,"insert into docente (color) values('$color')");
		}
		echo '<img src="aceptar.jpeg" width="100px" height="100px"/>';
	}
	else
	{
		echo '<img src="cancelar.jpg" width="60px" height="60px"/>';
	}
	echo "<br> <br> <a href='index.php'> Volver </a>";
?>