<?php
    
    function myFunction() {
        if (!empty($_GET)) {
            foreach ($_GET as $i => $i_value) {
                // if (isset($_GET['language'], $_GET['server'])) {
                if ($_GET['building'] == '12' && $_GET['room'] == '101') {
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
    <title>Exercice 6</title>
</head>

<body>

    <h1>Exercice 6</h1>
    <p>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101</p>
    <a href="index.php?building=12&amp;room=101">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>