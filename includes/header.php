<!DOCTYPE html>
<html lang="ca">

<head>

    <meta charset="UTF-8">

    <title><?= $titol ?? "Viatges" ?></title>

    <link rel="stylesheet" href= <?php echo $ruta?? "assets/css/style.css" ?> > 
    <!-- Ojo con la ruta! indicar correctamente, para entrar al css necesito entrar en carpeta assets que esta al mismo nivel de index PERO como voy a usar este header en contacte y destinacions haga la ruta correspondiente-->

</head>

<body>

<?php include "menu.php"; ?>

<div class="container">