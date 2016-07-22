<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PLATDOC</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/boot.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="vista_cliente.php">PLATDOC</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usuario'];; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>-->
                        <li>
                            <a href="vista_cliente.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="cerrarsesioncliente.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="vista_cliente.php"><i class="fa fa-fw fa-desktop"></i> Inicio</a>
                    </li>
                    <!--<li>
                        <a href="datos_cliente.php"><i class="fa fa-user"></i></i> Ir a mi caso</a>
                    </li>-->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-folder-open"></i> Casos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="derecho_penal.php">Derecho penal</a>
                            </li>
                            <li>
                                <a href="derecho_civil.php">Derecho civil</a>
                            </li>
                            <li>
                                <a href="derecho_mercantil.php">Derecho mercantil</a>
                            </li>
                            <li>
                                <a href="derecho_fiscal.php">Derecho fiscal</a>
                            </li>
                            <li>
                                <a href="derecho_laboral.php">Derecho laboral</a>
                            </li>
                            <li>
                                <a href="derecho_administrativo.php">Derecho administrativo</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PLATDOC <small>Díaz Mandujano</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">PLATDOC</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Panel
                            </li>
                        </ol>
                    </div>

                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Bienvenido de nuevo</strong> a<a href="#" class="alert-link"> PLATDOC</a> estamos para servirte!
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-legal fa-5x"></i>
                                    </div>
                                    <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Penal' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <div>Caso Penal!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_penal.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Penal para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                     <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Civil' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <div>Caso Civil!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_civil.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Civil para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-building fa-5x"></i>
                                    </div>
                                     <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Mercantil' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <div>Caso Mercantil!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_mercantil.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Mercantil para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bookmark-o fa-5x"></i>
                                    </div>
                                     <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Fiscal' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <div>Caso Fiscal!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_fiscal.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Fiscal para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-credit-card fa-5x"></i>
                                    </div>
                                     <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Laboral' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <br>
                                        <div>Caso Laboral!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_laboral.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Laboral para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-briefcase fa-5x"></i>
                                    </div>
                                     <?php 
                                        include('includes/conexion.php');
                                         $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula AND tipo_caso = 'Administrativo' ");
                                     ?>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $consulta2->rowCount(); ?></div>
                                        <br>
                                        <div>Caso Administrativo!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="derecho_administrativo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ve al menú y presiona Derecho Administrativo para ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
