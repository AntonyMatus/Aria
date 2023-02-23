<?php

    session_start();

    if (isset($_SESSION['auth_id'])) {
        header('Location: index.php');
    }

    require 'backend/connection.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $connection->prepare('SELECT * FROM users_table WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (!empty($results) && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['auth_id'] = $results['id'];
            $_SESSION['rol'] = $results['rol'];
            header("Location: index.php");
        } else {
            $message = 'Nombre de usuario o contraseña incorrectos.';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>

    <link rel="shortcut icon" href="../landing/images/logos/logo-white.svg">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="index.php" class="logo logo-admin">
                        <img src="../landing/images/logos/Recurso-2.svg" height="100" alt="logo">
                    </a>
                </h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Inicio de Sesión</h4>
                    <?php if(!empty($message)): ?>
                        <p class="text-danger text-center my-3"> <?= $message ?> </p>
                    <?php endif; ?>
                    <form action="login.php" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="email">Correo electronico</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Ingresar correo electronico"
                                required
                            />
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input 
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                placeholder="Ingresar contraseña"
                                required
                            />
                        </div>
                        <div class="form-group row justify-content-center m-t-20">
                            <button class="btn btn-client w-md waves-effect waves-light" type="submit">
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center">
            <p>
                © <span id="year"></span> Aria- Desarrollado por <a href="https://www.buho-solutions.com/" target="_blank">Buho Solutions</a>.
            </p>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>
</html>