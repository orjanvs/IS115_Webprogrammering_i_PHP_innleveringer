<?php
/**
 * Basic Page Template
 * 
 * @author Ditt navn
 * @date <?php echo date('Y-m-d'); ?>
 * @description Grunnleggende mal for PHP-sider
 */
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min PHP Side</title>
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
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Min PHP Applikasjon</h1>
    </div>
    
    <div class="container">
        <h2>Velkommen</h2>
        <?php
        // Din PHP-kode her
        $navn = "Student";
        $dato = date('Y-m-d H:i:s');
        
        echo "<p>Hei, $navn!</p>";
        echo "<p>Nåværende tidspunkt: $dato</p>";
        ?>
    </div>
    
    <div class="container">
        <h2>Innhold</h2>
        <p>Legg til ditt innhold her.</p>
    </div>
</body>
</html>