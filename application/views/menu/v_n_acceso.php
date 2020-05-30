<?php
if ($this->session->userdata('s_id_area') == 1 || $this->session->userdata('s_id_area') == 4) { ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">CATASTRO</h3>
                    <div class="box-tools pull-right">
                        <!--<span class="label label-danger">8 New Members</span>-->
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>mas.png" alt="User Image">
                            <a class="users-list-name" href="#">Registro de fichas</a>
                            <!--<span class="users-list-date">Today</span>-->
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>adjuntar.png" alt="User Image">
                            <a class="users-list-name" href="#">Historial de Traspasos</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>supermercado.png" alt="User Image">
                            <a class="users-list-name" href="#">Bitacoras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
}
if ($this->session->userdata('s_id_area') == 2 || $this->session->userdata('s_id_area') == 4) { ?>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">CUENTAS CORRIENTES</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>mas.png" alt="User Image">
                            <a class="users-list-name" href="#">Registro de fichas</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>adjuntar.png" alt="User Image">
                            <a class="users-list-name" href="#">Historial de Traspasos</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>supermercado.png" alt="User Image">
                            <a class="users-list-name" href="#">Bitacoras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
}
if ($this->session->userdata('s_id_area') == 1 || $this->session->userdata('s_id_area') == 4) { ?>
<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">CORRIENTES</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>mas.png" alt="User Image">
                            <a class="users-list-name" href="#">Registro de fichas</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>adjuntar.png" alt="User Image">
                            <a class="users-list-name" href="#">Historial de Traspasos</a>
                        </li>
                        <li>
                            <img src="<?php echo base_url() . IMG_MENU ?>supermercado.png" alt="User Image">
                            <a class="users-list-name" href="#">Bitacoras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>