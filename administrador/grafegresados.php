<?php session_start(); ?>
<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrador! | SISEEPV </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <!--Graficas-->
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Porcentaje de egresados registrados en SISEEPV, 2016'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Registrados',
            data: [
            
            <?php
            $sqle=$base->query("SELECT  * FROM user WHERE type = 1");
            $e = $sqle->rowCount();
            $sqlem=$base->query("SELECT  * FROM user WHERE type = 2");
            $em = $sqlem->rowCount();
            $sqld=$base->query("SELECT  * FROM user WHERE type = 3");
            $d = $sqld->rowCount();
           // while($datos = $sql->fetch()){
            ?>
            
                ['<?php echo "Egresados"; ?>', <?php echo $e; ?>],
                ['<?php echo "Empresas"; ?>', <?php echo $em; ?>],
                ['<?php echo "Docentes"; ?>', <?php echo $d; ?>],
            
            <?php
            //}
            ?>  

            ]
        }]
    });
});


        </script>
    <!--End graficas-->
      <!--Graficas-->
        <script type="text/javascript">
$(function () {
    $('#container1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Porcentaje de salario percibido por egresados actualmente, 2016'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
       plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
        series: [{
            type: 'pie',
            name: 'Salario',
            data: [
            
            <?php
            $sqls1=$base->query("SELECT  * FROM labor_data WHERE salary = 's1'");
            $s1 = $sqls1->rowCount();
            $sqls2=$base->query("SELECT  * FROM labor_data WHERE salary = 's2'");
            $s2 = $sqls2->rowCount();
            $sqls3=$base->query("SELECT  * FROM labor_data WHERE salary = 's3'");
            $s3 = $sqls3->rowCount();
            $sqls4=$base->query("SELECT  * FROM labor_data WHERE salary = 's4'");
            $s4 = $sqls4->rowCount();
           // while($datos = $sql->fetch()){
            ?>
            
                ['<?php echo "$4000 - $8000"; ?>', <?php echo $s1; ?>],
                ['<?php echo "$8000 - $12000"; ?>', <?php echo $s2; ?>],
                ['<?php echo "$12000 - $16000"; ?>', <?php echo $s3; ?>],
                ['<?php echo "$16000 - $20000"; ?>', <?php echo $s4; ?>],
            
            <?php
            //}
            ?>  

            ]
        }]
    });
});


        </script>
    <!--End graficas-->
    <!--Graficas-->
        <script type="text/javascript">
    $(function () {
    $('#container2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Egresados<br>titulados',
            align: 'center',
            verticalAlign: 'middle',
            y: 50
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje',
            innerSize: '50%',
            data: [
             <?php
            $sqlt=$base->query("SELECT  * FROM studies_data WHERE certification = 'SI'");
            $t = $sqlt->rowCount();
            $sqlnt=$base->query("SELECT  * FROM studies_data WHERE certification = 'NO'");
            $nt = $sqlnt->rowCount();
            $sqlep=$base->query("SELECT  * FROM studies_data WHERE certification = 'En proceso'");
            $ep = $sqlep->rowCount();
           
           // while($datos = $sql->fetch()){
            ?>
                ['Titulados',   <?php echo "$t"; ?>],
                ['NO Titulados', <?php echo "$nt"; ?>],
                ['En proceso', <?php echo "$ep"; ?>],
            ]
        }]
    });
});

        </script>
    <!--End graficas-->
   
</head>


<body class="nav-md">
 
    <!-- /HighCharts content -->
    <script src="Highcharts-4.1.5/js/highcharts.js"></script>
    <script src="Highcharts-4.1.5/js/modules/exporting.js"></script>


    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-terminal"></i> <span>Administrador sissepv!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/admin/cossio.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenida,</span>
                            <h2>Aida G. Cossio</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a>
                                </li>
                                <li><a href="crearusuario.php"><i class="fa fa-users"></i> Crear usuario</a>
                                </li>
                                <li><a href="index.php"><i class="fa fa-user"></i> Usuarios existentes</a>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Tipos de usuario <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="egresados.php">Egresados</a>
                                        </li>
                                        <li><a href="empresas.php">Empresas</a>
                                        </li>
                                        <li>
                                            <a href="docentes.php">Docentes</a>
                                        </li>
                                    </ul>
                                </li>
                                  <li><a><i class="fa fa-book"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="vacantes.php">Solicitud de Vacantes</a>
                                        </li>
                                        <li><a href="residentes.php">Solicitud de Residentes</a>
                                        </li>
                                        <li>
                                            <a href="servicio.php">Solicitud Servicio Social</a>
                                        </li>
                                    </ul>
                                </li>
                                  <li><a><i class="fa fa-archive"></i> Proyectos <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="proyectos.php">Todos los Proyectos</a>
                                        </li>
                                        <li><a href="arquitectura.php">Arquitectura de Cómputo</a>
                                        </li>
                                        <li>
                                            <a href="computacion.php">Computación Educativa</a>
                                        </li>
                                        <li>
                                            <a href="inteligencia.php">Inteligencia Artificial</a>
                                        </li>
                                        <li>
                                            <a href="tecnologias.php">Tecnologías de Información y Base de Datos</a>
                                        </li>
                                    </ul>
                                </li>
                                   <li><a><i class="fa fa-bar-chart"></i> Graficas estadisticas <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="grafegresados.php">Egresados</a>
                                        </li>
                                        <li>
                                            <a href="#">Empresas</a>
                                        </li>
                                        <li>
                                            <a href="graficasproyecto.php">Proyectos Vinculados</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/admin/cossio.jpg" alt="">Aida G. Cossio
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Perfil</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Ayuda</a>
                                    </li>
                                    <li><a href="cerrarsesionadmin.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                                    </li>
                                </ul>
                            </li>
                            <?php 
                                include('conexion.php');
                                $cita = $base->query("SELECT * FROM cita");
                                $nc = $cita->rowCount();
                             ?>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green"><?php echo $nc; ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong><a href="cita.php">Ver citas solicitadas</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">


                <div class="row">
                  
                </div>
                <br/>

                <div class="row" id="container"></div>


                <div class="row" id="container1"></div>

                <div class="row" id="container2"></div>

                <!-- footer content -->

                <footer>
                    <div class="">
                        <p class="pull-right">Administrador SISEEPV por<a> ittg</a>. |
                            <span class="lead"> <i class="fa fa-terminal"></i> Admin siseepv!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

    <script src="js/custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>


    <!-- worldmap -->
    <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.1.min.js"></script>
    <script type="text/javascript" src="js/maps/gdp-data.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>

    <!-- skycons -->
    <script src="js/skycons/skycons.js"></script>

   

</body>

</html>
