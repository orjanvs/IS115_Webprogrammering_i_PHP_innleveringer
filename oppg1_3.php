<?php 
$navn = "Test Testesen";
$alder = 30;
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1.3</title>
    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Oppgave 1.3</h1>
    <h2>Tabell</h2>
    <table>
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <tr>
            <td><?php echo $navn; ?></td>
            <td><?php echo $alder; ?></td>
        </tr>
    </table>

    <h2>Nummerert Liste</h2>
    <ol>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ol>

    <h2>Punktmerket liste</h2>
    <ul>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ul>

    <h2>Paragraf</h2>
    <p>Navn: <?php echo $navn; ?><br>
       Alder: <?php echo $alder; ?></p>
</body>
</html>