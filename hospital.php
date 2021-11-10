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
    <?php
$hospital = array( array(1234, "Hospital A", "Ciudad, Calle, No", 1234567),
               array(2345, "Hospital B", "Ciudad, Calle, No", 2345678),
               array(3456, "Hospital C", "Ciudad, Calle, No", 3456789) 
             ); 
?>
    <!-- Left Panel -->
    <?php include("componentes/leftPanel.html")?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include("componentes/barra.html") ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content-hospital">

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Hospitales</strong>
                        </div>
                        <div class="order-table">

                            <?php if (count($hospital) > 0): ?>
                            <table class="table table-striped" id="tabla-hospital">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hospital as $row): array_map('htmlentities', $row); ?>
                                    <tr>
                                        <td style="text-align:left"><?php echo implode('</td><td>', $row); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php endif; ?>
                            <!--
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> #5469 </td>
                                        <td> <span class="name">Louis Stanley</span> </td>
                                        <td> <span>iMax</span> </td>
                                        <td><span>231</span></td>
                                    </tr>
                                    <tr>
                                        <td> #5468 </td>
                                        <td> <span class="name">Gregory Dixon</span> </td>
                                        <td> <span>iPad</span> </td>
                                        <td><span>250</span></td>
                                    </tr>
                                    <tr>
                                        <td> #5467 </td>
                                        <td> <span class="name">Catherine Dixon</span> </td>
                                        <td> <span>SSD</span> </td>
                                        <td><span>250</span></td>
                                    </tr>
                                    <tr>
                                        <td> #5466 </td>
                                        <td> <span class="name">Mary Silva</span> </td>
                                        <td> <span>Magic Mouse</span> </td>
                                        <td><span>250</span></td>
                                    </tr>
                                </tbody>
                            </table>
            -->
                        </div> <!-- /.table-stats -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.content -->

    </div>
    <!-- /#right-panel -->

    <?php include("componentes/script.html")?>
</body>

</html>

</html>