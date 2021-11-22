<?php   include("funciones.php") ?>
<?php $hospitales = obtenerHospitales();?>



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
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="content-hospital">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <?php 
                       $z=0;
                       $totalHospitales=count($hospitales);
                       while($z<$totalHospitales){ ?>


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Internados en <?php echo $hospitales[$z][1];?></strong>
                                </div>
                                <div class="order-table">

                                    <table class="table table-striped" id="tabla-hospital">
                                        <thead>
                                            <tr>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>NºHabitacion</th>
                                                <th>Planta</th>
                                                <th>Condicion</th>
                                                <th>Observacion</th>
                                                <th>CAUSA</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        $internados=obtenerInternadosPorCovid($hospitales[$z][1]);
                                        if ($internados!= null): ?>
                                        <tbody>
                                            <?php  
                                                $totalFilas=count($internados);
                                                $totalColumnas=count($internados[0])-1;
                                                $i=0;
                                                while($i<$totalFilas){
                                                    $j=0;
                                                    echo '<tr>';
                                                    while($j<$totalColumnas){
                                                        echo '<td style="text-align:left">'.$internados[$i][$j].'</td>';
                                                        $j=$j+1;
                                                    }
                                                    echo '</tr>';
                                                    $i=$i+1;
                                                } 
                                            ?>
                                        </tbody>
                                        <?php endif; ?>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                            <?php
                        $z=$z+1;
                        }?>
                        </div>
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