<?php 
require('head.php');
$head= head();
printf($head);
echo "<div class='row justify-content-center'>
      <div class='col-11 col-sm-8 col-md-6 col-lg-4'>
        <div class='card card-signin my-5'>
          <div class='card-body'>
            <h5 class='card-title text-center'>INGRESO PLATAFORMA ESTUDAINTES</h5>
            <form class='form-signin' method='post' id='formulario'>
              <div class='form-label-group'>
                <input type='text' id='nombre' class='form-control' placeholder='Email address' name='email' required>
                <label for='email'>Email address</label>
              </div>

              <div class='form-label-group'>
                <input type='password' id='pwd' class='form-control' placeholder='Password' name='pswd' required>
                <label for='pwd'>Password</label>
              </div>

              <input type='button' id='env' class='btn btn-primary' value='ACCEDER' onclick='javascript:validar();'>              
              <hr class='my-4'>
              <a href='#'>Registrate</a>
            </form>
          </div>
        </div>
      </div>
    </div>";

$footer= footer();
printf($footer);
?>
