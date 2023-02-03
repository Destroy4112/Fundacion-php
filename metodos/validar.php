<?php 

require 'conexion.php';

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$usuario = validate($_POST['usuario']);
$clave = validate($_POST['clave']);

if(empty($usuario)){
	header ("location: ../index.php?error=Usuario requerido");
    exit();
}else if(empty($clave)){
	header ("location: ../index.php?error=Contraseña requerida");
    exit();
}

$q = "SELECT * from usuarios where Usuario = '$usuario' and Clave = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);


if($array!=null){
	session_start();
	$_SESSION['Nombre']=$array['Nombre'];
	$_SESSION['Estado']=true;
	header ("location: ../html/principal.php");
	
}else{
	header ("location: ../index.php?error= Datos erroneos");
}
