    <?php
    $first_name = "ØrJAn";
    $middle_name = "viKiNGstAd";
    $last_name = "stUeLaND";

    //Endrer alle bokstaver til små bokstaver og med UTF-8 encoding slik at den virker med norske tegn¨
    //strtolower() og ucwords() støtter ikke norske spesialtegn (https://www.php.net/manual/en/function.ucwords.php, https://www.php.net/manual/en/function.strtolower.php)
    $standardized_name = mb_strtolower("$first_name $middle_name $last_name", 'UTF-8');
    $first_letter_uppercase= mb_convert_case($standardized_name, MB_CASE_TITLE, 'UTF-8');
    ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2.1</title>
</head>
<body>
    <h1>Oppgave 2.1</h1>
    <h2>1. Sørge for at alle navn starter med stor forbokstav og resten med små bokstaver</h2>
    <p><?= $first_letter_uppercase; ?></p>


    <h2>2. Finne ut hvor mange navn brukeren skrev inn (basert på mellomrom)</h2>
    <!-- bruker str_word_count() for å telle antall ord i stringen-->
    <p><?= str_word_count($standardized_name); ?></p>

    <h2>3. Finne antall tegn i navnet (uten mellomrom)</h2>
    <!-- bruker mb_strlen() for utf-8 støtte da ø lagres som 2 bytes, 
     og strlen() teller antall bytes -->
    <p><?= mb_strlen(str_replace(' ', '', $standardized_name), 'UTF-8'); ?></p>
</body>
</html>