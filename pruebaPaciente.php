<!DOCTYPE html>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<?php include("componentes/cabecera.html")  ?>

<body>
    <?php
    include("funciones.php");
    $nombreH='Padilla';
    $a=obtenerInternados($nombreH);
    echo '<p>'. $a[0][0].'</p>';
    ?>
</body>

</html>

</html>