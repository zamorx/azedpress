<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

//Server settings
$mail->SMTPDebug = 0;                                       //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.office365.com';                   //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'noreply@azedpress.com';                //SMTP username
$mail->Password   = '';                 //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $correo = $alm->email;
    $nombre = $alm->name;

    //Recipients

    $mail->setFrom('noreply@azedpress.com', 'Azedpress.com');
    $mail->addAddress($correo, $nombre);     //Add a recipient


    //Content

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tracking #AZ'.$alm->trackingid.' ha llegado';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                font-size: medium;
                margin: 0 !important;
                padding: 0;
                background-color: #fff;
            }
    
            .logo {
                display: block;
                height: auto;
                margin: 40px 25px 15px;
            }
    
            .main {
                background-color: #fff;
                border-top: 5px solid #3c3c3b;
                display: block;
                /* font-size: medium; */
                color: #555;
                margin: 0 25px;
                padding: 15px;
                -webkit-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
                box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
            }
    
            .content {
                display: block;
                /* font-style: normal; */
                /* font-stretch: normal; */
                /* height: auto; */
                padding: 10px;
            }
    
            .footer {
                color: #3c3c3b;
                /* font-size: small; */
                display: block;
                margin: 0 25px;
                padding: 15px 15px 0;
            }
    
            @media (min-width: 576px) {
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7 !important;
                }
            }
    
            @media (min-width: 768px) {
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7 !important;
                }
            }
    
            @media (min-width: 992px) {
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7 !important;
                }
            }
    
            @media (min-width: 1200px) {
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7 !important;
                }
            }
    
            @media (min-width: 1400px) {
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #f7f7f7 !important;
                }
            }
    
            #azedpress-logo {
                height: 50px;
            }
    
            @media (prefers-color-scheme: dark) {
    
                body {
                    margin: 0;
                    padding: 0;
                    background-color: #282a2d !important;
                }
    
                .main {
                    background-color: #282a2d !important;
                    border-top: 5px solid #fff;
                    display: block;
                    color: #fff;
                    margin: 0 25px;
                    padding: 15px;
                }
    
                .footer {
                    color: #fff;
                    display: block;
                    margin: 0 25px;
                    padding: 15px 15px 0;
                }
            }
        </style>
    </head>
    
    <body>
        <div class="logo">
            <img id="azedpress-logo" src="https://www.azedpress.com/dashboard/assets/img/logo-light.png"
                alt="Azedpress.com" />
        </div>
        <div class="main">
            <div class="content">
                Hola <strong>'.$nombre.'!</strong></br></br>Tu paquete <strong>'.$alm->description.'</strong> ha llegado y
                está listo para ser entregado.</br></br>
                Tipo de Servicio: <strong>'.$alm->servicename.'</strong>
                </br>Peso: <strong>'.$alm->weight.' lb</strong>
            </div>
        </div>
        <div class="footer">
            <div class="noreply">Este mensaje ha sido enviado desde una dirección de correo electrónico que no puede recibir
                mensajes. Por favor, no responda a este.</div>
            <div class="copy">
                <p>Copyright © 2023 Azedpress.com. Todos los derechos reservados.
                    </br>24 Avenida Suroeste, Managua, Nicaragua 13011.</p>
            </div>
        </div>
    </body>
    
    </html>';

    


    $mail->send();
    echo '';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="?c=Users">Trackings</a></li>
            <li class="breadcrumb-item active">Notificación</li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header>
            <h1 class="h3 display"> </h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4></h4>
                    </div>
                    <div class="card-body">
                    <p>Mensaje enviado correctamente, el cliente <?php echo $nombre?> ha sido notificado.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>