<?php

namespace App\Controllers\Http;

use App\Http\Requests\Request;
use App\Http\Responses\Interfaces\IResponse;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class FirstFormController
{

    public function get(Request $request, IResponse $response)
    {

        $response->data['htmlBodyMain'] =
            "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>"
            . "<div><label> Name: <input type='text' name = 'name' value='keeper'></label></div>"
            . "<div><label> Email: <input type='text' name = 'email' value='keeper@ninydev.com'></label></div>"
            . "<input type='submit'>"
            . "</form>";

    }

    public function post(Request $request, IResponse $response) {
        $response->data['htmlBodyMain'] = "<div> \n\n Все хорошо \n\n </div>";
    }

    public function put(Request $request, IResponse $response) {

        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $_ENV['MAIL_SERVER'];                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $_ENV['MAIL_USER'];                     //SMTP username
            $mail->Password   = $_ENV['MAIL_PASSWORD'];                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['APP_NAME']);
            $mail->addAddress($request->input('email'), $request->input('name'));     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hello new user';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }




        $response->data['data'] = [
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ];
    }

}