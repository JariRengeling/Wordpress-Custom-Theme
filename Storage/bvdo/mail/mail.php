<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'offerteBVDO');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// require_once 'PHPMailer/class.php';
require_once 'PHPMailer/PHPMailerAutoload.php';

if(isset($_POST['send']))
{
// Fetching data that is entered by the user
$emailaccount = "jarirengelingprive@gmail.com";
$password = "Kaasje123";
$to_id = $_POST['toid'];

$type = str_replace("_", " ", $_POST['typeSelect']);
$breedte = str_replace("_", " ", $_POST['inputBreedte']);
$diepte = str_replace("_", " ", $_POST['inputDiepte']);
$color = str_replace("_", " ", $_POST['colorSelect']);
$dakbedekking = str_replace("_", " ", $_POST['dakbedekkingSelect']);
$zonwering = str_replace("_", " ", $_POST['zonweringSelect']);
$montage = str_replace("_", " ", $_POST['montageSelect']);
$wanneer = str_replace("_", " ", $_POST['wanneerSelect']);
$vraag = strip_tags($_POST['inputVraag']);
$naam = strip_tags($_POST['inputNaam']);
$adres = strip_tags($_POST['inputAdres']);
$postcode = strip_tags($_POST['inputPostcode']);
$woonplaats = strip_tags($_POST['inputWoonplaats']);
$telefoonnummer = strip_tags($_POST['inputTelefoonnummer']);
$email = strip_tags($_POST['inputEmail']);
    
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: black; color: white;'><td><strong>Offerteaanvraag</strong> </td><td></td></tr>";
$message .= "<tr><td><strong>Type:</strong> </td><td>" . str_replace("_", " ", $_POST['typeSelect']) . "</td></tr>";
$message .= "<tr><td><strong>Breedte:</strong> </td><td>" . str_replace("_", " ", $_POST['inputBreedte']) . " mm</td></tr>";
$message .= "<tr><td><strong>Diepte:</strong> </td><td>" . str_replace("_", " ", $_POST['inputDiepte']) . " mm</td></tr>";
$message .= "<tr><td><strong>Kleurstelling:</strong> </td><td>" . str_replace("_", " ", $_POST['colorSelect']) . "</td></tr>";
$message .= "<tr><td><strong>Dakbedekking:</strong> </td><td>" . str_replace("_", " ", $_POST['dakbedekkingSelect']) . "</td></tr>";
$message .= "<tr><td><strong>Zonwering:</strong> </td><td>" . str_replace("_", " ", $_POST['zonweringSelect']) . "</td></tr>";
$message .= "<tr><td><strong>Montage:</strong> </td><td>" . str_replace("_", " ", $_POST['montageSelect']) . "</td></tr>";
$message .= "<tr><td><strong>Wanneer plaatsen:</strong> </td><td>" . str_replace("_", " ", $_POST['wanneerSelect']) . "</td></tr><br>";
    $message .= "<tr style='background: black; color: white;'><td><strong>Contactgegevens</strong> </td><td></td></tr>";
$message .= "<tr><td><strong>Vraag of opmerking:</strong> </td><td>" . strip_tags($_POST['inputVraag']) . "</td></tr>";
$message .= "<tr><td><strong>Naam:</strong> </td><td>" . strip_tags($_POST['inputNaam']) . "</td></tr>";
$message .= "<tr><td><strong>Adres:</strong> </td><td>" . strip_tags($_POST['inputAdres']) . "</td></tr>";
$message .= "<tr><td><strong>Postcode:</strong> </td><td>" . strip_tags($_POST['inputPostcode']) . "</td></tr>";
$message .= "<tr><td><strong>Woonplaats:</strong> </td><td>" . strip_tags($_POST['inputWoonplaats']) . "</td></tr>";
$message .= "<tr><td><strong>Telefoonnummer:</strong> </td><td>" . strip_tags($_POST['inputTelefoonnummer']) . "</td></tr>";
$message .= "<tr><td><strong>E-mail:</strong> </td><td>" . strip_tags($_POST['inputEmail']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$subject = "Offerteaanvraag";
$websiteNaam = $_GET['website_naam'];

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $emailaccount;
$mail->Password = $password;
$mail->FromName = "Nieuwe inzending van $websiteNaam";

// Email Sending Details
$mail->IsHTML(true);
$mail->addAddress("stagiaire-web@bureauvdo.nl");
$mail->Subject = $subject;
$mail->msgHTML($message);
    
$sql = "INSERT INTO tblInzending (websiteNaam, Type, Breedte, Diepte, Kleurstelling, Dakbedekking, Zonwering, Montage, Datum, Vraag, Naam, Adres, Postcode, Woonplaats, Telefoonnummer, Email) VALUES ('$websiteNaam', '$type', '$breedte', '$diepte', '$color', '$dakbedekking', '$zonwering', '$montage', '$wanneer', '$vraag', '$naam', '$adres', '$postcode', '$woonplaats', '$telefoonnummer', '$email')";

if($db->query($sql) === TRUE) {
    if (!$mail->send()) {
    $error = "Mailer Error: " . $mail->ErrorInfo;
    echo '<p>'.$error.'</p>';
    }
    else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

}


?>