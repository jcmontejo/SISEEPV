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
                        <a href="nuevocliente.php"><i class="fa fa-user"></i> Crear nuevo cliente</a>
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
                                <i class="fa fa-user"></i>  <a href="#">Agregar nuevo cliente</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Panel
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
                    <strong>Eh horabuena!</strong> el nuevo cliente ha sido creado exitosamente.
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
                    <strong>Algo esta mal!</strong> existe ya un cliente con la misma matricula y nombre de usuario.
                </div>';
    }
 ?>

                   

                        <form role="form" action="verificarinsersion.php" method="POST">

                            <div class="form-group">
                                <!--ID-->
                                <label>Matricula del cliente</label>
                                <input class="form-control" type="text" name="txtmatricula">
                                <!--NOMBRE DEL CLIENTE-->
                                <label>Nombre del cliente</label>
                                <input class="form-control" type="text" name="txtnombre">
                                <!--APELLIDOS DEL CLIENTE-->
                                <label>Apellidos del cliente</label>
                                <input class="form-control" type="text" name="txtapellidos">
                                <!--EMAIL DEL CLIENTE-->
                                <label>E-mail del cliente</label>
                                <input class="form-control" type="text" name="txtmail">
                                <!--NUMERO TELEFONICO DEL CLIENTE-->
                                <label>Número telefonico del cliente</label>
                                <input class="form-control" type="text" name="txtnumero">
                                <!--DIRECCION DEL CLIENTE-->
                                <label>Direccion de cliente</label>
                                <input class="form-control" type="text" name="txtdireccion">
                                <!--IDENTIFICADOR DEL USUARIO-->
                                <label>Nombre de usuario</label>
                                <select class="form-control" name="txtusuario">
                                    <?php 
                                    include('includes/conexion.php');
                                    $sql =$base->query("SELECT * FROM catalogo_usuarios");
                                    while ($datos = $sql->fetch()) {
                                         # code...
                                        echo "<option>".$datos['usuario'];"</option>";
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
