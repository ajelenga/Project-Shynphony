<?php 
    require("config/database.php");

   $tousLesSujets = $bdd->prepare('SELECT id,titre,description,date_publication FROM `sujets` ORDER BY `sujets`.`date_publication` DESC');
   $tousLesSujets->execute();


?>