<nav>

    <ul>

        <li><a href= <?=  $vista1?? "index.php"?> >Inici</a></li> 
        <!-- creo variable vista para crear rutas diferentes que se abriran desde inicio, si no hay variable declarada, se llamara index. hay que declarar estas variables en Destinacions y en Contactes // poner = es lo mismo que poner php echo-->

        <li><a href=<?= $vista2?? "views/destinacions.php"?> >Destinacions</a></li>

        <li><a href=<?= $vista3?? "views/contacte.php"?> >Contacte</a></li>

    </ul>

</nav>