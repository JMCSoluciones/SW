<?php
    use Exception as GlobalException;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
   
    require 'email/phpmailer/src/PHPMailer.php';
    require 'email/phpmailer/src/SMTP.php';
    require 'email/phpmailer/src/Exception.php';
    include 'model/conexion.php';
    include 'validaciones.php';

    if(!isset($_POST['oculto'])){
        exit();
    }
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

//Obtención de datos POST
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$empresa = $_POST['nombre_empresa'];
$mensaje = $_POST['mensaje'];
$status = "pendiente";
$fecha = date("Y/m/d");
//Validación de caracteres especiales
$nombreisvalid = sinCespeciales($nombre) ? 'valid' : 'invalid';
$telefonoisvalid = sinCespeciales($telefono) ? 'valid' : 'invalid';
$empresaisvalid = sinCespeciales($empresa) ? 'valid' : 'invalid';
$mensajeisvalid = sinCespecialesM($mensaje) ? 'valid' : 'invalid';
if($nombreisvalid == 'invalid'){
    echo "Error : el campo nombre no puede contener caracteres especiales";
    exit();
}
if($telefonoisvalid == 'invalid'){
    echo "Error : el campo teléfono no puede contener caracteres especiales";
    exit();
}
if($empresaisvalid == 'invalid'){
    echo "Error : el campo empresa no puede contener caracteres especiales";
    exit();
}
if($mensajeisvalid == 'invalid'){
    echo "Error : el campo mensaje no puede contener caracteres especiales";
    exit();
}

//Validación campo NOMBRE
sinNumeros($nombre,"Nombre");
sinEspacios($nombre,"Nombre");
noVacio($nombre,"Nombre");
dosEspacios($nombre,"Nombre");
digitosNombre($nombre,"Nombre");

// Validación campo TELÉFONO
sinEspacios($telefono,"Teléfono");
noVacio($telefono,"Teléfono");
dosEspacios($telefono,"Teléfono");
digitosTelefono($telefono,"Teléfono");
soloNumeros($telefono,"Teléfono");

// //Validación campo EMPRESA
sinEspacios($empresa,"Empresa");
dosEspacios($empresa,"Empresa");
digitosEmpresa($empresa,"Empresa");

// //Validación campo MENSAJE
digitosMensaje($mensaje,"Mensaje");



$sentencia = $bd->prepare("INSERT INTO solicitudes_cotizacion(fecha,nombre_cl,telefono,email,empresa,mensaje,estatus) VALUES (?,?,?,?,?,?,?);");
$resultado = $sentencia->execute([$fecha,trim($nombre),trim($telefono),trim($email),trim($empresa),trim($mensaje),$status]);

    if($resultado === TRUE){
     
    //Envío de Email
    $id_generado = $bd->lastInsertId();
    $mail = new PHPMailer(true);
    try{
            //$mail ->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail ->isSMTP();
            $mail ->Host = 'mail.sterowania.com.mx';
            $mail ->SMTPAuth = true;
            $mail ->Username = 'avisos@sterowania.com.mx';
            $mail ->Password = ';hH&9oA=#&e+';
            $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail ->Port = 587;
            $mail -> CharSet = 'UTF-8';
            $mail->addCustomHeader('Content-Type: text/html; charset=UTF-8');
            $mail->setFrom('avisos@sterowania.com.mx','STEROWANIA'); 
            $mail->addAddress($email, $nombre);
            $mail->addCC('avisos@sterowania.com.mx');
            $mail->isHTML(true);
            $mail->Subject = 'Solicitud de cotización STEROWANIA';
            $mail->Body = '<div style="font-family: "Raleway", sans-serif; width: 800px; margin: 20px auto;">
                                <div style="background-color: #000000; color: #ffffff; border-radius:10px; padding: 10px;">
                                    <h1 style="text-align: center; border-bottom: 2px solid #f7b102; padding: 5px 20px;">Se ha registrado su solicitud de cotización</h1>
                                    <p style="text-align: right;"><strong> Solicitud de cotización: </strong>'. $id_generado . '</p>
                                    <p style="text-align: right;"><strong>Fecha: </strong>'. $fecha . '</p> 
                                </div>
                                <h2 style="border-bottom: 1px solid #000000">Información </h2>
                                <p> <strong>Nombre: </strong>'. $nombre . '</p>
                                <p><strong> Teléfono del cliente: </strong>'. $telefono . '</p>
                                <p><strong> Email del cliente: </strong>'. $email . '</p>
                                <p> <strong>Mensaje: </strong>'. $mensaje . '</p> 
                            
                            </div>
                        ';
            $mail->send();
        
            echo "Operación exitosa: se ha enviado la solicitud a nuestros agentes de ventas, nos pondremos en contacto lo antes posible. Gracias";
            exit();

    }catch(GlobalException $e){
        echo 'Error: ' . $mail->ErrorInfo;
    }                        
}else{
    echo "Error: Ocurrio un error al envíar la solicitud. Favor de reintentar más tarde.";
    exit();
    }   
?>