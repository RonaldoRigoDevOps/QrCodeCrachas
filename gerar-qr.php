<?php

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

include './vendor/autoload.php';


$fullname     = "Ronaldo Rigo";
$numberMobile = "+55 54 99700 1242";
$numberWork   = "+55 54 2107 1300";
$numberRamal  = "1303";
$designation  = "Assistente de Tecnologia da Informacao";
$department   = "Tecnologia da Informacao";
$email        = "ronaldo.r@cercena.com.br";
$company      = "Cercena";
$street       = "Rua Salomao Ioschpe n 361";
$neighborhood = "Distrito Industrial";
$city         = "Erechim";
$state        = "Rio Grande do Sul";
$postalcode   = "99706-399";
$country      = "Brasil";
$website      = "www.cercena.com.br";

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

?>