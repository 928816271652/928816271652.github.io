<?php

function current_url()
{
    return str_replace("&","&amp", $_SERVER['REQUEST_URI']);
}

function is_active($path = '/')
{
    return current_url() == $path 
            ? 'nav-item--active'
            : '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICLINIC</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/general.css">
    <?php
    foreach ($css as $path) : ?>

        <link rel="stylesheet" href="./assets/css/<?php echo $path;?>.css?<?php echo strtotime("now");?>">
    
    <?php endforeach ?>
</head>
<body>
    <header>
        <div class="container container--header">
            <div class="logo">MEDICLINIC</div>
            <nav>
                <a href="/"  class="nav-item <?php echo is_active("/localhost");?>">INICIO</a>
                <a href="./about.php" class="nav-item <?php echo is_active('/about.php');?>">ACERCA DE</a>
                <a href="./login.php" class="nav-item <?php echo is_active('/login.php');?>">INTRANET</a>
            </nav>
        </div>
    </header>

