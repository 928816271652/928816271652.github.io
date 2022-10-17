<?php

include_once '../includes/user.php';
include_once '../includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user']))
{
    $user->setUser($userSession->getCurrentUser()->getUsername());
}else
{
    header("Location: ../login.php");
    exit();
}
?>


<h1>HELLO <?php echo $user->getName(); ?></h1>
<a href="../includes/logout.php">Cerrar Sesión</a>