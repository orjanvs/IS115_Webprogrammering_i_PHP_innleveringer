<?php 
$S0 = 10000; 
$rente = 0.05;
?>


<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3.3</title>
</head>
<body>
    <h1>Oppgave 3.3</h1>
    <h2>Ny saldo</h2>
    <p>
        Skriv et program som definerer startsaldo S0 og rente. <br>
        Programmet skal beregne ny saldo S1 etter ettår inkludert renter og skrive S1 ut på skjermen. <br>
        Utvid programmet med en løkke, slik at saldo Sn etter en periode på n år kan beregnes. <br>
        Skriv ut ny saldo for hvert år og Sn etter n år.
    </p>
    <h3>Første del: Saldo S1 etter ett år</h3>
    <p>
        <?php 
        $S1 = $S0 * (1 + $rente);
        ?>
        Startsaldo = <?= $S0 ?> <br>
        Ny saldo = <?= $S1 ?> <br>
    </p>

    <h3>Andre del: Saldo Sn etter n år</h3>
    <p>
        <?php 
        // definerer Sn som startsaldo
        $Sn = $S0;
        // definerer antall år
        $n = 5;
        // Bruker en for-loop for å regne saldoen for hvert år til og med n år
        for ($i = 1; $i <= $n; $i++) {
            $Sn *= (1 + $rente);
            $Sn = round($Sn, 2); // bruker round() for å runde av til 2 desimaler
            echo "Saldoen etter $i år er: $Sn <br>";
        }
        ?>
    </p> 
</body>
</html>