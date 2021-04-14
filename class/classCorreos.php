<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <title>Document</title>
</head>
<body>
<?php
require('conexion.php');
require('phpmailer/src/PHPMailer.php');
require('phpmailer/src/Exception.php');
require('phpmailer/src/SMTP.php');

$email = $_GET["correo"];



class Correos extends Conexion{

    public function __construct(){
      parent::__construct();
    }

 
    public function invitarAmigo($email,$nombre){

      $mail = new PHPMailer\PHPMailer\PHPMailer();
              $mail->CharSet = 'UTF-8';
            //Luego tenemos que iniciar la validación por SMTP:
            $mail->SMTPDebug = 0 ;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
              $mail->Username = "admon@anpr.org.mx"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
              $mail->Password = "admon2018*"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
              $mail->Port = 587;  // Puerto de conexión al servidor de envio.
            $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
            //cambiar por contenido@congreso@congresoparques.com
            $mail->setFrom("admon@anpr.org.mx"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
            $mail->FromName = $nombre." "."te esta invitando a unirte"; //A RELLENAR Nombre a mostrar del remitente.
            $mail->addAddress($email); // Esta es la dirección a donde enviamos
            //Se envía copia oculta a vinculación
            // $mail->addBCC('vinculacion@anpr.org.mx'); 

            $mail->IsHTML(true); // El correo se envía como HTML
            $mail->Subject = "Invitacion"; // Este es el titulo del email.
           // $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
           $body = ("Te invitamos que te unas a ANPR");  //Funciona
            // $body .= "Aquí continuamos el mensaje";
           $mail->Body = $body;
            // Mensaje a enviar.
            $exito = $mail->Send(); // Envía el correo.
              // if($exito){ echo 'El correo fue enviado correctamente.'; }else{ echo 'Hubo un problema. Contacta a un administrador.'; }

              if($exito) {
                echo '<script>
                  Swal.fire({ title: "Invitacion enviada!",
                      text: "Tu invitacion se envio de manera exitosa",
                      icon: "success",customClass: "swal-wide",}).then(okay => {
                        if (okay) {
                         window.location.href = "index.php";
                       }
                     });
                
              </script>';
              }else{
                echo '<script>
                  Swal.fire({ title: "Mensaje enviado!",
                      text: "Ocurrio un error y no pudimos enviar tu invitacion",
                      icon: "error",customClass: "swal-wide",}).then(okay => {
                        if (okay) {
                         window.location.href = "index.php";
                       }
                     });
                
              </script>';
              }

            
              

  }



    

}


$correo = new Correos;
$ejecutarEnvio = $correo->invitarAmigo($email,'Antonio');






?>
  
</body>
</html>


