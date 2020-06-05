<?php
    
    function myFunction() {
        if (!empty($_GET)) {
            foreach ($_GET as $i => $i_value) {
                // if (isset($_GET['language'], $_GET['server'])) {
                if ($_GET['language'] == 'PHP' && $_GET['server'] == 'LAMP') {
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
    <title>Exercice 4</title>
</head>

<body>

    <h1>Exercice 4</h1>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP</p>
    <a href="index.php?language=PHP&amp;server=LAMP">Lien</a>
    <p><?= myFunction() ?></p>

</body>

</html>