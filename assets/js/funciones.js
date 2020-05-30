$(document).ready(function () {
    var url = $("#elurl").val();
    $(".datos_d_quien").on('click', function () {
        var id = $(this).attr('id');
        $("#eliminar").val(id);
    });
});


function delete_quien() {
    $("#eliminar1").modal("hide");
    var id = $("#eliminar").val();
    var url = $("#elurl").val();
    $.post(url + "c_quien/delete_quien", {
        el_id: id
    }, function (data, status) {
        $("<div>Registro Eliminado !!!!</div>").dialog({
            resizable: false,
            title: 'Registro',
            height: 150,
            width: 350,
            modal: true
        });

        setTimeout(function () {
            window.location.href = url + 'c_quien_presenta/vista_quien/3';
        }, 150);
    });
}
