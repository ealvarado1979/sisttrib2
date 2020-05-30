<?php
if ($this->session->userdata('s_id_area') == 1 || $this->session->userdata('s_id_area') == 4) {
    $f_opciones = 1;
} else {
    $f_opciones = 0;
}
if ($this->session->userdata('s_id_area') == 2 || $this->session->userdata('s_id_area') == 4) {
    $f_opciones1 = 1;
} else {
    $f_opciones1 = 0;
}
if ($this->session->userdata('s_id_area') == 3 || $this->session->userdata('s_id_area') == 4) {
    $f_opciones2 = 1;
} else {
    $f_opciones2 = 0;
}
if ($this->session->userdata('s_id_area') == 4) {
    $f_opciones3 = 1;
} else {
    $f_opciones3 = 0;
}
?>
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>ST</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SISTT</b> RIB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url() ?>assets/img/user.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $this->session->userdata('s_sisttrib') ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url() ?>assets/img/user.png" class="img-circle" alt="User Image">
                                <p class="nombre_user">
                                    <?php echo $this->session->userdata('s_nombre') ?>
                                    <small class="sub_oficina_user"><?php echo $this->session->userdata('s_area') ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" data-toggle="modal" data-target="#cambio_pass" class="btn btn-default btn-flat"><i class="fa fa-unlock-alt"></i> Contraseña</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url() ?>c_usuario/salir" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Salir</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url() ?>assets/img/user.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <span class="hidden-xs"><?php echo $this->session->userdata('s_nombre') ?></span>
                    <p style="text-align: center;" ><?php echo $this->session->userdata('s_sisttrib') ?></p>
                    <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Opciones Menu</li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo $titulo ?>
                <small><?php echo $sub_titulo ?></small>
            </h1>