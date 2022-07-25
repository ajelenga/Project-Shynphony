<?php 
    require ('config/listeSujetsAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class= "container-fluid">
        <h4>Forum sujet</h4>
        <div class= "row d-inline-flex">
        <!-- Gallery Item 1 -->
        <?php while ($sujets = $tousLesSujets->fetch()){
        ?>
            <div class ="col-6 col-sm-4 col-md-3 p-2">
                <div class="card h-100">        
                    <h4 class="card-title text-center"><?= $sujets['titre'] ?></h4>
                    <p class="card-title text-center"><?= $sujets['description'] ?></p>
                    <p class="card-text text-center"><?= $sujets['date_publication'] ?></p>
                    <a href="AffichageSujet.php?id=<?= $sujets['id'] ?>" class="btn btn-primary">Voir le Sujet</a>
                </div>
            </div>
        <?php 
        }
        ?>     
        </div>
    </div>
<?php include 'includes/footer.php'; ?>