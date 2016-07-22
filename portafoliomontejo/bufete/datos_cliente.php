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
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Ajustes</a>
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
                    <li>
                        <a href="datos_cliente.php"><i class="fa fa-user"></i></i> Ir a mi caso</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-folder"></i></i> Sintesis</a>
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
                                <i class="fa fa-dashboard"></i>  <a href="vista_cliente.php">PLATDOC</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Panel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <!--COMIENZO DE CODIGO PHP PARA OBTENER DATOS DEL CASO-->
                                <?php 
                                    include('includes/conexion.php');
                                    $usuario = $_SESSION['usuario'];
                                    /*consultamos datos del usuario*/
                                    $consulta1 = $base->query ("SELECT * FROM cliente WHERE catalogo_usuarios_usuario = '$usuario' ");
                                    $ok = $consulta1->fetch();
                                    $matricula = $ok['matricula'];
                                    $consulta2 = $base->query("SELECT * FROM caso WHERE cliente_matricula = $matricula");
                                    $ok2 = $consulta2->fetch();
                                    $consulta3 = $base->query("SELECT * FROM archivos WHERE matricula_cliente = $matricula");
                                    $ok3 = $consulta3->fetch();
                                 ?>
                                <!--FIN DE CODIGO PHP-->
                <div class="row">
                    <div class="col-lg-12">
                             <h2>Estimado cliente te presentamos la información actual de tu caso</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                            <thead>
                                    <tr>
                                        <th>Id del caso</th>
                                        <th>Reseña</th>
                                        <th>Status</th>
                                        <th>Clasificación</th>
                                        <th>Tipo de caso</th>
                                        <th>Documento</th>
                                        <th>Sintesis</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php 
                                        try {
                                            while ($datos = $consulta2->fetch()) {
                                                # code...
                                                $iden = $ok3['id_archivo'];                                              
                                                echo "<tr>";
                                                echo "<td>".$ok2['id_caso'];"</td>";
                                                echo "<td>".$ok2['resenia'];"</td>";
                                                echo "<td>".$ok2['status'];"</td>";
                                                echo "<td>".$ok2['clasificacion'];"</td>";
                                                echo "<td>".$ok2['tipo_caso'];"</td>";
                                                echo "<td><a href=\"descargar.php?id=$iden\"><button type=\"button\" class=\"btn btn-xs btn-success\">Descargar</button></a></td>";
                                                echo "<td><a href=#><button type=\"button\" class=\"btn btn-xs btn-info\">Ver</button></a></td>";

                                            }
                                            
                                        } catch (Exception $e) {
                                            
                                        }
                             ?>
                              </tbody>
                            </table>
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
