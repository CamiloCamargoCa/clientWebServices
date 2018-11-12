$(document).ready(function(){
	$("#btnregistrar").click(function(){
		var varCedula = $("#txtcedula").val();
		var varNombre = $("#txtnombre").val();
		var varDireccion = $("#txtdireccion").val();
		var varTelefono = $("#txttelefono").val();
		var varJornada = $("#txtjor").val();
		var varPrograma = $("#txtpro").val();

		var parametros = {
			'cedula':varCedula,
			'nombre':varNombre,
			'direccion':varDireccion,
			'telefono':varTelefono,
			'idjor':varJornada,
			'idpro':varPrograma
		};

		$.ajax({
			url:"http://localhost:82/Taller3-master/Vistas/insertviestudiante.php",
			type:"POST",
			data:parametros,
			dataType:"json",
			success:function(dato){
				// $("#info").text(dato);
				alert('Alumno Registrado Con Exito'+dato);
				console.log(dato);
				self.location.href ='Consulta.php';
				return false;		
			},
			error:function(dato){
				alert('Alumno registrado'+dato);
				console.log(dato);
				self.location.href ='Consulta.php';
				return false;
			}
		});
	});

	$("#btnregresar").click(function(){
		alert('regresando');
		self.location.href ='Consulta.php';
		return false;
	});
});
