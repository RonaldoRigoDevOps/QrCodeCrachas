<?php

$dados = array_map('str_getcsv', file('./db/csv/Lista.csv'));
array_walk($dados, function(&$a) use ($dados) {
  $a = array_combine($dados[0], $a);
});
array_shift($dados);

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

include './vendor/autoload.php';

include './environment.php';


foreach ($dados as $dado) {


    $fullname     = $dado['DisplayName'];
    $designation  = $dado['Title'];
    $department   = $dado['Department'];
    $email        = $dado['Mail'];
    $numberMobile = $dado['Mobile'];
    $numberRamal  = $dado['TelephoneNumber'];

    //Construção dos dados para o QrCode
    $data  = "BEGIN:VCARD\r\n";
    $data .= "VERSION:3.0\r\n";
    $data .= "FN:$fullname\r\n";
    $data .= "N:$fullname\r\n";
    $data .= "EMAIL;TYPE=WORK:$email\r\n";
    $data .= "TEL;TYPE=WORK:$numberWork\r\n";
    $data .= "TEL;TYPE=CELL:$numberMobile\r\n";
    $data .= "TEL;TYPE=Ramal:$numberRamal\r\n";
    $data .= "ADR;TYPE=WORK:;$neighborhood;$street,$number;$city;$state;$postalcode;$country\r\n";
    $data .= "ORG:$company;$department\r\n";
    $data .= "TITLE:$designation\r\n";
    $data .= "URL;TYPE=WORK:$website\r\n";
    $data .= "CATEGORIES:myContacts";
    $data .= "END:VCARD";

    (new QRCode)->render($data,'./svg/auto/'.$fullname.'.svg');

}

    header('Location: consultar-registros.php');
    exit;

?>
