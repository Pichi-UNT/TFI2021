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

            include('funciones.php');
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
                            <strong class="card-title">Nuevo Paciente</strong>
                        </div>
                        <div class="card-body">
                            <form method="post" action="añadir.php">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input type="text" name="nombre" placeholder="ej. Este Banquito" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>DNI:</label>
                                    <input type="text" name="dni" placeholder="ej. 30291857" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Sexo:</label>
                                    <input type="text" name="sexo" placeholder="ej. Mujer" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fecha de nacimiento:</label>
                                    <input type="date" name="fecha_nac" class="form-control" min="1900-01-01">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono:</label>
                                    <input type="text" name="telefono"placeholder="ej. 3855933790" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>¿Es de riesgo?</label>
                                    <select name="riesgo" id="selectSm" class="form-control-sm form-control">
                                                <option value="">Elija la opción</option>
                                                <option value=1>Sí</option>
                                                <option value=0>No</option>
                                            </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Añadir</button>

                            </form>
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