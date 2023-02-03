<?php 

if(isset($_POST['actualizar'])){

  include ('conexion.php');
   
  $id = $_POST['id'];
  $nombres =$_POST['nombres'];
  $apellidos =$_POST['apellidos'];
  $cedula =$_POST['cedula'];
  $fecha_na =$_POST['fecha_na'];
  $fecha_expe =$_POST['fecha_expe'];
  $direccion =$_POST['direccion'];
  $barrio =$_POST['barrio'];
  $telefono =$_POST['telefono'];
  $sisben =$_POST['sisben'];
  $edad =$_POST['edad'];
  $sede =$_POST['sede'];
  $estado=$_POST['estado'];
  $eps =$_POST['eps'];
  $observacion =$_POST['observacion'];

   $actualizar ="UPDATE beneficiarios SET nombres='$nombres', apellidos='$apellidos',cedula='$cedula',fechaNa='$fecha_na',
   fechaExp='$fecha_expe',direccion='$direccion',barrio='$barrio',telefono='$telefono', puntajeSis='$sisben',edad='$edad',
   sede='$sede',estadoVuln='$estado',eps='$eps',observaciones='$observacion',estado=1 WHERE Id='$id'";
   mysqli_query($conexion, $actualizar);

   $msj = 'actualizar';
        
   header ("location: ../html/beneficiarios.php");
}

?> 