<?php
session_start();
// var_dump($_POST);
$choixisok=isset($_POST['choix']) && !empty($_POST['choix']);
$nbpersisok=isset($_POST['nbpers']) && !empty($_POST['nbpers']);
if(!$choixisok || !$nbpersisok ){
    header('location: agence.php');
    exit();
}
$_SESSION['choix']=$_POST['choix'];
$_SESSION['nbpers']=$_POST['nbpers'];
$nomvoyage=explode("-", $_SESSION["choix"]);
$prixtotal= $_SESSION["nbpers"] * $nomvoyage[1];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Récapitulatif</title>
</head>

<body>
    <h1>Résumé de votre commande</h1>
    <?php if($_SESSION['gridRadios'] ==="option1"): ?>
    <p>Bonjour, <?=$_SESSION['civilite'] ?> <?= $_SESSION['nom']?> <?= $_SESSION['prenom']?><br>Vous avez choisi un voyage pour <?=$nomvoyage[0] ?> au prix de <?= $nomvoyage[1]?> Ƶ par personne<br>Vous nous avez indiqué <?= $_SESSION['nbpers']?> personne(s).<br>le montant total est de <?= $prixtotal?> Ƶ.</p>
    <?php else: ?>
    <p>Bonjour, <?=$_SESSION['civilite'] ?> <?= $_SESSION['nom']?> <?= $_SESSION['prenom']?><br>Vous avez choisi une excursion pour <?=$nomvoyage[0] ?> au prix de <?= $nomvoyage[1]?> Ƶ par personne<br>Vous nous avez indiqué <?= $_SESSION['nbpers']?> personne(s).<br>le montant total est de <?= $prixtotal?> Ƶ.</p>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>