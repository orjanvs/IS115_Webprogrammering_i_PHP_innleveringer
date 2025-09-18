<?php 
$tall1 = 57;
$tall2 = 23;
// Bruker abs() funksjonen for å regne ut den absolutte verdien. 
$absolutt_differanse = abs($tall1 - $tall2);
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2.4</title>
</head>
<body>
    <h1>Oppgave 2.4</h1>
    <h2>Differanse</h2>
    <p>Lag en liten kalkulator som tar utgangspunkt i to tall $tall1 og $tall2.
        Sriptet skal regne ut den absolutte differansen mellom disse tallene. 
        Resultatet skal presenteres som en setning
    </p>
    
    <p>Den absolutte differansen mellom <?= $tall1 ?> og <?= $tall2 ?> er <?= $absolutt_differanse ?> </p>
</body>
</html>