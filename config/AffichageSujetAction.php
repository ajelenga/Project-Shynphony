<?php 
    require("config/database.php");

    if(isset($_GET['id']) AND !empty($_GET['id'])){

        $idSujet=$_GET['id'];
        $unSujetExist = $bdd->prepare('SELECT * FROM `sujets` WHERE sujets.id =?');
        $unSujetExist->execute(array($idSujet));

        $lesMsg= $bdd->prepare('SELECT * FROM `messages` WHERE fk_id_sujet =?' );
        $lesMsg->execute(array($idSujet));

        if($unSujetExist->rowCount()>0){
            $infosSujet=$unSujetExist->fetch();

            $infosSujet_title = $infosSujet['titre'];
            $infosSujet_description = $infosSujet['description'];
            $infosSujet_publication = $infosSujet['date_publication'];
        }else{
            echo "Aucun sujet";
        }

    }else{
        echo "Aucun sujet";
    }


    if(isset($_POST['validate']) AND isset($_GET['id']) AND !empty($_GET['id'])){
        if(!empty($_POST['message'])){
            $idSujet=$_GET['id'];
           $messages=nl2br(htmlspecialchars($_POST['message']));
           $insertMessage= $bdd->prepare("INSERT INTO `messages` (`id`, `messages`, `fk_id_sujet`) VALUES (NULL, ?, ?);");
           $insertMessage->execute(array($messages,$idSujet));
  
           $sucessMsg = "Votre message à bien été publier sur le site.";
           header("Refresh:0");
        }else{
           $errorMsg = "Veuillez complétez le champs ";
        }
      }

?>