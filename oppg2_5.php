<?php

// Definerer alfabetene som brukes for passordgenereringen
$letters = 'abcdefghijklmnopqrstuvwxyz';
$capital_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';

// Definerer en variabel med en tom string
$passord = '';

/* Konkantenerer en stor bokstav med at det velges en 
tilfeldig int verdi ved hjelp av random_int(). 
Verdien tilsvarer indeksen til tegnet i stringen
Bruker random_int() istedenfor rand(), da den er kryptografisk sikker, 
mens rand() er pseudorandom. (https://www.php.net/manual/en/function.random-int.php) */
$passord .= $capital_letters[random_int(0, strlen($capital_letters) - 1)];

// Konkantenerer på et tall med samme metode.
$passord .= $numbers[random_int(0, strlen($numbers) - 1)];

// Bruker en for-loop for å legge til de resterende bokstavene som små bokstaver
for ($i = 0; $i < 6; $i++) {
    $passord .= $letters[random_int(0, strlen($letters) - 1)];
}

// Bruker str_shuffle() for å endre rekkefølgen på tegnene slik at det alltid blir mer tilfeldig. 
$passord = str_shuffle($passord);

/* Per nå vil denne generatoren kun generere ett passord med nøyaktig 8 tegn, 
men kun en stor bokstav og kun ett tall. Kan forbedres med f.eks. å slå sammen alle alfabetene sammen
og bruke den i for-loopen, men holder det enkelt for denne oppgaven.*/
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2.5</title>
</head>
<body>
    <h1>Oppgave 2.5</h1>
    <h2>Passordgenerator</h2>
    <p>Lag et script som genererer et tilfeldig passord på åtte tegn.
        Minst ett av tegnene må være et tall og minst et av tegnene må være en stor bokstav.
        Passordet skal skrives ut på skjermen.
    </p>

    <h3>Passord:</h3>
    <p><?= $passord; ?></p>
</body>
</html>
