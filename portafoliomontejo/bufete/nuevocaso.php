<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador | Díaz Mandujano & Asociados</title>

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
                <a class="navbar-brand" href="admin.php">Panel Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['usuarioadmin'];; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>-->
                        <li>
                            <a href="admin.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
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
                        <a href="nuevousuario.php"><i class="fa fa-user"></i></i> Crear nuevo usuario</a>
                    </li>
                    <li>
                        <a href="nuevocliente.php"><i class="fa fa-user"></i></i> Crear nuevo cliente</a>
                    </li>
                    <li>
                        <a href="nuevocaso.php"><i class="fa fa-fw fa-table"></i> Agregar caso a cliente</a>
                    </li>
                    <li class="active">
                        <a href="historial.php"><i class="fa fa-fw fa-bar-chart-o"></i> Historial</a>
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
                            Sistema <small>Díaz Mandujano</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-table"></i></i>  <a href="#">Agregar nuevo caso a cliente</a>
                            </li>
                            <li class="active">
                                 Panel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!--Formularios-->
                <div class="row">
                    <div class="col-lg-6">

                        <?php 
    if (isset($_GET['mensaje']) && $_GET['mensaje'] == 1) {
        # code...
        echo '<div class="alert alert-success">
                    <strong>En horabuena!</strong> se ha agregado caso a cliente exitosamente.
                </div>';
    }
    if (isset($_GET['mensaje']) && $_GET['mensaje'] == 2) {
        # code...
        echo '<div class="alert alert-danger">
                    <strong>Algo esta mal!</strong> uno o mas campos tienen que ser llenados.
                </div>';
    }
    if (isset($_GET['mensaje']) && $_GET['mensaje'] == 3) {
        # code...
        echo '<div class="alert alert-danger">
                    <strong>Algo esta mal!</strong> existe ya un caso con el mismo ID.
                </div>';
    }
 ?>

                        <form role="form" action="agregar_caso.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <!--ID DEL CASO-->
                                <label>Folio del caso</label>
                                <input class="form-control" type="text" name="txtid">
                                <!--RESEÑA DEL CASO-->
                                <label>Reseña del caso</label>
                                <textarea class="form-control" rows="3" name="txtresenia"></textarea>
                                <!--SELECCIONAR STATUS DEL CASO-->
                                 <label>Selecciona status del caso</label>
                                <select class="form-control" name="txtstatus">
                                    <option>En estudio</option>
                                    <option>En elaboración</option>
                                    <option>En trámite</option>
                                    <option>Desahogo de pruebas</option>
                                    <option>Sentencia Primer Instancia</option>
                                    <option>Sentencia Segunda Instancia</option>
                                    <option>Apelación</option>
                                    <option>Amparo Directo</option>
                                    <option>Amparo Indirecto</option>
                                    <option>Registro de atención</option>
                                    <option>Carpeta de Investigación</option>
                                    <option>Vinculación de proceso</option>
                                    <option>Audiencia intermedia</option>
                                    <option>Audiencia preliminar</option>
                                    <option>Audiencia de Juicio</option>
                                    <option>Juicio de Nulidad</option>
                                    <option>Audiencia conciliación</option>
                                    <option>Cosa Juzgada</option>
                                    <option>Laudo</option>
                                    <option>Otros</option>
                                    <option>Registro</option>
                                    <option>Audiencia</option>
                                </select>
                                <!--SELECCIONAR CLASIFICACION DEL CASO-->
                                <label>Selecciona clasificación del caso</label>
                                <select class="form-control" name="txtclasif">
                                    <option>Demanda</option>
                                    <option>Contestación de demanda</option>
                                    <option>Vista</option>
                                    <option>Auto</option>
                                    <option>Alegatos</option>
                                    <option>Apelación</option>
                                    <option>Sentencia 1ª instancia</option>
                                    <option>Sentencia 2ª instancia</option>
                                    <option>Agravios</option>
                                    <option>Amparo Directo</option>
                                    <option>Amparo Indirecto</option>
                                    <option>Denuncia</option>
                                    <option>Sentencia Definitiva</option>
                                    <option>Suspensión</option>
                                    <option>Pruebas</option>
                                    <option>Acuse</option>
                                </select>
                                <!--SELECCION DE TIPO DE CASO-->
                                <label>Selecciona tipo de caso</label>
                                <select class="form-control" name="txttipo">
                                    <option>Penal</option>
                                    <option>Civil</option>
                                    <option>Mercantil</option>
                                    <option>Fiscal</option>
                                    <option>Laboral</option>
                                    <option>Administrativo</option>
                                </select>
                                <!--FECHA DE INICIO DEL CASO-->
                                <label>Fecha de inicio del caso</label>
                                <input class="form-control" type="date" name="txtfechainicio">
                                <!--FECHA DE PUBLICACION DEL CASO-->
                                <label>Fecha de publicación del caso</label>
                                <input class="form-control" type="date" name="txtfechapub">
                                <!--FECHA DE AUTO DEL CASO-->
                                <label>Fecha de auto del caso</label>
                                <input class="form-control" type="date" name="txtfechaauto">
                                <!--FECHA DE EFECTOS DEL CASO-->
                                <label>Fecha en que surgierón los efectos del caso</label>
                                <input class="form-control" type="date" name="txtfechaefectos">
                                <!--FECHA DE TERMINO DEL CASO-->
                                <label>Fecha de término del caso</label>
                                <input class="form-control" type="date" name="txtfechatermino">
                                <!--CONCLUSION DEL CASO-->
                                <label>Dicotomía</label>
                                 <select class="form-control" name="txtconclusion">
                                    <option>Ganado</option>
                                    <option>Perdido</option>
                                    <option>En transcurso</option>
                                </select>
                               <!--MATRICULA DEL CLIENTE QUE TIENE ESTE CASO-->
                                <label>Matricula del cliente acreedor del caso</label>
                                <select class="form-control" name="txtmatricula">
                                    <?php 
                                        include('includes/conexion.php');
                                        try {
                                            $resultado = $base->query("SELECT * FROM cliente");
                                            while ($datos = $resultado->fetch()) {
                                                # code...
                                                echo "<option>".$datos['matricula']."</option>";
                                            }
                                            
                                        } catch (Exception $e) {
                                            
                                        }

                                     ?>
                                </select>
                        
                            </div>
                            <!--Botones para guardar o limpiar datos-->
                            <button type="submit" class="btn btn-default" name="guardar">Guardar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>
                        </form>
                        <br><br>

                <!-- /.row -->
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
