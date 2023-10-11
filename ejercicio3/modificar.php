<?php
	include "conexion.inc.php";

	if(isset($_POST["bandera"]))
	{
		$bandera="adicionar";
		$color=" ";
	}
	else
	{
		$bandera="modificar";
		$cidoc=$_GET["cidoc"];
		$resultado=mysqli_query($con,"select * from docente where cidoc='$cidoc'");
		$registro=mysqli_fetch_array($resultado);
		$cidoc=$registro['cidoc'];
		$color=$registro['color'];
	}
?>

<form action="modificarLogica.php" method="POST">
	<input type="hidden" name="bandera" value="<?php echo $bandera; ?>"/> <br>
	COLOR
	<input type="text" <?php if ($bandera=="modificar") echo 'readonly="readonly"'?> name="nombre" value="<?php echo $color;?>"/> <br>
	<br>
	<input type="submit" value="Aceptar" name="Aceptar"/>
	
</form>