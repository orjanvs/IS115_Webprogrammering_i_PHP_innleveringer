<?php
/**
 * Form Template
 * 
 * @author Ditt navn
 * @date <?php echo date('Y-m-d'); ?>
 * @description Mal for HTML-skjemaer med PHP-behandling
 */

// Behandle skjemadata
$message = "";
if ($_POST) {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    
    if (!empty($name) && !empty($email)) {
        $message = "Takk, $name! Vi har mottatt din e-post: $email";
    } else {
        $message = "Vennligst fyll ut alle feltene.";
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skjema Eksempel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            padding: 10px;
            margin: 20px 0;
            border-radius: 4px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
    </style>
</head>
<body>
    <h1>Kontaktskjema</h1>
    
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>
    
    <form method="post" action="">
        <div class="form-group">
            <label for="name">Navn:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">E-post:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <button type="submit">Send inn</button>
    </form>
</body>
</html>