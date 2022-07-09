<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '././PHPMailer-master/src/Exception.php';
require '././PHPMailer-master/src/PHPMailer.php';
require '././PHPMailer-master/src/SMTP.php';


class Contact extends Controller {
    
    // public $_emailFrom, 
    //        $_messageFrom,
    //        $_subject,
    //        $_phoneFrom;

    // function __constructor($sbj,$ms,$eml,$ph)
    // {

    //     $this->$_subject = $sbj;
    //     $this->$_messageFrom = $sbj;
    //     $this->$_emailFrom = $sbj;
    //     $this->$_phoneFrom = $sbj;
 
    //    $this->sentEmail( 
    //        $this->$_subject,
    //        $this->$_messageFrom,
    //        $this->$_emailFrom,
    //        $this->$_phoneFrom );
 
    // } 




public static function sentEmail()
{




if($_SERVER["REQUEST_METHOD"] == "POST")
{


      $Message = $_POST["Message"];
      $Name = $_POST["Surname"];
      $Phone = $_POST["Phone"];
      $Email = $_POST["Email"];




        $subject = "Request from " .$Name. " with phone number: ".$Phone. "via contact site";
        $message = $Message;
        // $headers .= "From: ".$Name. " email: ".  $Email = $_POST["Email"];
        // $headers .= "Reply-To: no-reply";
        // $headers .="Content-type: text/html\r\n";
                // mail($to,$subject,$message,$headers);
                // return mail.success();



                //Load Composer's autoloader
           // require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
             // $subject = "mail from site";
        // $message = $Message;
        // $headers .= "From: ".$Name. " email: ".  $Email = $_POST["Email"];
        // $headers .= "Reply-To: no-reply";
        // $headers .="Content-type: text/html\r\n";
                // mail($to,$subject,$message,$headers);
                // return mail.success();



                //Load Composer's autoloader
            // require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

         
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();  
                
                //Send using SMTP

                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                    );


                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'viktor.frroku.test@gmail.com';                     //SMTP username
                $mail->Password   = '@Botanischergarten222';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($Email, 'Mailer');
                $mail->addAddress('viktor.frroku.test@gmail.com', 'Team dental magic');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                // $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();

                // if(!$mail->send())
                // {
                //     return false;
                // }
                // else {
                //     return true;
                    
                // };
           
  
        
            }
        }
}