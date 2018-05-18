<?php
$errors = '';
$myemail = 'wkidmusic@gmail.com';//<-----Put Your email address here.
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

if( empty($errors))
{
	$to = $myemail;
	$email_subject = "Zpráva od: $lastname";
	$email_body = "Doručena nová zpráva od: ".
	" \n Jméno: $name \n Příjmení: $lastname \n E-mail: $email_address \n Zpráva: \n $message \n Tel.: $phone \n Datum příjezdu: $from \n Datum odjezdu: $stayto \n Počet dospělých $adults \n Počet dětí: $kids ";

	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email_address" . "\r\n";
  // $headers .= "Cc: patrik.cepr@gmail.com" . "\r\n";

	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
}
?>
<!DOCTYPE html>
<html  lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurace a penzion Na Knížecí</title>
  <link rel="stylesheet" href="assets/css/naknizeci.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
</head>
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
