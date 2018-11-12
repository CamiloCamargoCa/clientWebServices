$(document).ready(function(){
	$("#btnbuscar").click(function(){
		var varcedula = $("#txtcedula").val();
		
		$.ajax({
			url:"http://localhost:82/Taller3-master/Vistas/listvisestudiante.php",
			type:"GET",
			data:{cedula:varcedula},
			dataType:"json",
			success:function(datos){
				// console.log(datos);
				$.each(datos,function(indice, persona){
					$("#info").append("<tr><td scope='col'>" +
						persona.est_id + " || " +
						persona.est_nom + " || " +
						persona.est_dir + " || " +
						persona.est_tel + 
						"</td></tr>");
				});
			}
		});
	});
});