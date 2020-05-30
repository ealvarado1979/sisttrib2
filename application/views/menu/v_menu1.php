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
                    <p><?php echo $this->session->userdata('s_sisttrib') ?></p>
                    <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Opciones Menu</li>
                <?php
                if ($f_opciones == 1) { ?>
                    <li class="header" style="color: #ffffff">CATASTRO</li>
                    <li class="<?php echo $s_active[0] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Tributos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Nuevo Registro</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[1] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Registro de fichas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[2] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Historial de Traspasos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[3] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Bitacoras</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[4] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Padrón de contribuyente</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[5] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Mapas digitales</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                <?php
                }
                if ($f_opciones1 == 1) { ?>
                    <li class="header" style="color: #ffffff">CUENTAS CORRIENTES</li>
                    <li class="<?php echo $s_active[6] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Cobro mensual</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[7] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Mora y multa</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[7] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Pagos anticipados</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[8] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Actividad economica</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[9] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Mapas digitales</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                <?php
                }
                if ($f_opciones2 == 1) { ?>
                    <li class="header" style="color: #ffffff">CORRIENTES</li>
                    <li class="<?php echo $s_active[10] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Cobros</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $s_active[10] ?> treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Recibos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_recepcion/ingreso_proceso"><i class="fa fa-floppy-o"></i> Catalogo Tributo</a></li>
                        </ul>
                    </li>
                <?php
                }
                if ($f_opciones2 == 1) { ?>
                    <li class="header" style="color: #ffffff">ADMINISTRACIÓN</li>
                    <li class="<?php echo $s_active[11] ?> treeview">
                        <a href="#">
                            <i class="fa fa-user-circle" aria-hidden="true"></i> <span>Usuarios</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>c_usuarios/nuevo_usuario"><i class="fa fa-user-plus" aria-hidden="true"></i> Nuevos Usuarios</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
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