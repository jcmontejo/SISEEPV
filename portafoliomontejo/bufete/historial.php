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
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Panel Administrador</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Panel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!--TABLA DE USUARIOS-->
                <div class="row">
                    <div class="col-lg-12">
                    <?php 
    if (isset($_GET['mensaje']) && $_GET['mensaje'] == 1) {
        # code...
        echo '<div class="alert alert-success">
                    <strong>En horabuena!</strong> se ha borrado usuario exitosamente.
                </div>';
    }
    if (isset($_GET['mensaje']) && $_GET['mensaje'] == 2) {
        # code...
        echo '<div class="alert alert-danger">
                    <strong>Algo esta mal!</strong> no pudo ser borrado usuario.
                </div>';
    }
 ?>
                        <h2>Usuarios registrados</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Nivel de acceso</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--Comenzamos codigo PHP para obtener todos los clientes existentes en la BD-->
                                <?php 
                                    include('includes/conexion.php');
                                    /*Realizamos consulta sql*/
                                    $resultado = $base->query('SELECT * FROM catalogo_usuarios WHERE nivel_acceso = 2');
                                    while ($datos = $resultado->fetch()) {
                                        # code...
                                        $usu = $datos['usuario'];
                                        echo "<tr>";
                                        echo "<td>".$datos['usuario'];"</td>";
                                        echo "<td>".$datos['pass'];"</td>";
                                        echo "<td>".$datos['nivel_acceso'];"</td>";
                                        echo "<td><a href=\"borrarusuario.php?usuario=$usu\"><button type=\"button\" class=\"btn btn-xs btn-danger\">Borrar</button></a></td>";

                                    }
                                 ?>
                                <!--Fin de codigo-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!--TABLA DE CLIENTES-->
                    <div class="row">
                    <div class="col-lg-12">
                    <?php 
    if (isset($_GET['mensaje1']) && $_GET['mensaje1'] == 1) {
        # code...
        echo '<div class="alert alert-success">
                    <strong>En horabuena!</strong> se ha borrado cliente exitosamente.
                </div>';
    }
    if (isset($_GET['mensaje1']) && $_GET['mensaje1'] == 2) {
        # code...
        echo '<div class="alert alert-danger">
                    <strong>Algo esta mal!</strong> no pudo ser borrado cliente.
                </div>';
    }
 ?>
                        <h2>Clientes registrados</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Número telefonico</th>
                                        <th>Dirección</th>
                                        <th>Usuario</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--Comenzamos codigo PHP para obtener todos los clientes existentes en la BD-->
                                <?php 
                                    include('includes/conexion.php');
                                    /*Realizamos consulta sql*/
                                    $resultado = $base->query('SELECT * FROM cliente');
                                    while ($datos = $resultado->fetch()) {
                                        # code...
                                        $matri = $datos['matricula'];
                                        echo "<tr>";
                                        echo "<td>".$datos['matricula'];"</td>";
                                        echo "<td>".$datos['nombre'];"</td>";
                                        echo "<td>".$datos['apellidos'];"</td>";
                                        echo "<td>".$datos['correo'];"</td>";
                                        echo "<td>".$datos['numero_telefono'];"</td>";
                                        echo "<td>".$datos['direccion'];"</td>";
                                        echo "<td>".$datos['catalogo_usuarios_usuario'];"</td>";
                                        echo "<td><a href=\"borrarcliente.php?matricula=$matri\"><button type=\"button\" class=\"btn btn-xs btn-danger\">Borrar</button></a></td>";

                                    }
                                 ?>
                                <!--Fin de codigo-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!--TABLA DE CASOS-->
                    <div class="row">
                    <div class="col-lg-12">
                        <h2>Casos registrados</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Folio de caso</th>
                                        <th>Status</th>
                                        <th>Clasificación</th>
                                        <th>Tipo de caso</th>
                                        <th>Fecha de inicio</th>
                                        <th>Conclusión</th>
                                        <th>Matricula del cliente dueño del caso</th>
                                        <th>Acción1</th>
                                        <th>Acción2</th>
                                        <th>Acción3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--Comenzamos codigo PHP para obtener todos los clientes existentes en la BD-->
                                <?php 
                                    include('includes/conexion.php');
                                    /*Realizamos consulta sql*/
                                    $resultado = $base->query('SELECT * FROM caso');
                                    while ($datos = $resultado->fetch()) {
                                        # code...
                                        $identi = $datos['id_caso'];
                                        echo "<tr>";
                                        echo "<td>".$datos['id_caso'];"</td>";
                                        echo "<td>".$datos['status'];"</td>";
                                        echo "<td>".$datos['clasificacion'];"</td>";
                                        echo "<td>".$datos['tipo_caso'];"</td>";
                                        echo "<td>".$datos['fecha_inicio'];"</td>";
                                        echo "<td>".$datos['conclusion'];"</td>";
                                        echo "<td>".$datos['cliente_matricula'];"</td>";
                                        echo "<td><a href=\"actualiza_caso.php?id=$identi\"><button type=\"button\" class=\"btn btn-xs btn-primary\">Editar</button></a></td>";
                                        echo "<td><a href=\"subirarchivo.php?id=$identi\"><button type=\"button\" class=\"btn btn-xs btn-success\"> Agregar archivo</button></a></td>";
                                        echo "<td><a href=\"subirsintesis.php?id=$identi\"><button type=\"button\" class=\"btn btn-xs btn-info\"> Agregar expediente</button></a></td>";

                                    }
                                 ?>
                                <!--Fin de codigo-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!--LISTAR ARCHIVOS-->
                    <div class="row">
                    <div class="col-lg-12">
                        <h2>Archivos guardados</h2>
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Folio</th>
                                        <th>Nombre</th>
                                        <th>Folio del caso dueño del archivo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--Comenzamos codigo PHP para obtener todos los archivos existentes en la BD-->
                    <?php 
                                    include('includes/conexion.php');
                                    /*Realizamos consulta sql*/
                                    $query = $base->query("SELECT *FROM archivos");
                    $numero_registro = $query->rowCount();
                    if($numero_registro == 0)
                    {
                    echo "Tabla vacia <br>";
                    }
                    else
                    {
                    while($datos= $query->fetch())
                    {
                        # code...
                        $iden = $datos['id_archivo'];
                        echo "<tr>";
                        echo "<td>".$datos['id_archivo'];"</td>";
                        echo "<td>".$datos['nombre'];"</td>";
                        echo "<td>".$datos['id_caso'];"</td>";
                        echo "<td><a href=\"descargar.php?id=$iden\"><button type=\"button\" class=\"btn btn-xs btn-success\">Descargar</button></a> <a href=\"actualizar.php?id=$iden\"><button type=\"button\" class=\"btn btn-xs btn-primary\">Editar</button></a></td>";
                        
                    /*<a href="download.php?id=<?php=$id;?>"><?php=$name;?></a> <br>*/

                    }
                    }
                    ?>
                                </tbody>
                            </table>
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
