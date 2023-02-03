<?php

include ('conexion.php');
     
if(isset($_GET['id'])){

    $id=$_GET['id'];

    $query = "DELETE FROM beneficiarios where Id = $id";
    $result = mysqli_query($conexion,$query);
    $msj='eliminar';

    if(!$result){
        die('error al eliminar');
        $msj ='error';
    }
    header ("location: ../html/beneficiarios.php");

}
?>