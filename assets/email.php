<?php


$errors = '';
$to = 'oliverobrador@gmail.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: Rellene todos los campos.";
}
 
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']; 
 
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "\n Error: El e-mail és inválido.";
}

 
$full_subject ="Ha rebut un nou missatge de $name. Cuinart.net";
 
$email_body = "La pàgina web de Cuinart ha rebut un missatge de $name a través del formulari de contacte. \n \n".
 
"Aquests són els detalls:\n \n Nom: $name $surname \n \n".
 
"Email: $email\n \n Assumpte: $subject \n \n".
"Missatge: \n \n $message \n \n".

$headers = "De: $email" . "\r\n" .
"Contesta a: $email" . "\r\n" .
'X-Mailer: PHP/' . phpversion();


  require_once('recaptchalib.php');
  
  $privatekey = "6Ldcp-kSAAAAAOMMncWap1oi7UniyL3l3neraodH";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    $sent = mail($to,$full_subject,$email_body,$headers);
    if ($sent){print '<p>Mensaje enviado!</p>';}
}
  

?>