<!DOCTYPE html>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<?php   include("componentes/cabecera.html")  ?>

<body>
    <!-- Left Panel -->
    <?php include("componentes/leftPanel.html")?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include("componentes/barra.html") ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="content-busqueda">
                    <div class="card" id="fbarra">
                        <div class="card-header"> Ingrese el DNI del paciente:</div>
                        <form class="form-horizontal" action="datos.php" method="post">
                            <div class="input-group" id="c-body">
                                <input id="dni" name="dni" placeholder="ej. 30456827" class="form-control">
                                <div class="input group-btn"><button type="submit"
                                        class="btn btn-primary">Buscar</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="clearfix"></div>

    <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

    </div>
    <!-- /#right-panel -->

    <?php include("componentes/script.html")?>
</body>

</html>

</html>