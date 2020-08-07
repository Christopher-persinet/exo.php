<?php
session_start();


?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Agence tourisk</title>
</head>

<body>
    <h1 class="display-8">Avec nous, le départ est plus facile. L'arrivé par contre...</h1>
    <img src="avion_dauphin.jpg" class="img-fluid" alt="avion">
    <form action="agence.php" method="POST" class="bg-secondary container center-div w-50">
        <div class="form-group row">
            <label for="civilite" class="col-sm-2 col-form-label">Civilité</label>
            <div class="form-group row">
                <select class="custom-select" id="civilite" name="civilite">
                    <option selected disabled>...</option>
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label">Nom :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label">Prenom :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="voyage" value="option1" checked>
                    <label class="form-check-label" for="voyage">
                        Voyage
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="excursion" value="option2">
                    <label class="form-check-label" for="excursion">
                        Excursion
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">valider</button>
            </div>
        </div>
    </form>









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>