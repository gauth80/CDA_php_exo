<?php
    // initial variables errors @String : void
    $getErrorName = $getErrorSurname  = '';
    $name = $surname = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // get inputs
        $getName = trim($_POST['name']);
        $getSurname = trim($_POST['surname']);

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
            $query = 'INSERT INTO sh_users (us_name, us_surname) VALUE (:us_name, :us_surname)';
            $dataSourceName = require_once('forForm/dsn.php');
            $dataSourceName = connexion();

            if($statement = $dataSourceName->prepare($query)) {
                $statement = bindValue(':us_name', $name, PDO::PARAM_STR);
                $statement = bindValue(':us_surname', $surname, PDO::PARAM_STR);
                $statement->execute();

            } else {
                return false;
            }

            unset($statement);

        } else {
            return false;
        }

        unset($dataSourceName);

    }
