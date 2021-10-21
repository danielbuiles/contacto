<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

class Email
{
    private $myEmail;
    private $password;
    private $email;

    function __construct($email){
        $this->email = $email;
        $this->myEmail = 'agendawebbuiles@gmail.com';
        $this->password = 'Rafaelsword1?';
        $this->enviarEmail();
    }

    function enviarEmail(){
        $mail = new PHPMailer(true);

        try {
            //configuracion de servidor
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                       
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = $this->myEmail;                    
            $mail->Password   = $this->password;;                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('dbdproyects@dbg.com', 'DBG proyectos');
            $mail->addAddress($this->email);               
            date_default_timezone_set('America/Bogota');

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Protecto recibido';
            $mail->Body    = '<b> Hola me encanta decirte que tu proyecto fue recibido te daremos respuestas lo antes posible a este correo ;D</b>';

            $mail->send();
            echo 'el mensaje a sido enviado';

        } catch (Exception $e) {
            echo "error al enviar mensaje: {$mail->ErrorInfo}";
        }
    }
}

?>