<?php
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
        <title>Principal</title>
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
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
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
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="principal.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Inicio</span></a></li>
                            <li class="list-divider"></li>
                            <li class="nav-small-cap"><span class="hide-menu">Opciones</span></li>

                            <li class="sidebar-item"> <a class="sidebar-link" href="agregarBeneficiario.php" aria-expanded="false"><i data-feather="user-plus" class="feather-icon"></i><span class="hide-menu">Agregar Beneficiario
                                    </span></a>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="beneficiarios.php" aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span class="hide-menu">Ver Beneficiarios</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="reporte.php" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Reporte</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="inactivos.php" aria-expanded="false"><i data-feather="user-minus" class="feather-icon"></i><span class="hide-menu">Inactivos</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../metodos/cerrarSesion.php" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Salir</span></a></li>
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
                    <h1 style="font-family: 'Angsana New';
                    text-align: center;
                    font-size: 90px;
                    margin-top: 15%;">
                        Programa Adulto Mayor
                    </h1>

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
                Diseñado por<a href="https://www.facebook.com/solucionestecnologicasid"> Soluciones Tecnologicas</a>.
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
    </body>

    </html>

<?php
} else {
    header("location: ../index.php");
}
?>