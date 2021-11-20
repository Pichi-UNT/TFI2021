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

        include('funciones.php');

        #$contagiados = cantidadContagiados();
    ?>

    <!-- Left Panel -->
    <?php include("componentes/leftPanel.html") ?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include("componentes/barra.html") ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content-contagiados">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card text-center" id="card-contagiados">
                        <div class="card-header">
                            <strong class="card-title">Pacientes con Covid-19</strong>
                        </div>
                        <div class="card-body">
                            <?php
                                cantidadContagiados()
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
    <!-- /#right-panel -->

    <?php include("componentes/script.html") ?>
</body>

</html>

</html>