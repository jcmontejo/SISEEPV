<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Instituto Tecnologico de Tuxtla Gutiérrez</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <!--Style sheet extra-->
        <link href="../css/app.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!--<link rel="shortcut icon" href="assets/ico/favicon.png">-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body class="fondo">

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bienvenido a </strong>SISEEPV </h1>
                            <div class="description">
                                <p>
                                    Sistema web para el seguimiento de Egresados, empresas y Proyectos Vinculados. 
                                    <!--Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!-->
                                </p>
                            </div>
                        </div>
                    </div>
                       <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Crear nueva cuenta</h3>
                                    <p>Introduce tus datos para registrarte:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="../libs/crearusuario.php" method="POST" class="login-form">
                                   <div class="form-group">
                                        <label class="sr-only" for="form-username">Nombre</label>
                                        <input type="text" name="name"  placeholder="Nombre..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Tipo</label>
                                        <select class="form-control" name="type">
                                            <option value="1">Egresado</option>
                                            <option value="2">Empresa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Dirección de E-mail</label>
                                        <input type="email" name="email" placeholder="Dirección de E-mail..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Contraseña</label>
                                        <input type="password" name="password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Contraseña</label>
                                        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Registrar</button>
                                </form>
                                  <?php 
                                if (isset($_GET['mensaje']) && $_GET['mensaje'] == '1') {
                                    echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> las contraseñas no coinciden.
                                            </div>';
                                }
                                if (isset($_GET['mensaje']) && $_GET['mensaje'] == '2') {
                                   echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> uno o mas campos tienen que ser llenados.
                                            </div>';
                                }
                                if (isset($_GET['mensaje']) && $_GET['mensaje'] == '3') {
                                   echo '<div class="alert alert-danger">
                                                <strong>Algo esta mal!</strong> ya existe un usuario registrado con el mismo email.
                                            </div>';
                                }
                                 ?>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <!--
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>-->
                       <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <!--<h3>...or login with:</h3>-->
                            <div class="social-login-buttons">
                                <a class="btn btn-link-1 btn-link-1-facebook" href="../index.php">
                                    <i class="fa fa-home"></i> Regresar
                                </a>
                                <!--
                                <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                                <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                    <i class="fa fa-google-plus"></i> Google Plus
                                </a>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>