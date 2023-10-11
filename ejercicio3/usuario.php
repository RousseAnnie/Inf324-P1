<?php
	$usuario=$_POST["usuario"];
	$contraseña=$_POST["contraseña"];
	session_start();
	if($usuario=="sergio" && $contraseña=="123456")
	{
		$_SESSION["usuario"]="sergio";
		$_SESSION["color"]="#daf2e6";
		header("Location: index.php");
		exit;
	}
	if($usuario=="armando" && $contraseña=="789012")
	{
		$_SESSION["usuario"]="armando";
		$_SESSION["color"]="#ecdaf2";
		header("Location: index.php");
		exit;
	}
	if($usuario=="ambar" && $contraseña=="102938")
	{
		$_SESSION["usuario"]="ambar";
		$_SESSION["color"]="#ecdaf2";
		header("Location: index.php");
		exit;
	}
	if($usuario=="paola" && $contraseña=="78901")
	{
		$_SESSION["usuario"]="paola";
		$_SESSION["color"]="#ecdaf2";
		header("Location: index.php");
		exit;
	}
	else
	{
		$_SESSION["usuario"]="nohay";
		header("Location: ingreso.php");
		exit;
	}
?>