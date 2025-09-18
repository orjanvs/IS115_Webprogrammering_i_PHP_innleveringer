<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3.5</title>
</head>
<body>
    <h1>Oppgave 3.5</h1>
    <h2>Sjakk og hvete</h2>
    <p>Tenk deg et sjakkbrett med hvetekorn på. For hver rute på brettet, fordobler du antall hvetekorn. <br>
        For eksempel: rute 1 har ett hvetekorn, rute 2 har to hvetekorn, rute 3 har fire hvetekorn og så videre. <br>
        Lag et script som viser antall hvetekorn for hver eneste rute på sjakkbrettet. <br>
        Det totale antall hvetekorn skal i tillegg omregnes til antall tonn med hvete. <br>
        Ifølge ChatGPT-4, veier et gjennomsnittlig hvetekorn omtrent 0,035 gram.
    <h3>Antall ruter på sjakkbrettet:</h3>
    <p>64</p>
    <h3>Antall hvetekorn på hver rute:</h3>
    <p>
        <?php 
            // For-loop for å iterere gjennom hver rute på brettet. 
            for ($i = 0; $i < 64; $i++) {
                $hvetekorn = pow(2, $i); // Beregner antall hvetekorn med å bruk pow() funksjonen for å regne ut eksponenten 
                echo "Rute " . ($i + 1) . ": " . number_format($hvetekorn, 0, ',', ' ') . " hvetekorn<br>"; // Bruker number_format() for å gjøre tallene mer lesbare
            }
        ?>
    </p>
    <h3>Totalt antall hvetekorn:</h3>
    <p>
        <?php 
            $total_mengde_korn = pow(2, 64) - 1; 
            echo number_format($total_mengde_korn, 0, ',', ' ') . " hvetekorn";
        ?>
    </p>
    <h3>Total vekt i tonn:</h3>
    <p>
        <?php
            // Regner ut antall vekt i tonn med å gange antall korn med vekten av ett korn i gram. 
            // Deretter dele på 1000000 for å konvertere gram til tonn.
            $vekt_per_korn_gram = 0.035;
            $gram_per_tonn = 1000000;
            $total_vekt_tonn = ($total_mengde_korn * $vekt_per_korn_gram) / $gram_per_tonn;
            echo number_format($total_vekt_tonn, 2, ',', ' ') . " tonn";
            ?>
    </p>
</body>
</html>