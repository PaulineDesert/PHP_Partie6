<?php
    
    function myFunction() {
        if (!empty($_GET)) {
            if (isset($_GET['age'])) {
                echo $_GET['lastname'] . chr(10) . $_GET['firstname'] . chr(10) . $_GET['age'];
            } else {
                echo 'Il faut renseigner un âge';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>

    <h1>Exercice 2</h1>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>