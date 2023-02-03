<?php
include('../metodos/conexion.php');
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
    <title>Consultar</title>
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
                    <li class="sidebar-item selected"> <a class="sidebar-link" href="principal.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Inicio</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Opciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="agregarBeneficiario.php"
                                aria-expanded="false"><i data-feather="user-plus" class="feather-icon"></i><span
                                    class="hide-menu">Agregar Beneficiario
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link active" href="beneficiarios.php"
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
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Usuarios</h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
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
                                                <th>Acciones</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $sql = "SELECT * FROM beneficiarios where estado=1";
                                               $result = mysqli_query($conexion, $sql);
                                               $cont = 1;
                                      while($mostrar=mysqli_fetch_array($result)){
                                          $id= $mostrar['Id'];
                                          ?>
                                            <tr>
                                                <th><?php echo $cont++ ?></th>
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
                                                <th><div class="btn-group">
                                                          <a href='editarBeneficiario.php?id="<?php echo $mostrar['Id'] ?>"' class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                          <button data-toggle="modal" data-target="#eliminar" class="btn btn-danger center-block"><i class="fa fa-trash"></i></button>
                                                          <a class="btn btn-warning" href='../metodos/inhabilitar.php?id="<?php echo $mostrar['Id'] ?>"' ><i class="fa fa-ban"></i></a>
                                                     </div></th>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->

<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
        <h3 class="modal-title" id="lineModalLabel">Eliminar</h3>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			
		</div>
		<div class="modal-body">
			<h1>¿Seguro desea eliminar?</h1>
            <!-- content goes here -->
			<form>
                    
            </form>
		</div>
		<div class="modal-footer">
			
				<button type="button" class="btn btn-primary" data-dismiss="modal"  role="button">NO</button>							
				<a class="btn btn-danger" href="../metodos/eliminar.php?id=<?php echo $id ?>">SI</a>			
		</div>
	</div>
  </div>
</div>
                
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
    <!--This page plugins -->
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>

<?php
} else {
    header("location: ../index.php");
}
?>