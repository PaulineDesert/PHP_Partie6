<?php
    
    function myFunction() {
        if (!empty($_GET)) {
            foreach ($_GET as $i => $i_value) {
                if (isset($_GET['startDate'], $_GET['endDate'])) {
                    echo $i . ': ' . $i_value . chr(10);
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>

    <h1>Exercice 3</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>
    <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>