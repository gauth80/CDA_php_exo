<?php
    // initial variables errors @String : void
    $getErrorName = $getErrorSurname = $getErrorCity = $getErrorCGU = $getErrorDate = $getErrorMail = $getErrorQuestion = $getErrorStreet = $getErrorZipCode = '';
    $name = $surname = $city = $date = $mail = $question = $street = $zipcode = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // get inputs
        $getName = trim($_POST['name']);
        $getSurname = trim($_POST['surname']);
        /*$getCity = trim($_POST['city']);
        $getDate = trim($_POST['date']);
        $getMail = trim($_POST['mail']);
        $getQuestion = trim($_POST['question']);
        $getStreet = trim($_POST['street']);
        $getZipCode = trim($_POST['zipcode']);*/

        // checked value user

        if(empty($getName)) {
            $getErrorName = 'Veuillez remplir le champs nom.';
        } elseif (!filter_var($getName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]*$/")))) {
            $getErrorName = 'Format non apprécier';
        } elseif (strlen($getName) < 3) {
            $getErrorName = 'Votre nom doit possèdée aux moins 3 lettres.';
        } elseif (strlen($getName) > 15) {
            $getErrorName = 'Votre nom ne peu dépasser 15 lettres.';
        } else {
            $name = $getName;
        }

        if(empty($getSurname)) {
            $getErrorSurname = 'Veuillez remplir le champs prénom.';
        } elseif (!filter_var($getName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]*$/")))) {
            $getErrorSurname = "Format non apprécier";
        } elseif (strlen($getSurname) < 3) {
            $getErrorSurname = "prénom trop court";
        } else {
            $surname = $getSurname;
        }




        // check final
        if(empty($getErrorName) && empty($getErrorSurname)) {
            $validate = true;

            return false;
        } else {
            return false;
        }


    }
