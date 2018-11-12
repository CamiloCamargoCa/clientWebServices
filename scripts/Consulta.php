<?php 
require('head.php');
$head=head();
$footer=footer();
 printf($head);
echo "
<div class='container-fluid'>
    <div class='row justify-content-center'>
        <div class='col-12 col-sm-6 col-md-6 col-lg-4'>
            <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='../img/estudiante.jpg' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>Consulta Estudiantes</h5>
                    <p class='card-text'>Ingrese para buscar los datos del estudiante.</p>
                </div>
                <th scope='row'>
                <button type='button' class='btn btn-outline-secondary'  data-toggle='modal' data-target='#m1'>Ingresar</button>
                    <div class='modal'  id='m1'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title'>Ingrese La cedula del estudiante</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>

                                <div class='modal-body'>
                                        <form>
                                        <fieldset>
                                            <div class='form-group'>
                                                <label for='exampleInputEmail1'>Codigo</label>
                                                <input type='text' class='form-control' id='txtcedula' aria-describedby='emailHelp' placeholder='Ingrese Codigo' name='c' required>
                                            </div>
                                            <input type='button' class='btn btn-primary' value='Ingresar' name='env' id='btnbuscar'>
                                            
                                        </fieldset>
                                        </form>
                                        <table class='table table-dark' id='info'></table>
                                </div>

                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 </th>   
             </div>
        </div>     
         ";

echo"
    <div class='col-12 col-sm-6 col-md-6 col-lg-4'>
        <div class='card'>
            <img class='card-img-top' style='width: 19rem;' src='../img/programa.jpg' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>Consulta Programas Academicos</h5>
                <p class='card-text'>Ingrese para buscar los  estudiantes ingresados en un programa .</p>
            </div>
            <th scope='row'>
                <button type='button' class='btn btn-outline-secondary'  data-toggle='modal' data-target='#pro'>Ingresar</button>
                <div class='modal'  id='pro'>
                    <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title'>Ingrese el codigo del programa</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>

                            <div class='modal-body'>
                                    <form>
                                    <fieldset>
                                        <div class='form-group'>
                                            <label for='exampleInputEmail1'>Codigo</label>
                                            <input type='text' class='form-control' id='txtprograma' aria-describedby='emailHelp' placeholder='Ingrese Codigo' name='c' required>
                                        </div>
                                        <input type='button' class='btn btn-primary' value='Ingresar' name='env' id='btnbuscarpro'>
                                        
                                    </fieldset>
                                    </form>
                                    <table class='table table-dark' id='inf'></table>
                            </div>

                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </th>   
        </div>
    </div>
</div>
</div>
<br>
<br>
<div class='row justify-content-center'>

    <a href='registrar.php' class='btn btn-info'>Registrar Nuevo Estudiante</a>
</div>

";

        printf($footer);
?>