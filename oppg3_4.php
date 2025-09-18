<?php 
// Definerer en verdi for temperatur
$temp = -6;
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3.4</title>
</head>
<body>
    <h1>Oppgave 3.4</h1>
    <h2>Anbefalt bekledning</h2>
    <p>Lag et script som tar imot en temperaturverdi og skriver ut en anbefaling til brukeren om hva de bør ha på seg.</p>
    <h3>Temperatur:</h3>
    <p><?= $temp ?></p>
    <h3>Anbefalt bekledning:</h3>
    <p>
        <?php 
        // If-else for å gi anbefaling basert på temperatur.
        // Bruker ikke nøyaktig samme temperaturintervaller som foreslått i oppgaven da samme temp kommer i to kategorier. Eks: 5-15 og 15-20. 
            if ($temp > 20) { //Sjekker over 20 grader
                echo "T-skjorte og shorts";
            } elseif ($temp >= 15) { //Sjekker 15-20 grader 
                echo "Langbukse og genser"; 
            } elseif ($temp >= 5) { //Sjekker 5-14 grader 
                echo "Jakke og bukse";
            } elseif ($temp >= 0){ //Sjekker 0-4 grader
                echo "Vinterjakke og lue";
            } else { //Sjekker under 0 grader
                echo "Ullundertøy og vintertøy";
            }
        ?>
    </p>
</body>
</html>
