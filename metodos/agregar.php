<?php

include ('conexion.php');


if (isset($_POST['guardar'])){

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

    $verificarCedula = "SELECT * FROM beneficiarios WHERE cedula = $cedula";
    mysqli_query($conexion, $verificarCedula);
    
        $sql ="INSERT INTO beneficiarios(nombres,apellidos,cedula,fechaNa,fechaExp,direccion,barrio,telefono,puntajeSis,edad,sede,estadoVuln,eps,observaciones)
                VALUES ('$nombres','$apellidos','$cedula','$fecha_na','$fecha_expe','$direccion','$barrio','$telefono','$sisben','$edad','$sede','$estado','$eps','$observacion')";
         mysqli_query($conexion, $sql);
  
        
        
        header ("location: ../html/beneficiarios.php");
    
       
    
}
  


?>