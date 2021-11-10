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
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <button class="card" type="button" onclick="javascript:this.disabled = true">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Datos</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <button class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">internacion</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <button class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Regitro de Vacunacion</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <button class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Historial Clinico</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

  
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Informacion </h4>
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>


                <!--  /Traffic -->
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
