<?php
$last_name = "<b>Stueland</b>";
// Bruker strip_tags() for å fjerne html-tagsene
$last_name_cleaned = strip_tags($last_name);
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2.2</title>
</head>
<body>
    <h1>Oppgave 2.2</h1>
    <h2>Lag et script som fjerner potensiell HTML- og PHP-kode fra et etternavn. <br>
        Det behandlede navnet skal skrives ut på skjermen.
    </h2>
    <h3>Før behandling:</h3>
    <p><?= $last_name; ?></p>
    <h3>Etter behandling:</h3>
    <p><?= $last_name_cleaned; ?></p>

</body>
</html>