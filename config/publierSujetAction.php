<?php 
    require("config/database.php");

    if(isset($_POST['validate'])){
      if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['message'])){
         $titre=htmlspecialchars($_POST['title']);
         $description=nl2br(htmlspecialchars($_POST['description']));
         $date= date('Y/m/d');
         $insertSujet= $bdd->prepare("INSERT INTO `sujets` (`id`, `titre`, `description`, `date_publication`) VALUES (NULL, ?, ?, ?);");
         $insertSujet->execute(array($titre,$description,$date));


         $messages=nl2br(htmlspecialchars($_POST['message']));
         $insertMessage= $bdd->prepare("INSERT INTO `messages` (`id`, `messages`, `fk_id_sujet`) VALUES (NULL, ?, (SELECT id FROM sujets ORDER BY id DESC LIMIT 1));");
         $insertMessage->execute(array($messages));

         $sucessMsg = "Votre sujet à bien été publier sur le site.";
      }else{
         $errorMsg = "Veuillez complétez tous les champs ";
      }
    }

?>
