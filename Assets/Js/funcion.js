function Reg(e){
    e.preventDefault();
    const Nombre = document.getElementById("NombreComplero");
    const Apellido = document.getElementById("Apellidos");
   ;
    const Usuario = document.getElementById("Usuario");
    const pass = document.getElementById("Pass");
  
    if (Nombre.value == "" || Apellido.value == "" ||  Usuario.vale == "" || pass.value == "" ) {
        Swal.fire({
            title: "Mensaje",
            text: "Todos los campos con obligatorios",
            icon: "error",
            
        })
        .then((value) => {
                    formul.reset();
                });
        
    }else{
        
        Swal.fire({
            title: "Mesaje",
            text: "Se registro con exito",
            icon: "success",
            
        })
        .then((value) => {
                    window.location="http://localhost/pagweb/index.php"; 
                });
    }
    
}

function entrar(e){
    e.preventDefault();
    const Usuario = document.getElementById("Usuario");
    const Pass = document.getElementById("pass");
    
    if (Usuario.value == "Barbara" && Pass.value == "Zambrana") {

            window.location="http://localhost/pagweb/Principal.php";  

    }else{
       Swal.fire({
            title: "Mensaje",
            text: "El usuario y/o contraseña son incorrectos vuelva a intentarlo",
            icon: "error",
            
        })
        .then((value) => {
                    formul.reset();
                });
    }
    
}
function salir(e){
    e.preventDefault();
    window.location="http://localhost/pagweb/index.php";
}


