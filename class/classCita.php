
<?php
require('phpmailer/src/PHPMailer.php');
require('phpmailer/src/Exception.php');
require('phpmailer/src/SMTP.php');



class Agenda extends Conexion{



    // public $expositor = "";
    public function __construct(){
      parent::__construct();
  }



  public function getNombre(){
    $sql = "SELECT * FROM expositor WHERE id_expositor ";
    $consulta = $this->conexion_db->query($sql);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
    return $resultado;
  }


  public function getFecha(){
    $sql = "SELECT fecha_inicio, fecha_fin FROM evento";
    $consulta = $this->conexion_db->query($sql);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
    return $resultado;


}




public function guardarCita($nombre,$telefono,$email,$organizacion,$id_expo, $fecha) {

// $this->$expositor = $id_expo;

    $sql = "INSERT INTO usuario VALUES(null, '$nombre','$telefono','$email','$organizacion')";
    $registrar_miembro = $this->conexion_db->query($sql);


    
    $fechas = $this->getId();
    foreach ($fechas as $id_user) {
        $id_usuario = $id_user['id_usuario'];
    }

    if($registrar_miembro = true){
        

     $sql3 = "INSERT INTO citas VALUES(null, '$id_expo','$fecha','$id_usuario')";
     $registrar_fecha = $this->conexion_db->query($sql3);
    }else{
        echo '<script>
    setTimeout(function(){ 
    alert("Hubo un error intentalo de nuevo");
    window.location.href = "../index.php";
    }, 2000);
    </script>';
  

    }
    
}


public function getId(){
    $sql2 = "SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1 ";
    $consulta = $this->conexion_db->query($sql2);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
    return $resultado;
}





public function sendCorrreoUsuario($nombre,$email,$fecha,$id_expo){

    $sql3 = "SELECT * FROM expositor WHERE id_expositor = $id_expo";
    $consulta = $this->conexion_db->query($sql3);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
       
    foreach ($resultado as $exp) {
        $nom_exp = $exp['nombre_expositor'];
    }




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
    $mail->FromName = $nombre." "."Gracias por llenar el formulario"; //A RELLENAR Nombre a mostrar del remitente.
    $mail->addAddress($email); // Esta es la dirección a donde enviamos
    //Se envía copia oculta a vinculación
    // $mail->addBCC('vinculacion@anpr.org.mx'); 

    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "Invitacion"; // Este es el titulo del email.
    // $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
    $body = ("en estos dias"." ".$nom_exp." "."se pondra en contacto contigo, has escogido la fecha"." ".$fecha );  //Funciona
    // $body .= "Aquí continuamos el mensaje";
    $mail->Body = $body;
    // Mensaje a enviar.
    $exito = $mail->Send(); // Envía el correo.
    // if($exito){ echo 'El correo fue enviado correctamente.'; }else{ echo 'Hubo un problema. Contacta a un administrador.'; }


}

public function correoExpo($nombre,$telefono,$email,$organizacion,$fecha,$id_expo) {


    $sql3 = "SELECT * FROM expositor WHERE id_expositor = $id_expo";
    $consulta = $this->conexion_db->query($sql3);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

    foreach ($resultado as $exp) {
        $email_expo = $exp['email'];
    }

    
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
    $mail->FromName = $nombre." "."Cita agendada"; //A RELLENAR Nombre a mostrar del remitente.
    $mail->addAddress($email_expo); // Esta es la dirección a donde enviamos
    //Se envía copia oculta a vinculación
    // $mail->addBCC('vinculacion@anpr.org.mx'); 

    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "Cita"; // Este es el titulo del email.
    // $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
    $body = ($nombre." "."quiere reservar el dia:"." ".$fecha." "."y su telefono y correo son"." ".$telefono."  ".$email." "."y es de la organizacion"." ".$organizacion." "."ponte en contacto con el para definir la hora disponible" );  //Funciona
    // $body .= "Aquí continuamos el mensaje";
    $mail->Body = $body;
    // Mensaje a enviar.
    $exito = $mail->Send(); // Envía el correo.
    // if($exito){ echo 'El correo fue enviado correctamente.'; }else{ echo 'Hubo un problema. Contacta a un administrador.'; }



}


}

