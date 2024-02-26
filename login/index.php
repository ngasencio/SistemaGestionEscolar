<?php include('../app/config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NAME ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= APP_URL ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= APP_URL ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= APP_URL ?>/public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <center>

            <img src="data:image/png;base64,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" width="150px" alt="">
        </center>
        <br>
        <div class="login-logo">
            <h3 href=""><b><?= APP_NAME ?></b> NG</h3>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar de Sesión</p>

                <form action="controller_login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Correo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-primary btn-block" type="submit"> Ingresar</button>
                        </div>
                    </div>


                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= APP_URL ?>/public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= APP_URL ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= APP_URL ?>/public/dist/js/adminlte.min.js"></script>
</body>

</html>