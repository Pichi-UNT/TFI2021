<?php include("funciones.php") ?>

<?php 
   //$dni=39363316;
    //$paciente=buscarPacientePorDNI($dni);
    
        $dni=$_POST['dni'];
        if($dni!=null){
            $paciente = buscarPacientePorDNI($dni);   
        }
        $dniG=$_GET['dni'];
        if($dniG!=null){
            $paciente = buscarPacientePorDNI($dniG);
            $dni=$dniG;   
        }
        if($dni==null && $dniG==null){
                header('location: pacienteBuscar.php');
                die();
        }
        if($paciente==null){
            header('location: pacienteBuscar.php');
            die();
        }
    
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
        <div class="content-datos">
            <!-- Animated -->
            <div class="animated fadeIn">
                <?php include("componentes/menuPaciente.php") ?>
                <section class="halfbody-izquierda">
                    <div class="card">
                        <div class="card-header user-header alt bg-dark">
                            <div class="media">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;"
                                        alt="" src="images/cruz.png">
                                <div class="media-body">
                                    <h2 class="text-light display-6">  <?php echo $paciente[0][0];  ?> </h2>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php
                                $total=count($paciente[0]);
                                $nombre=array('Nombre: ','DNI: ','Genero: ','Fecha de nacimiento: ','es de riesgo: ');
                                $i=1;
                                while($i<5){
                                    echo '<li class="list-group-item">';
                                    if(strcmp($nombre[$i],'es de riesgo: ')==0){
                                        $var='No';
                                        if($paciente[0][$i]==1){
                                            $var='Si';
                                        }
                                        echo '<p class="formato-letra1">'.$nombre[$i].$var.'</p>';
                                    }else{
                                        echo '<p class="formato-letra1">'.$nombre[$i].$paciente[0][$i].'</p>';

                                    }
                                    echo '</li>';
                                    $i=$i+1;
                                }
                            ?>    

                            <div class="card-header user-header alt bg-dark">
                                <div class="media">>
                                    <div class="media-body">
                                        <h2 class="text-light display-6"> Antecedentes </h2>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $i=0;
                                $total=count($paciente);
                                while($i<$total){
                                    echo '<li class="list-group-item">';
                                    echo '<p class="formato-letra1">'.$paciente[$i][5].', Variante: '.$paciente[$i][6].'</p>';
                                    $i=$i+1;
                                    echo '</li>';
                                }
                                


                            ?>
                        </ul>

                    </div>
                </section>
                <section class="halfbody-derecha">
                    <div class="card">
                        <div class="card-header user-header bg-success">
                            <div class="media">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;"
                                        alt="" src="images/avion.jpg">
                                <div class="media-body">
                                    <h2 class="text-light display-6"> VIAJES </h2>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php
                                $viajes=obtenerViajesPaciente($dni);
                                if($viajes==null){
                                    echo '<li class="list-group-item">';
                                    echo '<p class="formato-letra1">SinViajes</p>';
                                    echo '</li>';
                                }else{
                                $totalFilas=count($viajes);
                                $totalColumnas=count($viajes[0]);
                                $i=0;
                                while($i<$totalFilas){
                                    $j=1;
                                    $s=' ';
                                    while($j<$totalColumnas){
                                        if($j==$totalColumnas-1){
                                            $s.=$viajes[$i][$j];
                                        }else{
                                            $s.=$viajes[$i][$j].', ';
                                        }
                                        $j=$j+1;
                                    }
                                    echo '<li class="list-group-item">';
                                    echo '<p class="formato-letra1">'.$s.'</p>';
                                    echo '</li>';
                                    $i=$i+1;    
                                }
                            }
                            ?>
                        </ul>

                    </div>
                </section>
            </div>
            <!-- Animated -->
        </div>
        <!-- Content -->
    </div>
    <?php include("componentes/script.html")?>
</body>

</html>

</html>