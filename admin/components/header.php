<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Aria - Dashboard</title>
    <link rel="shortcut icon" href="../../landing/images/logos/logo-white.svg">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- Sweet Alert -->
    <link href="plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    
    <script src="assets/js/lots.js"></script>
    <script src="assets/js/users.js"></script>
</head>
<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo">
                    <span>
                        <img src="../../landing/images/logos/logo-white.svg" height="30">
                    </span>
                    <i>
                        <img src="../../landing/images/logos/logo-white.svg" height="10">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0"></ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <div id="sidebar-menu">
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index.php" class="waves-effect">
                                <i class="mdi mdi-grid"></i> Lotes
                            </a>
                        </li>
                        <?php  $permission = isset($_SESSION['rol']) ? $_SESSION['rol'] : 0; ?>
                        <?php if ($permission): ?>
                            <li>
                                <a href="users.php" class="waves-effect">
                                    <i class="mdi mdi-account-multiple"></i> Usuarios
                                </a>
                            </li>
                        <?php endif ?>
                        <li>
                            <a href="logout.php" class="waves-effect">
                                <i class="mdi mdi-login-variant"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Start content -->
        <div class="content-page">
        