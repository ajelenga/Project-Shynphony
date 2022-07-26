<?php

try {
    //$bdd= new PDO('mysql:host=localhost;dbname=formsujet;charset=utf8;','root','root');
    $bdd= new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=formsujet;charset=utf8;','b7b4e27a6f33b7','fb865da6');
} catch (Exception $e) {
    die('Une erreur a été trouvée : ' . $e->getMessage());
}