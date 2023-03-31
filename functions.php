<?php

function formatText($name) {
    //$formattedName = ucwords(strtolower($name));
    $formattedName = mb_convert_case(strtolower($name), MB_CASE_TITLE, "UTF-8");
    $formattedName = str_replace(["Ç", "Á", "À", "Ã", "Â", "É", "È", "Ê", "Í", "Ì", "Ó", "Ò", "Õ", "Ô", "Ú", "Ù"],["ç", "á", "à", "ã", "â", "é", "è", "ê", "í", "ì", "ó", "ò", "õ", "ô", "ú", "ù"], $formattedName);
    return $formattedName;
}

function formatTextLowercase($name) {
    $formattedName = strtolower($name);
    return $formattedName;
}

function formatPhoneNumber($phoneNumber) {
    // remove all non-numeric characters from the phone number
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
    
    // format the phone number with the desired pattern
    $formattedPhoneNumber = '+55 ' . substr($phoneNumber, 0, 2) . ' ' . substr($phoneNumber, 2, 5) . ' ' . substr($phoneNumber, 7);
    
    return $formattedPhoneNumber;
}

function formatPhoneNumberWork($phoneNumber) {
    // remove all non-numeric characters from the phone number
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
    
    // format the phone number with the desired pattern
    $formattedPhoneNumber = '+55 ' . substr($phoneNumber, 0, 2) . ' ' . substr($phoneNumber, 2, 4) . ' ' . substr($phoneNumber, 6);
    
    return $formattedPhoneNumber;
}

?>