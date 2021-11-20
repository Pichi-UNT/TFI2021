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
        $zonas=zonaCritica();
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
        <div class="content-zonaCrit">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="order-table">

                            <?php if (count($zonas) > 0) : ?>
                            <table class="table table-striped" id="tabla-zona">
                                <thead>
                                    <tr>
                                        <th>Ciudad</th>
                                        <th>Cantidad contagiados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($zonas as $row) : array_map('htmlentities', $row); ?>
                                    <tr>
                                        <td style="text-align:left"><?php echo implode('</td><td>', $row); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>
                        </div> <!-- /.table-stats -->
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