<?php

use chillerlan\QRCode\{QRCode, QROptions};
use chillerlan\QRCode\Common\EccLevel;
use chillerlan\QRCode\Data\QRMatrix;
use chillerlan\QRCode\Output\QROutputInterface;

include './vendor/autoload.php';

include 'functions.php';

if (isset($_POST['gerar-qr']))
{   

    //$fullname     = $_POST['nome_completo'];
    $fullname     = formatText($_POST['nome_completo']);
    $numberMobile = formatPhoneNumber($_POST['celular']);
    $numberWork   = formatPhoneNumberWork($_POST['telefone']);
    $numberRamal  = $_POST['ramal'];
    $designation  = formatText($_POST['cargo']);
    $department   = formatText($_POST['departamento']);
    $email        = formatTextLowercase($_POST['email']);
    $company      = $_POST['empresa'];
    $neighborhood = $_POST['bairro'];
    $street       = $_POST['rua'];
    $number       = $_POST['numero'];
    $city         = $_POST['cidade'];
    $state        = $_POST['estado'];
    $postalcode   = $_POST['cep'];
    $country      = $_POST['pais'];
    $website      = $_POST['site'];
 
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


    // gera o QrCode:
    (new QRCode)->render($data,'./svg/manual/'.$fullname.'.svg');
    //echo '<img src="'.(new QRCode)->render($data,'./svg/manual/'.$fullname.'.svg' ).'" alt="QR Code" width='200' />';

    // Efetua o download do Qr-Code
    $file = './svg/manual/'.$fullname.'.svg';

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }

}
?>