<?php 
function head(){
    $head ='
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FORMULARIO ESTUDIANTE</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap-4.0.0/dist/css/bootstrap.min.css" />
        <script src="../bootstrap-4.0.0/dist/js/jquery-1.11.3.min.js"></script>
        <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
        <script src="../js/buscar_alumno.js" type="text/javascript"></script> 
        <script src="../js/registrar_alumno.js" type="text/javascript"></script>
        <script src="../js/buscar_programa.js" type="text/javascript"></script>
        <script src="../js/vlogin.js" type="text/javascript"></script>
    <style type="text/css" media="screen">
        td{border:1px solid white;}
        tr{border:1px solid white;}
    </style>
    </head>';
    return $head;
}

function footer(){
    $footer ='
    <body> 
    </body>
    </html>
    ';
}
?>

