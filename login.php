<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

function redirectToAdmin()
{
    header("Location: admin/index.php");
    exit();
}

if (isset($_SESSION['user'])) {
    $user->setUser($userSession->getCurrentUser()->getUsername());
    redirectToAdmin();
} else if (
    isset($_POST['username'])
    && isset($_POST['password'])
) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->exists($username, $password)) {
        $userSession->setCurrentUser($user);
        $user->setUser($username);
        redirectToAdmin();
    } else {
        $error = 'usuario incorrecto.';
        // echo 'No existe en la DB';
    }
}
$css = array(
    'login',
    'estilologin'
);
include_once('./partials/header.php');
?>

<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilologin.css">

</head>

<body>



    <div class="container">
        <div class="row">

            <div class="col-4">

                <h2 align="center">LOGIN</h2>
                <form name="frmLogin" id="frmLogin" method="POST" action="conexion/loguear.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="txtCorreo" id="txtCorreo" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>

                        <input type="password" class="form-control" name="txtClave" id="txtClave">
                        <div id="emailHelp" class="form-text">Nunca compartir contraseña</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Acceder</button>
                    <p> ¿Deseas volver a inicio? Click en <a class="link" href="index.php"> Inicio</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    $scripts = array(
        '',
    );
    include_once('./partials/footer.php');
    ?>

</html>