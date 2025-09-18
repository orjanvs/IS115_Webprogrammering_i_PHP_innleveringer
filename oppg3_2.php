<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3.2</title>
</head>
<body>
    <h1>Oppgave 3.2</h1>
    <h2>Teller</h2>
    <p>Lag et script som itererer fra 0 til 9 ved hjelp av en for-løkke. Hvert tall skal presenteres på skjermen.<br> 
    Du må også regne ut summen av tallene 0-9 og presentere summen etter at iterasjonen er ferdig.</p>
    <h3>Resultat</h3>
    <p>
        <?php
        $sum = 0;
        for ($i = 0; $i < 10; $i++) {
            echo $i . "<br>";
            $sum += $i;
        }
        echo "Ferdig å telle! Summen av tallene ble $sum.";
        ?>
    </p>