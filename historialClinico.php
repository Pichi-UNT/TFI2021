<?php include("funciones.php") ?>

<?php 
$dni= $_GET['dni'];
$paciente = buscarHistorialClinico($dni);   
?>

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
                <?php include("componentes/menuPaciente.php") ?>
                <div class="content-hospital">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">HistorialClinico</strong>
                                </div>
                                <div class="order-table">
                                    <table class="table table-striped" id="tabla-hospital">
                                        <thead>
                                            <tr>
                                                <th>Descripcin tratamiento</th>
                                                <th>Enfermedad</th>
                                                <th>Inicio de tratamiento</th>
                                                <th>Médico</th>
                                                <th>Hospital</th>
                                            </tr>
                                        </thead>
                                        <?php if ($paciente != null): ?>
                                        <tbody>
                                            <?php  
                                                $totalFilas=count($paciente);
                                                $totalColumnas=count($paciente[0]);
                                                $i=0;
                                                while($i<$totalFilas){
                                                    $j=1;
                                                    echo '<tr>';
                                                    while($j<$totalColumnas){
                                                        echo '<td style="text-align:left">'.$paciente[$i][$j].'</td>';
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- Animated -->
        </div>
        <!-- Content -->
    </div>
    <?php include("componentes/script.html")?>

</body>

</html>

</html>