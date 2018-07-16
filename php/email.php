<?php
$errors = '';
$myemail = 'jullien.camille@laposte.net';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
    empty($_POST['firm']) ||
    empty($_POST['email']) ||
    empty($_POST['tel']) ||
    empty($_POST['subject']) ||
    empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$firm = $_POST['firm'];
$phone = $_POST['tel'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = $subject;
$email_body = "Nouveau message du site web :\n".
"Nom : $name\n".
"Entreprise : $firm\n".
"Téléphone : $phone"
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: index.html');
}
?>
