$(document).ready(function () {
    $("#el_boton_cambio_pass").click(function (event) {
        var user = $("#user").val();
        var pass_actual = $("#pass_actuals").val();
        var pass_new = $("#pass_news").val();
        var pass_rep = $("#pass_reps").val();
        var url = $("#elurls").val();
        var contador = 4;
        if (pass_actual == null || pass_actual.length == 0) {
            $("#error1").html("<strong> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Campo Requerido</strong>");
            $("#error1").css("color", "red");
            $("#error1").css("fontSize", "12px");
        } else {
            $("#error1").html("");
            contador = contador - 1;
        }
        if (pass_new == null || pass_new.length == 0) {
            $("#error2").html("<strong> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Campo Requerido</strong><br>");
            $("#error2").css("color", "red");
            $("#error2").css("fontSize", "12px");
        } else {
            $("#error2").html("");
            contador = contador - 1;
        }

        if (pass_rep == null || pass_rep.length == 0) {
            $("#error3").html("<strong> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> Campo Requerido</strong><br>");
            $("#error3").css("color", "red");
            $("#error3").css("fontSize", "12px");
        } else {
            $("#error3").html("");
            contador = contador - 1;
        }

        if (pass_new !== pass_rep) {
            $("#error4").html("<strong> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> No son iguales</strong>");
            $("#error4").css("color", "red");
            $("#error4").css("fontSize", "12px");
            $("#error4a").html("<strong> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> No son iguales</strong>");
            $("#error4a").css("color", "red");
            $("#error4a").css("fontSize", "12px");
        } else {
            $("#error4").html("");
            $("#error4a").html("");
            contador = contador - 1;
        }


        if (contador == 0) {
            $("#cambio_pass").modal("hide");
            $.post(url + "c_usuario/cambio_pass", {
                user: user,
                pass_actual: pass_actual,
                pass_new: pass_new,
            }, function (data, status) {
                if (data == 1 || data == 2) {
                    $("<div id='content'>Error !!!!</div>").dialog({
                        resizable: false,
                        title: 'Registro',
                        height: 150,
                        width: 350,
                        modal: true
                    });
                    $("#pass_actuals").val('');
                    $("#pass_news").val('');
                    $("#pass_reps").val('');
                } else {
                    $("<div id='content'>Cambio contraseña cambiada</div>").dialog({
                        resizable: false,
                        title: 'Registro',
                        height: 150,
                        width: 350,
                        modal: true,
                    });
                    $("#pass_actuals").val('');
                    $("#pass_news").val('');
                    $("#pass_reps").val('');
                }
                setTimeout("$('#content').dialog('close')", 1000);
            });
        }
    });
});
