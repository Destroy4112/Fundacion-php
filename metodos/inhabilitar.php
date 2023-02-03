<?php 


  include ('conexion.php');

   $id = $_GET['id'];
   $estado = 0;

   $inactivar = "UPDATE beneficiarios SET estado = 0 WHERE Id = $id ";
   mysqli_query($conexion, $inactivar);

   $consulta = "SELECT * FROM beneficiarios where Id = $id ";
   $result = mysqli_query($conexion, $consulta);
   
   while($mostrar=mysqli_fetch_array($result)){
      
    $id =$mostrar['Id'];
    $nombres =$mostrar['nombres'];
   $apellidos =$mostrar['apellidos'];
   $cedula =$mostrar['cedula'];
   $fecha_na =$mostrar['fechaNa'];
   $fecha_expe =$mostrar['fechaExp'];
   $direccion =$mostrar['direccion'];
   $barrio =$mostrar['barrio'];
   $telefono =$mostrar['telefono'];
   $sisben =$mostrar['puntajeSis'];
   $edad =$mostrar['edad'];
   $sede =$mostrar['sede'];
   $estado=$mostrar['estadoVuln'];
   $eps =$mostrar['eps'];
   $observacion =$mostrar['observaciones'];

   if($nombres==null || $apellidos==null || $cedula==null || $fecha_na==null || $fecha_expe==null ||
    $direccion==null || $barrio==null || $telefono==null || $sisben==null || $edad==null ||
     $sede==null || $estado==null || $eps==null || $observacion==null ){
       $msj = 'vacio'; 
      }else{
       $agregar ="INSERT INTO inactivos(nombres,apellidos,cedula,fechaNa,fechaExp,direccion,barrio,telefono,puntajeSis,edad,sede,estadoVuln,eps,observaciones)
               VALUES ('$nombres','$apellidos','$cedula','$fecha_na','$fecha_expe','$direccion','$barrio','$telefono','$sisben','$edad','$sede','$estado','$eps','$observacion')";
        mysqli_query($conexion, $agregar);
    
    }
        
   header ("location: ../html/reemplazarBeneficiario.php?id=$id");
  }

?> 