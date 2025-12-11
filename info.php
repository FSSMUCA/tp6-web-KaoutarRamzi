<?php


$texte = "Page d'information PHP";
$numberA = 10;
$numberB = 5;


$addition = $numberA + $numberB;
$soustraction = $numberA - $numberB;
$multiplication = $numberA * $numberB;
$division = $numberB != 0 ? $numberA / $numberB : "Division impossible";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page PHP - TP6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?php echo $texte; ?></h1>
</header>

<main>

    <section class="card">
        <h2>Variables PHP déclarées</h2>

        <p><strong>Nombre A :</strong> <?php echo $numberA; ?></p>
        <p><strong>Nombre B :</strong> <?php echo $numberB; ?></p>
    </section>

    <section class="card">
        <h2>Résultats des opérations</h2>

        <p><strong>Addition :</strong> <?php echo $addition; ?></p>
        <p><strong>Soustraction :</strong> <?php echo $soustraction; ?></p>
        <p><strong>Multiplication :</strong> <?php echo $multiplication; ?></p>
        <p><strong>Division :</strong> <?php echo $division; ?></p>
    </section>

    <a href="index.html">Retour à la calculatrice</a>

</main>

<footer>
    <p>&copy; TP6 - Mini Projet PHP</p>
</footer>

</body>
</html>
