<?php 
    // Henter dagens dato i format år-måned-dag
    $dagens_dato = date("Y-m-d");
    // Definerer en dato for hendelsen
    $hendelse_dato = "2025-09-28"; 
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3.1</title>
</head>
<body>
    <h1>Oppgave 3.1</h1>
    <h2>Datosjekk</h2>
    <p>Lag et lite script som sjekker hvorvidt en hendelse allerede er gjennomført. Skriv ut resultatet på skjermen.</p>
    <h3>Dagens dato:</h3>
    <p><?= $dagens_dato; ?></p>    
    <h3>Hendelsesdato:</h3>
    <p><?= $hendelse_dato; ?></p>
    <h3>Resultat:</h3>
    <p>
        <?php 
            if ($dagens_dato > $hendelse_dato) {
                echo "Hendelsen er gjennomført.";
            } elseif ($dagens_dato == $hendelse_dato) {
                echo "Hendelsen er i dag.";
            } else {
                echo "Hendelsen er ikke gjennomført.";
            }
        ?>
    </p>
</body>
</html>