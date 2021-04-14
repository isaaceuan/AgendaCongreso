<!-- <?php
include("class/clyusdgdfdfggdfgfgfases.php");
//Recibimos el id_nota
$id_nota = $_GET["folio"];
$resumen = new Miembros();
$array_datos = $resumen->resumenCuenta($id_nota);
foreach($array_datos as $valor){
    $nombre = $valor["nombres"];
    $apellido_paterno = $valor["apellido_paterno"];
    $apellido_materno = $valor["apellido_materno"];
    // $plan = $valor["plan"];
    $categoria = $valor["categoria"];
    $total = $valor["total"];
    $id_nota= $valor["id_nota"];
    $pagado = $valor["pagado"];
}
// if($plan == "A"){
//     $plan = "Plan Anual";
// }
// elseif ($plan == "M") {
//     $plan = "Plan Mensual";
// }
?> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Orden de Compra</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
 <body style="margin-top: 50px; padding: 0;">
 <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
 <tr style="padding-top:20px;">
     <td style="border-top:15px solid #192b84; text-align:center; border-bottom: 1px solid #ececec; padding-top:10px; padding-bottom:10px;">
        <img src="https://anpr.org.mx/miembros/img/logos_conexion.png" align="center" height="100px" style="margin-top: 10px; margin-bottom: 10px;">
     </td>
 </tr>
 <tr>
    <td>
        <h2 style="text-align:center; font-family: Arial, sans-serif;">ORDEN DE REGISTRO / COMPRA <?php echo "(".$id_nota.")"; ?></h2>
        <p style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Estimad@: <?php echo $nombre; ?></p>
        <p style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Tu registro se ha completado.  La orden de compra se ejecutará al terminar tu prueba de 7 días sin costo. <strong>Recuerda que puedes suspender tu membresía dentro de la plataforma al momento que lo decidas.</strong>
        </p>
    </td>
 </tr>
 <tr>
    <td style="padding: 10px 30px 30px 30px;">
    <table border="1" cellpadding="0" cellspacing="0" width="100%" >
         <tr style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
             <td style="padding-left: 10px;">
                 <b> Descripción</b>
             </td>
             <td style="text-align:center;">
                 <b> Costo</b>
             </td>
         </tr >
         <tr style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
             <td style="padding-left: 10px;">
              <p> Membresía <?php echo $categoria; ?> </p>
             </td>
             <td style="text-align:center">
             <?php echo "$".$total.".00 MXN";?>
             </td>
         </tr>
     </table>
     <p style="font-family: Arial, sans-serif; font-size: 16px; line-height: 16px;">*Precio expresado en pesos mexicanos al tipo de cambio del día de la operación.</p>
    </td>
 </tr>
 <tr>
    <td style="background-color:#192b84; text-align:center; padding: 10px;">
        <h3 class="text-center" style="color: white; font-weight: bold; font-family: Arial, sans-serif;"></h3>
        
        <?php 
        //mostrar solamente si el pago no se a realizado
        if($pagado == "SI"){
            echo '
            <p style="color: white;">Tu experiencia como miembro de la ANPR está por comenzar.<br>
            Sigue las instrucciones de los correos que a continuación te llegarán.</p>
            ';
        }
        else{
            echo '
            <p  style="color: white; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Tu experiencia como miembro de la ANPR está por comenzar.<br>
            Sigue las instrucciones de los correos que a continuación te llegarán. </p>                                                         
            ';
        }
        ?>
        
    </td>
 </tr>
 <tr>
     <td >
     <br><p style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Gracias por formar parte de la comunidad en línea de profesionales en parques y recreación de América Latina.
</p>
     <p class="text-center" style="font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;"><b>Atentamente:</b> <br>                                                                
     Luis Romahn & Equipo ANPR
    </p>
     </td>
 </tr>
 <tr style="background-color:#192b84; text-align:center;">
     <td >
     <p class="text-center" style="font-size:14px; color: white; font-weight: bold;">                                                               
        <a href="https//anpr.org.mx"  style="font-size:14px; color: white; font-weight: bold;">www.anpr.org.mx</a> |
        info@anpr.org.mx |
        (52) 99-99-44-40-60
     </p>                         
     </td>
 </tr>
</table>
 </body>
</html>