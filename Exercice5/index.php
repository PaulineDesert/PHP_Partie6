<?php
    
    function myFunction() {
        if (!empty($_GET)) {
            if (isset($_GET['week'])) {
                echo $_GET['week'] . chr(10);
            } else {
                echo 'Pas de paramètres';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>

    <h1>Exercice 5</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>
    <a href="index.php?week=12">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>