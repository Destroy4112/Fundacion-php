<?php 
include('../metodos/conexion.php');
$id = $_GET['id'];
session_start();
$nombre = $_SESSION['Nombre'];
if ($_SESSION['Estado'] == true) {
?>
<!DOCTYPE html>
<html dir="ltr" lang="en"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Reemplazar</title>
    <!-- This page plugin CSS -->
    <link href="../assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                            
                    <h2 style="padding-left:20px;"><span>Bienvenido usuario <?php echo $nombre ?></h4> 
                                
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="principal.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Inicio</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Opciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="agregarBeneficiario.php"
                                aria-expanded="false"><i data-feather="user-plus" class="feather-icon"></i><span
                                    class="hide-menu">Agregar Beneficiario
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="beneficiarios.php"
                                aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                    class="hide-menu">Ver Beneficiarios</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="reporte.php"
                                aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span
                                    class="hide-menu">Reporte</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="inactivos.php"
                                aria-expanded="false"><i data-feather="user-minus" class="feather-icon"></i><span
                                    class="hide-menu">Inactivos</span></a></li>   
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../metodos/cerrarSesion.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Salir</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Reemplazar Beneficiario</h4><br>

                                <form action="../metodos/actualizar.php" method="POST">
                                    
                                <?php 
                        
                                $sql = "SELECT * FROM beneficiarios where Id=$id";
                                $result = mysqli_query($conexion, $sql);

                                while($datos=mysqli_fetch_array($result)){
                                    ?>

                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo $datos['Id']?>">  
                                                    <input type="text" class="form-control" placeholder="Nombres" name="nombres">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Cedula" name="cedula">
                                                </div>
                                            </div>
                                        </div>
                                
                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6 class="card-title">Fecha nacimiento</h6>
                                                    <input type="date" class="form-control" id="fecha-nacimiento" name="fecha_na">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6 class="card-title">Fecha expedicion</h6>
                                                    <input type="date" class="form-control" name="fecha_expe">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Direccion" name="direccion">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Barrio" name="barrio">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Puntaje SISBEN" name="sisben">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="edad" placeholder="Edad" name="edad">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control" name="sede">
                                                       <option selected Disabled>Sede</option>
                                                       <?php  $sql = "SELECT * FROM sede";
                                                              $result = mysqli_query($conexion, $sql);

                                                      while($mostrar=mysqli_fetch_array($result)){
                                                          ?>
                                                       <option Value="<?php echo $mostrar['Nombre'] ?>"><?php echo $mostrar['Nombre'] ?></option> 
                                                       <?php } ?>      
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <select class="form-control" name="estado">
                                                       <option selected Disabled>Estado de vulnerabilidad</option>
                                                       <?php  $sql = "SELECT * FROM estadovul";
                                                              $result = mysqli_query($conexion, $sql);

                                                      while($mostrar=mysqli_fetch_array($result)){
                                                          ?>
                                                       <option Value="<?php echo $mostrar['Nombre'] ?>"><?php echo $mostrar['Nombre'] ?></option>
                                                       <?php } ?>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <select class="form-control" name="eps">
                                                       <option selected Disabled>Eps</option>
                                                       <?php  $sql = "SELECT * FROM eps";
                                                              $result = mysqli_query($conexion, $sql);

                                                       while($mostrar=mysqli_fetch_array($result)){
                                                          ?>
                                                       <option value="<?php echo $mostrar['Nombre'] ?>"><?php echo $mostrar['Nombre'] ?></option>
                                                       <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="observacion" name="observacion">
                                                </div>
                                            </div>
                                        </div>
              
                                        
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success" name="actualizar">Guardar</button>                         
                                        </div>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Diseñado por<a
                    href="https://www.facebook.com/solucionestecnologicasid"> Soluciones Tecnologicas</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>

    <script>
            const nacimiento = document.getElementById("fecha-nacimiento");
            const edad = document.getElementById("edad");

            const cargarEdad = () => {
                let fechaMilisegundo = new Date(nacimiento.value).getTime();
                let hoyMilisegundo = new Date().getTime();
                let edad = Math.floor(((hoyMilisegundo - fechaMilisegundo) / (1000 * 60 * 60 * 24)) / 365);
                return edad;
            }

            window.addEventListener('load', function() {
                nacimiento.addEventListener('change', function() {
                    document.getElementById("edad").value = cargarEdad();
                })
            })
        </script>
</body>

</html>
<?php
} else {
    header("location: ../index.php");
}
?>