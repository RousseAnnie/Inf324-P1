<?php
	session_start();
	if(!isset($_SESSION["usuario"]))
	{
		header("Location: ingreso.php");
		exit;
	}
	else
	{
		if($_SESSION["usuario"]=="nohay")
		{
			header("Location: ingreso.php");
			exit;
		}
	}
?>
<html>
	<body style="background-color: <?php echo $_SESSION["color"];?>;">

	<br> <h1> <strong class="black"> D O C E N T E S </strong> </h1><br>

	<table border="10" cellpadding=12 cellspacing=10 width="50%">
		<tr>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> CI </strong> </font> </td>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> Nombre </strong> </font> </td>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> Apellido </strong> </font> </td>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> Cargo </strong> </font> </td>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> Color </strong> </font> </td>
			<td width="1%" bgcolor=#5677E8 align="center"> <font color=#050505> <strong class="black"> Operacion </strong> </font> </td>
		</tr>

		<?php
			include "conexion.inc.php";

			$resultado=mysqli_query($con,"select * from docente");

			while($registro=mysqli_fetch_array($resultado))
			{
				echo "<tr>";
				echo "<td>".$registro["cidoc"]."</td>";
				echo "<td>".$registro["nombredoc"]."</td>";
				echo "<td>".$registro["apellidodoc"]."</td>";
				echo "<td>".$registro["cargo"]."</td>";
				echo "<td>".$registro["color"]."</td>";
				echo "<td> <a href='modificar.php?cidoc=".$registro["cidoc"]."'> Configurar </a> </td>";
				echo "<tr>";
			}
		?>

	</table>
</html>