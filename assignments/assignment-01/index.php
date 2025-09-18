<?php
/**
 * Assignment 01 - IS115 Introduction to PHP
 * 
 * @author Ditt navn
 * @date <?php echo date('Y-m-d'); ?>
 * @description Kort beskrivelse av oppgaven
 */

// Start HTML output
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 01</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Assignment 01 - IS115</h1>
    
    <div class="container">
        <h2>PHP Output</h2>
        <?php
        // Din PHP-kode her
        echo "<p>Hei verden! Dette er min første PHP-oppgave.</p>";
        echo "<p>Dagens dato: " . date('Y-m-d H:i:s') . "</p>";
        ?>
    </div>
    
    <div class="container">
        <h2>Oppgave Informasjon</h2>
        <p><strong>Student:</strong> Ditt navn</p>
        <p><strong>Dato:</strong> <?php echo date('Y-m-d'); ?></p>
        <p><strong>Fag:</strong> IS115 - Introduksjon til PHP</p>
    </div>
</body>
</html>