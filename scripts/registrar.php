
<?php 
require('head.php');
$head=head();
$footer=footer();
 printf($head);

 ?>
<div class="container">
	<h1>Registrar Estudiante</h1>
	<form action="" method="" id="formregis">
		Nombre:&nbsp;<input type="text" class="form-control" id="txtnombre"><br>
		Direccion:&nbsp;<input type="text" class="form-control" id="txtdireccion"><br>
		Telefono:&nbsp;<input type="text" class="form-control" id="txttelefono"><br>
		Cedula:&nbsp;<input type="text" class="form-control" id="txtcedula"><br>
		Jornada:&nbsp;<input type="text" class="form-control" id="txtjor"><br>
		Programa:&nbsp;<input type="text" class="form-control" id="txtpro"><br>
		<input type="submit" value="Registrar" class="btn btn-success" id="btnregistrar">&nbsp;&nbsp;
		<input type="submit" value="Atras" class="btn btn-info" id="btnregresar">
	</form>
</div>


<?php

printf($footer);

?>