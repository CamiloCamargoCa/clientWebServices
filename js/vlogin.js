function validar(){
    var nombre = document.getElementById('nombre').value;
    var password = document.getElementById('pwd').value;
    //alert(nombre+" "+password);
    if(nombre=='admin' && password=='uniminuto'){
        alert("BIENVENIDO"+nombre);
        location.href="./Consulta.php";
        return false;
    }
    else{
        alert("Error al ingresar con usuario y contraseña");
    }
}


