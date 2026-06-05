<?php

$titol = "Contacte";
$ruta="../assets/css/style.css";
$vista1="../index.php"; //para poder acceder a index(inici) desde contacte o destinacions necesito salir de esta carpeta views y entrar en index x eso ../
$vista2="destinacions.php"; //destinacions y contactes estan al mismo nivel
$vista3="contacte.php";

include "../includes/header.php";

?>



<?php 
include "../includes/formcontacte.php";
include "../includes/footer.php"; ?>