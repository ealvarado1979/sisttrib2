</section>
</div>

<div class="control-sidebar-bg"></div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>v. </b> <?php echo $this->session->userdata('s_version'); ?>
    </div>
    <strong><?php echo PIE_PAG ?></strong>
</footer>

<div class="modal fade bd-example-modal-md" id="cambio_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Cambio Contraseña
                            </div>
                            <input type="hidden" class="form-control"  id="elurls" name="elurls" value="<?php echo base_url() ?>">
                            <div class="panel-body">
                                <div class="flot-chart-content" id="flot-line-chart">
                                    <div class="row form-group-sm">
                                        <div class="col-sm-5 col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label for="nues">Nombre Usuario</label>
                                                <input type="text" class="form-control" readonly="on" id="user" name="user" value="<?php echo $this->session->userdata('odpss1') ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label for="receptor">Contraseña Actual</label>
                                                <input type="password" class="form-control" id="pass_actuals" name="pass_actuals" value="" maxlength="30">
                                                <span  id="error1"></span>
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="row form-group-sm">
                                        <div class="col-sm-5 col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label for="nues">Nueva Contraseña</label>
                                                <input type="password" class="form-control"  id="pass_news" name="pass_news" value="" maxlength="30">
                                                <span  id="error2"></span>
                                                <span  id="error4"></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-5 col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label for="receptor">Repetir Contraseña</label>
                                                <input type="password" class="form-control" id="pass_reps" name="pass_reps" value="" maxlength="30">
                                                <span  id="error3"></span>
                                                <span  id="error4a"></span>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="el_boton_cambio_pass" class="btn btn-primary t_botton" >Cambio</button>
                                    <button type="button" class="btn btn-danger t_botton" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</body>
</html>
