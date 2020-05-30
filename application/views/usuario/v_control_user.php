<div class="row">
    <div class="form-group col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Datos principales
            </div>
            <div class="panel-body">
                <div class="flot-chart-content" id="flot-line-chart">
                    <form action="<?php echo base_url() ?>c_usuarios/nuevo_usuario" autocomplete="off" method="post" id="form_user">
                        <input type="hidden" id="elurl" value="<?php echo base_url() ?>">
                        <div class="row form-group-sm">
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <label for="user">Nombre de Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id="user_name" name="user_name" value="" maxlength="20" onchange="mayusculas(this)">
                                    </div>
                                </div>
                                <div id="msgUsuario"></div>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user-circle-o"></i>
                                        </div>
                                        <input type="text" class="form-control" id="nombre1" name="nombre1" maxlength="65" value="" onchange="mayusculas(this)">
                                        <?php //echo $msn 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group-sm">
                            <div class="col-sm-11 col-md-10 col-lg-9">
                                <div class="form-group">
                                    <label for="nues">Sede</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <select id="id_sede" class="form-control" name="id_sede">
                                            <option selected="on" value=''></option>
                                            <?php
                                            if ($c_sede != 0) {
                                                foreach ($c_sede as $d) {
                                                    echo "<option value='" . $d->id_sede . "'>" . $d->descripcion_sede . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group-sm">
                            <div class="col-sm-8 col-md-7 col-lg-6">
                                <div class="form-group">
                                    <label for="nues">Area de trabajo</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-university"></i>
                                        </div>
                                        <select id="id_area" class="form-control" name="id_area">
                                            <option selected="on" value=''></option>
                                            <?php
                                            if ($c_areas != 0) {
                                                foreach ($c_areas as $c) {
                                                    echo "<option value='" . $c->id_area . "'>" . $c->descripcion_area . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group-sm">
                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <label for="nues">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <input type="password" class="form-control" id="pass_1" name="pass_1" value="" maxlength="20">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4 col-lg-3">
                                <div class="form-group">
                                    <label for="nues">Repetir Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <input type="password" class="form-control" id="pass_2" name="pass_2" value="" maxlength="20">
                                        <!--<script type="text/javascript">
                                            var f7 = new LiveValidation('pass_2');
                                            f7.add(Validate.Confirmation, {
                                                match: 'pass_1'
                                            });
                                        </script>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-default t_botton" id="id_guardar"> Guardar </button>
                                <a class="btn btn-primary t_botton" href="<?php echo base_url() ?>c_usuario/control_user" role="button">Nuevo</a>
                                <a class="btn btn-danger t_botton" href="<?php echo base_url() ?>" role="button">Inicio</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                Listado de usuarios
            </div>
            <div class="panel-body">
                <div class="flot-chart-content" id="flot-line-chart">
                    <table class="table table-bordered" id="tabla_usuarios">
                        <thead>
                            <tr class="info">
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Oficina</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="cambio">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Estado</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="usuario1" name="usuario1" value="">
                <p>¡Esta seguro del cambio de estado..!</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="el_boton_cambio" class="btn btn-primary anchobottones">Modificar</button>
                <button type="button" class="btn btn-danger anchobottones" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="interino">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Interino</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" id="usuario2" name="usuario2" value="">
                <p>¡Cambiar de estado a Jefe..!</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="el_boton_interino" class="btn btn-primary anchobottones">Modificar</button>
                <button type="button" class="btn btn-danger anchobottones" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#id_sede').select2({
        placeholder: 'Seleccione una opcion',
        theme: "bootstrap"
    });
    $('#id_area').select2({
        placeholder: 'Seleccione una opcion',
        theme: "bootstrap"
    });
</script>