<?php
function connexion() {
    // env || srv (c'est un exemple, la base n'existe pas pour des raisons évidentes..).

    $domainSourceName = 'mysql:host=localhost;port=3306;dbname=XXXXXX;charset=utf8';
    $user = 'jeanIvre';
    $mdp = 'XXXXX';

    try {
        $dataSourceName = new PDO($domainSourceName, $user, $mdp);
        $dataSourceName->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dataSourceName;

    } catch (PDOException $e) {
        echo "souci de connexion suivant : " . $e->getMessage();
        die; // ou exit
    }
}
?>