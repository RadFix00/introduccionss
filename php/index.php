<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "inicio";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); 

    if(isset($_POST['enviar'])) {
       
        $nombre= $_POST ['nombre'];
        $clave= $_POST ['clave'];

        if($nombre === "Admin" && $clave === "1234") {
            // Redireccionar a otra página si los datos son correctos
            header("Location: index.html");
            exit; // Asegura que el script se detenga después de redireccionar
        } 
        else {
            header("Location: registrarse.html");
            exit; 
        }
   }
?>





