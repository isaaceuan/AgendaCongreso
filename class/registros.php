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

$formulario = new Agenda();


$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$organizacion = $_POST["organizacion"];
$fecha = $_POST['fecha'];
$id_expo = $_POST["id_expo"];
// $fecha = mysqli_real_escape_string($_POST['fecha']);

$nuevoRegistro = $formulario->guardarCita($nombre,$telefono,$email,$organizacion,$id_expo,$fecha);
 $mail1 = $formulario ->sendCorrreoUsuario($nombre,$email,$fecha,$id_expo);
 $mail2 = $formulario ->correoExpo($nombre,$telefono,$email,$organizacion,$fecha,$id_expo);

if($nuevoRegistro = true){
    echo '<script>
                  Swal.fire({ title: "Registro completo",
                      text: "Tu registro se ha guardado con éxito, el expositor se pondra en contacto antes del evento.",
                      icon: "success",customClass: "swal-wide",}).then(okay => {
                        if (okay) {
                         window.location.href = "../index.php";
                       }
                     });
                
              </script>';
}

?>