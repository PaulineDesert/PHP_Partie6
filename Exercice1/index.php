<?php
    
    function myFunction() {
        if (isset($_GET['lastname'], $_GET['firstname'])) {
            echo $_GET['lastname'] . chr(10) . $_GET['firstname'];
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>