$(document).ready(function () {
    /*Validaciones*/
    /* $("#form_user").validity(function () {
         /*$("#user_name").require("Campo requerido.");
         $("#nombre1").require("Campo requerido.");
         $("#id_sede").require("Campo requerido.");
         $("#id_area").require("Requerido.");
         $("#pass_1").require("Requerido.").minLength(6, "Minimos 6 caracteres");
         $("#pass_2").require("Requerido.").equal(2);
 
     });*/

    $("#form_user").validate({
        rules: {
            user_name: "required",
            user_name: {
                required: true,
                minlength: 4
            },
            nombre1: "required",
            nombre1: {
                required: true,
                minlength: 15
            },
            id_sede: "required",
            id_sede: {
                required: true
            },
            id_area: "required",
            id_area: {
                required: true
            },
            id_area: "required",
            id_area: {
                required: true
            },
            pass_1: {
                required: true,
                minlength: 5
            },
            pass_2: {
                required: true,
                minlength: 5,
                equalTo: "#pass_1"
            },
        }
    });

    var url = $("#elurl").val()
    /*validar disponibilidad usuario */
    $('#user_name').focusout(function () {
        var elurl = url + 'assets/img/tenor.gif';
        if ($('#user_name').val() != "") {
            $.ajax({
                type: "POST",
                url: url + "c_usuarios/disponibilidad_usuario",
                data: "nick=" + $('#user_name').val(),
                success: function (respuesta) {
                    if (respuesta == '2') {
                        $('#msgUsuario').html("<p class='bg-primary'>Disponible</p>");
                        $('#id_guardar').attr("disabled", false);
                    } else {
                        $('#msgUsuario').html("<p class='bg-danger'>No Disponible</p>");
                        $('#id_guardar').attr("disabled", true);
                    }
                }
            });
        }
    });

    var datos_usuarios = $('#tabla_usuarios').DataTable({
        "processing": true,
        "serverSide": true,
        "searching": false,
        "dom": '<"toolbar">frtip',
        "order": [],
        "responsive": true,
        "iDisplayLength": 5,
        "ajax": {
            url: url + "c_usuarios/tabla_usuario_consulta",
            type: "POST"
        },
        "language": {
            "url": url + "assets/js/dataTables_Spanish.json"
        },
        "columnDefs": [
            {
                "targets": [0, 4],
                "orderable": false,
            },
        ],
    });

    /*llamado pantalla de confirmacion Cambio de estado*/
    $(document).on('click', '.cambio_estado', function () {
        var user_id = $(this).attr("id");
        $("#usuario1").val(user_id);
        $("#cambio").modal("show");
    });

    /*funcion cambio de estado*/
    $("#el_boton_cambio").click(function (event) {
        $("#cambio").modal("hide");
        var id = $("#usuario1").val();
        $.post(url + "c_usuarios/cambio_estado", {
            id: id
        }, function (data, status) {
            if (data == 1) {
                $("<div id='content_cambio'>Error !!!!</div>").dialog({
                    resizable: false,
                    title: 'Registro',
                    height: 150,
                    width: 350,
                    modal: true
                });
            } else {
                $("<div id='content_cambio'>Cambio de Con exito</div>").dialog({
                    resizable: false,
                    title: 'Registro',
                    height: 150,
                    width: 350,
                    modal: true,
                });
            }
            datos_usuarios.ajax.reload();
            setTimeout("$('#content_cambio').dialog('close')", 1000);
        });
    });
});