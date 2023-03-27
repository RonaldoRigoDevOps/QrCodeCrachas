<?php

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

include './vendor/autoload.php';
include("environment.php");

if (isset($_POST['gerar_qr']))
{

$fullname     = $_POST['nome_completo'];
$numberMobile = $_POST['celular'];
$numberRamal  = $_POST['ramal'];
$designation  = $_POST['cargo'];
$department   = $_POST['departamento'];
$email        = $_POST['email'];

$data  = "BEGIN:VCARD\r\n";
$data .= "VERSION:3.0\r\n";
$data .= "FN:$fullname\r\n";
$data .= "N:$fullname\r\n";
$data .= "EMAIL;TYPE=WORK:$email\r\n";
$data .= "TEL;TYPE=WORK:$numberWork\r\n";
$data .= "TEL;TYPE=CELL:$numberMobile\r\n";
$data .= "TEL;TYPE=Ramal:$numberRamal\r\n";
$data .= "ADR;TYPE=WORK:;$neighborhood;$street;$city;$state;$postalcode;$country\r\n";
$data .= "ORG:$company;$department\r\n";
$data .= "TITLE:$designation\r\n";
$data .= "URL;TYPE=WORK:$website\r\n";
$data .= "CATEGORIES:myContacts";
$data .= "END:VCARD";

// quick and simple:
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
}
?>