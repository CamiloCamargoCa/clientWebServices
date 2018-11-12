$(document).ready(function(){
	$("#btnbuscarpro").click(function(){
		var varprograma = $("#txtprograma").val();
		$.ajax({
            url:"http://localhost:82/Taller3-master/Vistas/listviprograma.php",
			type:"GET",
			data:{programa:varprograma},
			dataType:"json",
			success:function(datos){
				 console.log(datos);
				$.each(datos,function(indice, pro){
					$("#inf").append("<tr><td scope='col'>" +
                        pro.est_id + " || " +
						pro.est_nom + " || " +
						pro.est_dir + " || " +
						pro.pro_nom + 
						"</td></tr>");
				});
			}
		});
	});
});