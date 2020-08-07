<?php
session_start();
var_dump($_POST);
$nomisok=isset($_POST['nom']) && !empty($_POST['nom']);
// var_dump($nomisok);
$prenomisok=isset($_POST['prenom']) && !empty($_POST['prenom']);
// var_dump($prenomisok);
$civiliteisok=isset($_POST['civilite']) && !empty($_POST['civilite']);
// var_dump($civiliteisok);
$gridRadiosisok=isset($_POST['gridRadios']) && !empty($_POST['gridRadios']);
// var_dump($gridRadiosisok);
if(!empty($_SESSION['nom']) && isset($_SESSION['nom'])){
if(!$nomisok || !$prenomisok || !$civiliteisok || !$gridRadiosisok){
    header('location: formulaire.php');
    exit();
}else{
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['prenom']=$_POST['prenom'];
    $_SESSION['civilite']=$_POST['civilite'];
    $_SESSION['gridRadios']=$_POST['gridRadios'];
}
}




// var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>agence</title>
</head>

<body>
    <?php if($_SESSION['gridRadios']=="option1"): ?>
    <form action="recapitulatif.php" method="POST" class="bg-secondary container center-div w-50">
        <div class="form-group row">
            <label for="civilite" class="col-sm-2 col-form-label">Voyage :</label>
            <div class="form-group row">
                <select class="custom-select" id="civilite" name="choix">
                    <option selected disabled>Voyage</option>
                    <option value="Orange city - 100">Orange city - 100Ƶ</option>
                    <option value="planete kaio - 1532">planete kaio - 1532Ƶ</option>
                    <option value="planete légume - 645">planete légume - 645Ƶ</option>
                    <option value="planete yardrat - 1182">planete yardrat - 1182Ƶ</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">nombre de personne :</label>
            <div class="col-sm-10">
                <input type="number" class="width-20" id="number" name="nbpers">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <a class="btn btn-primary" href="formulaire.php">retour</a>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">valider</button>
            </div>
        </div>
    </form>
    <?php else: ?>
    <form action="recapitulatif.php" method="POST" class="bg-secondary container center-div w-50">
        <div class="form-group row">
            <label for="civilite2" class="col-sm-2 col-form-label">excursion :</label>
            <div class="form-group row">
                <select class="custom-select" id="civilite2" name="choix">
                    <option selected disabled>excursion</option>
                    <option value="cell game - 150">cell game - 150Ƶ</option>
                    <option value="lycée orange stars - 120">lycée orange stars - 120Ƶ</option>
                    <option value="capsule corp - 482">capsule corp - 482Ƶ</option>
                    <option value="kame house - 145">kame house - 145Ƶ</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="number2" class="col-sm-2 col-form-label">nombre de personne :</label>
            <div class="col-sm-10">
                <input type="number" class="width-20" id="number2" name="nbpers">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <a class="btn btn-primary" href="formulaire.php">retour</a>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">valider</button>
            </div>
        </div>
    </form>
    <?php endif; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>