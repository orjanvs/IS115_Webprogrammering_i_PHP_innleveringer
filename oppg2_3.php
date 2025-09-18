<?php
$valid_email = "test@test.no";
$invalid_email = "testtest";

// Bruker filter_var() med email filter for å validere emailen. 
// Returnerer false hvis emailen ikke er gyldig.
$valid_email_result = filter_var($valid_email, FILTER_VALIDATE_EMAIL);
$invalid_email_result = filter_var($invalid_email, FILTER_VALIDATE_EMAIL);
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2.3</title>
</head>
<body>
    <h1>Oppgave 2.3</h1>
    <h2>Valider e-post</h2>
    <p>Lag et script som validerer om en oppgitt e-postadresse har riktig format. 
        Skriv ut  resultatet av valideringen på skjermen
    </p>

    <h3>Resultat fra korrekt email</h3>
    <!-- Bruker var_dump() for å vise datatype + resultat for begge variablene --> 
    <p><?= var_dump($valid_email_result) ?></p>

    <h3>Resultat fra feil email</h3>
    <p><?= var_dump($invalid_email_result) ?></p>

</body>
</html>