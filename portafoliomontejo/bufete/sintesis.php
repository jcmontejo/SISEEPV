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
                            <a href="cerrarsesion.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
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
                            <div class="page-header">
                                <h4>Te presentamos la sintesis de tú caso</h4>
                            </div>
                            <?php 
                            include('includes/conexion.php');
                                    if (isset($_GET['id'])) {
                                            # code...
                                        $id = $_GET['id'];
                                        $consulta = $base->query("SELECT * FROM caso WHERE id_caso = $id");
                                        $ok = $consulta->fetch();
                                    }

                            ?>
                            <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="list-group">
                            <a  class="list-group-item active">Información general</a>
                            <a  class="list-group-item">Reseña: <?php echo $ok['resenia']; ?></a>
                            <a  class="list-group-item">Estado actual: <?php echo $ok['status']; ?></a>
                            <a  class="list-group-item">Clasificación: <?php echo $ok['clasificacion']; ?></a>
                            <a  class="list-group-item">Tipo de caso: <?php echo $ok['tipo_caso']; ?></a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <!-- /.col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Para cualquier duda o aclaración</h3>
                            </div>
                            <div class="panel-body">
                                correo: info@diazmandujano.com.mx
                                <br>
                                Telefono: 961-614-7673
                            </div>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                     <!--TABLA DE CASOS-->
                    <div class="row">
                    <div class="col-lg-12">
                        <h2>Expediente</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Número de expediente</th>
                                        <th>Fecha de auto</th>
                                        <th>Tipo de cuaderno</th>
                                        <th>Fecha de publicación</th>
                                        <th>Reseña</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--Comenzamos codigo PHP para obtener todos los clientes existentes en la BD-->
                                <?php 
                                    include('includes/conexion.php');
                                    /*Realizamos consulta sql*/
                                    $resultado = $base->query("SELECT * FROM expediente WHERE id_caso = '$id' ");
                                    while ($datos = $resultado->fetch()) {
                                        # code...
                                        $identi = $datos['id_caso'];
                                        echo "<tr>";
                                        echo "<td>".$datos['id_sintesis'];"</td>";
                                        echo "<td>".$datos['fecha_auto'];"</td>";
                                        echo "<td>".$datos['tipo_cuaderno'];"</td>";
                                        echo "<td>".$datos['fecha_publicacion'];"</td>";
                                        echo "<td>".$datos['resumen'];"</td>";
                                        

                                    }
                                 ?>
                                <!--Fin de codigo-->
                                </tbody>
                            </table>
                        </div>
                    </div>
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
