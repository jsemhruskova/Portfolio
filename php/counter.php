<?php
// Jednoduché počítadlo návštěv stránky
$page = basename($_SERVER['PHP_SELF'], '.php');
$counter_file = __DIR__ . '/logs/counter_' . $page . '.txt';

// Vytvoř složku logs, pokud neexistuje
$logs_dir = __DIR__ . '/logs';
if (!is_dir($logs_dir)) {
    mkdir($logs_dir, 0755, true);
}

// Vytvoř soubor, pokud neexistuje
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, "0");
}

// Přečti, zvyš a ulož počet návštěv
$fp = fopen($counter_file, 'c+');
flock($fp, LOCK_EX);
$count = (int)trim(fgets($fp));
$count++;
ftruncate($fp, 0);
rewind($fp);
fwrite($fp, (string)$count);
flock($fp, LOCK_UN);
fclose($fp);

return $count;
?>
