<?php

include ('conexion.php');
     
$documento = "reporte.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$documento);
header('Pragma: no-cache');
header('Expires: 0');
?>
   <table style="border=1;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Nacimiento</th>
                    <th>Expedicion</th>
                    <th>Direccion</th>
                    <th>Barrio</th>
                    <th>Telefono</th>
                    <th>SISBEN</th>
                    <th>Edad</th>
                    <th>Sede</th>
                    <th>Estado</th>
                    <th>Eps</th>
                    <th>Observaciones</th>                                               
                </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM beneficiarios";
                $result = mysqli_query($conexion, $sql);

                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                             <th><?php echo $mostrar['Id'] ?></th>
                             <th><?php echo $mostrar['nombres'] ?></th>
                             <th><?php echo $mostrar['apellidos'] ?></th>
                             <th><?php echo $mostrar['cedula'] ?></th>
                             <th><?php echo $mostrar['fechaNa'] ?></th>
                             <th><?php echo $mostrar['fechaExp'] ?></th>
                             <th><?php echo $mostrar['direccion'] ?></th>
                             <th><?php echo $mostrar['barrio'] ?></th>
                             <th><?php echo $mostrar['telefono'] ?></th>
                             <th><?php echo $mostrar['puntajeSis'] ?></th>
                             <th><?php echo $mostrar['edad'] ?></th>
                             <th><?php echo $mostrar['sede'] ?></th>
                             <th><?php echo $mostrar['estadoVuln'] ?></th>
                             <th><?php echo $mostrar['eps'] ?></th>
                             <th><?php echo $mostrar['observaciones'] ?></th>
                                                
                         </tr>
                          <?php } ?>
                     </tbody>
         </table>
