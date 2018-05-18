<?php
//from contact form handler
$errors = '';
$myemail = 'fugasj@seznam.cz';//<-----Put Your email address here.
// $myemail = 'wkidmusic@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['lastname']) ||
   empty($_POST['email']) ||
   empty($_POST['from']) ||
   empty($_POST['to']))
{
    $errors .= "\n Error: Vyplňte, prosím, všechna pole.";
}

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$from = $_POST['from'];
$stayto = $_POST['to'];
$adults = $_POST['adults'];
$kids = $_POST['kids'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Neplatná e-mailová adresa.";
}

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';
// require 'assets/phpmailer/src/OAuth.php';
require 'assets/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.naknizeci.cz';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mailer@naknizeci.cz';                 // SMTP username
    $mail->Password = 'uNlhYBcY';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
      );
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mailer@naknizeci.cz', 'Mailer');
    $mail->addAddress($myemail, 'Me');     // Add a recipient
    $mail->addAddress('wkidmusic@gmail.com');               // Name is optional
    $mail->addReplyTo($email_address);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // To load the CS version
    $mail->setLanguage('cs', 'assets/phpmailer/language');
    $mail->CharSet = 'UTF-8';

    // convert name encoding
    // detect the character encoding of the incoming file
    $encoding = mb_detect_encoding( $lastname, "auto" );

    //Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = 'Zprava od: ' . $name . ' ' . $lastname;
    $mail->Body    = "Nová poptávka ubytování od: ".
  	" \n Jméno: $name \n Příjmení: $lastname \n E-mail: $email_address \n Zpráva: \n $message \n Tel.: $phone \n Datum příjezdu: $from \n Datum odjezdu: $stayto \n Počet dospělých $adults \n Počet dětí: $kids ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
    //redirect to the 'thank you' page
    header('Location: thank-you.html');

?>
<?php require_once "assets/includes/header.php" ?>
<!-- html part -->
<body>
  <!-- This page is displayed only if there is some error -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3>
          <?php
          echo nl2br($errors);
          ?>
        </h3>
      </div>
    </div>
  </div>
</body>
</html>
