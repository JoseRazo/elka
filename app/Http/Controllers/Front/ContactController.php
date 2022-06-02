<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactRequest;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;
use Session;

class ContactController extends Controller
{
    public function contact() {
        return view('front.contact.index');
    }

    public function postContact(ContactRequest $request) {
        
        // Valores enviados desde el formulario
        if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"]) ) {
            die ("Es necesario completar todos los datos del formulario");
        }

        $nombre = $_POST["name"];

        $email = $_POST["email"];

        $asunto = $_POST["subject"];

        $mensaje = $_POST["message"];


        $destinatario = "rsaralegui@elkaservices.com";


        // Datos de la cuenta de correo utilizada para enviar v�a SMTP
        $smtpHost = "elkaservices.com";  // Dominio alternativo brindado en el email de alta 
        $smtpUsuario = "webmaster@elkaservices.com";  // Mi cuenta de correo
        $smtpClave = "++Qwerty2020**";  // Mi contrase�a

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587; 
        $mail->IsHTML(true); 
        $mail->CharSet = "utf-8";

        // VALORES A MODIFICAR //
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;


        $mail->From = $email; // Email desde donde envio el correo.
        $mail->FromName = $nombre;
        $mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

        $mail->Subject = "Formulario de Contacto Elka.services"; // Este es el titulo del email.
        $mensajeHtml = nl2br($mensaje);
        $mail->Body = "
        <html> 

        <body> 
        <div style='background-color: #f8f9fa !important; padding: 2rem;'>

        <div style='color: #fff !important; background-color: #28ABE3 !important; border-color: #580b1c !important; padding: 0.1rem; text-align: center;'>
            <h1>Contacto Elka.services</h1>
        </div>

        <p>Mensaje enviado desde el formulario de contacto de elkaservices.com</p>

        <p><strong>Nombre:</strong> {$nombre}</p>

        <p><strong>Email:</strong> {$email}</p>

        <p><strong>Asunto:</strong> {$asunto}</p>

        <p><strong>Mensaje:</strong> {$mensaje}</p>

        <a href='http://elkaservices.com/' target='_blank'>
        <img src='http://elkaservices.com/images/logo-elka-services-color.png' alt='Funeraria Garcidueñas' style='width: 250px; margin-top: 2rem; margin-left: auto !important; margin-right: auto !important; display: block !important;'>
        </a>
        </div>
        </body> 

        </html>

        <br />"; // Texto del email en formato HTML
        $mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
        // FIN - VALORES A MODIFICAR //

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $notification = array(
            'message' => '¡Mensaje enviado con éxito! Espere nuestra respuesta.',
            'alert-type' => 'success'
        );

        $error = array(
            'message' => '¡Error al enviar el mensaje!',
            'alert-type' => 'error'
        );

        $estadoEnvio = $mail->Send(); 
        if($estadoEnvio){
            return redirect()->route('contact')->with($notification);

        } else {
            return redirect()->route('contact')->with($error);
        }

    }
}