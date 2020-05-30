<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url() ?>assets/img/iconfinder.ico" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sweetalert2.min.css">
</head>

<body>
    <div class="login">
        <div class="app-title">
            <h1 style="font-size: 20px"><?php echo SITE_NAME
                                                ?></h1>
        </div>

        <div class="login-form">
            <form id="login-admin" method="post" action="<?php echo base_url() ?>c_usuarios/validacion_user" autocomplete="off">
                <input type="hidden" id="url" value="<?php echo base_url() ?>">
                <div class="input-group ">
                    <div class="input-group-addon color">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control altura" name="usuario" placeholder="Usuario">
                </div>

                <div class="form-group has-feedback" style="top: 5px;">
                    <div class="input-group">
                        <div class="input-group-addon color">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" class="form-control altura" name="password" placeholder="Password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-large btn-block" href="#">Ingreso</button>
                <a class="login-link">Copyright © 2020, <br><?php echo $this->session->userdata('s_version');
                                                                ?></a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/sweetalert2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/login.js"></script>
</body>

</html>