<?php 
    require ('config/AffichageSujetAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container">
        <?php if(isset($errorMsg)){ echo $errorMsg; }
        if(isset($infosSujet_publication))
        ?>
        <h2> Sujet </h2>

        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><h3><?= $infosSujet_title?></h3></div>
            <div class="card-body">
                <p class="card-text"><?= $infosSujet_description?></p>
            </div>
        </div>
        <a class="btn btn-primary" href="sujets.php">Retour</a>
        
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                <div class="card-body p-4">
                    <div class="form-outline mb-4">
                    <form class="container" method="POST">
                            <?php 
                                if(isset($errorMsg)){
                                    echo '<p>'.$errorMsg.'</p>'; 
                                }elseif(isset($sucessMsg)){
                                    echo '<p>'.$sucessMsg.'</p>';
                                }
                            ?>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" name="message" rows="3"></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="validate">Publier le message</button>
                        </form>
                    </div>
                    <?php while ($msg = $lesMsg->fetch()){
                    ?>
                    <div class="card mb-4">
                    <div class="card-body">
                        <p><?= $msg['messages'] ?></p>

                        <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <p class="small mb-0 ms-2">anonyme</p>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <p class="small text-muted mb-0">date</p>
                            <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php 
                    }
                    ?> 
                </div>
                </div>
            </div>
        </div>
        
    </div>
<?php include 'includes/footer.php'; ?>