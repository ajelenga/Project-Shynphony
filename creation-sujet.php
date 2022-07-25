<?php 
    require("config/publierSujetAction.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br>

    <div class="container">
        <h3>
        Publier d'un sujet
        </h3>
    </div>
    <form class="container" method="POST">
        <?php 
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($sucessMsg)){
                echo '<p>'.$sucessMsg.'</p>';
            }
         ?>

        <div class="form-group">
            <label for="exampleInputTitle">Titre</label>
            <input type="text" class="form-control" id="exampleInputTitle" placeholder="Entrer le Titre" name= "title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea3">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea3" name="description" rows="7"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea3">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea3" name="message" rows="7"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary"  name="validate">Publier le Sujet</button>
    </form>

    
<?php include 'includes/footer.php'; ?>