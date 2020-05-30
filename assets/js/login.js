$(document).ready(function () {
	$('#login-admin').on('submit', function (e) {
		var url = $("#url").val();
		e.preventDefault();
		var datos = $(this).serializeArray();
		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			success: function (data) {
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exitoso') {
					Swal.fire(
						'Login correcto',
						'Bienvenid@ ' + resultado.usuario + ' !! ',
						'success'
					)
					setTimeout(function () {
						window.location.href = url + 'c_usuarios/c_menu';
					}, 2000);
				} else {
					Swal.fire(
						'Error',
						'Usuario o Password incorrecto',
						'error'
					)
				}
			}
		});
	});
});