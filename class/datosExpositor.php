<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
include("clases.php");
$formulario = new Expositor();

$nombre = $_POST["nombre_emp"];
$representante = $_POST["rep"];
$correo_exp = $_POST["correo_exp"];



$nuevoRegistro = $formulario->guardarDatosExpositor($nombre,$representante,$correo_exp);


if($nuevoRegistro = true){
    echo '<script>
                  Swal.fire({ title: "Registro completo",
                      text: "Tu registro se ha guardado con éxito, Muchas gracias",
                      icon: "success",customClass: "swal-wide",}).then(okay => {
                        if (okay) {
                         window.location.href = "../form.php";
                       }
                     });
                
              </script>';
}


?>