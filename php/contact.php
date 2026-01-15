<?php
// Kontaktní formulář - finální verze

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Získej data
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $services = $_POST['services'] ?? [];

    // === VALIDACE ===
    $errors = [];
    
    if (empty($name)) $errors[] = "Jméno je povinné.";
    
    if (empty($email)) {
        $errors[] = "E-mail je povinný.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail není ve správném formátu.";
    }
    
    if (!empty($phone)) {
        $phone_clean = preg_replace('/[\s+\-()]/', '', $phone);
        if (!preg_match('/^[0-9]{9,15}$/', $phone_clean)) {
            $errors[] = "Telefonní číslo musí obsahovat 9-15 číslic.";
        }
    }
    
    if (empty($message)) $errors[] = "Zpráva je povinná.";
    
    // Pokud jsou chyby
    if (!empty($errors)) {
        $error_text = implode('\\n', $errors);
        ?>
        <!DOCTYPE html>
        <html>
        <head><meta charset="UTF-8"></head>
        <body>
        <script>
            alert('Chyby ve formuláři:\n\n<?php echo $error_text; ?>');
            window.location.href = 'kontakt.php';
        </script>
        </body>
        </html>
        <?php
        exit;
    }
    
    // === ULOŽENÍ DO SOUBORU ===
    $logs_dir = __DIR__ . '/logs';
    if (!is_dir($logs_dir)) {
        mkdir($logs_dir, 0777, true);
    }
    
    // Ulož do textového souboru
    $txt_file = $logs_dir . '/zpravy.txt';
    $text = "\n" . str_repeat('=', 50) . "\n";
    $text .= "Datum: " . date('d.m.Y H:i:s') . "\n";
    $text .= "Jméno: $name\n";
    $text .= "E-mail: $email\n";
    if (!empty($phone)) $text .= "Telefon: $phone\n";
    if (!empty($services)) $text .= "Zájem o: " . implode(', ', $services) . "\n";
    $text .= "\nZpráva:\n$message\n";
    $text .= str_repeat('=', 50) . "\n";
    
    file_put_contents($txt_file, $text, FILE_APPEND);
    
    // Ulož i do CSV
    $csv_file = $logs_dir . '/zpravy.csv';
    $data = [
        date('Y-m-d H:i:s'),
        $name,
        $email,
        $phone,
        str_replace(["\r", "\n"], ' ', $message),
        implode(', ', $services)
    ];
    $fp = fopen($csv_file, 'a');
    fputcsv($fp, $data, ';');
    fclose($fp);
    
    // === ÚSPĚŠNÉ PŘESMĚROVÁNÍ ===
    ?>
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <title>Zpráva odeslána</title>
    </head>
    <body>
    <script>
        alert('✓ Zpráva byla úspěšně odeslána!\n\nBrzy se vám ozvu.');
        window.location.href = 'kontakt.php';
    </script>
    <noscript>
        <p>Zpráva byla odeslána. <a href="kontakt.php">Zpět na kontakt</a></p>
    </noscript>
    </body>
    </html>
    <?php
    exit;
    
} else {
    // Pokud někdo přistoupí přímo
    header('Location: kontakt.php');
    exit;
}
?>
