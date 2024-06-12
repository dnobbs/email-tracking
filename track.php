<?php
// Log the IP address, timestamp, and user agent
$log = fopen('log.txt', 'a');
fwrite($log, date('Y-m-d H:i:s') . " - " . $_SERVER['REMOTE_ADDR'] . " - " . $_SERVER['HTTP_USER_AGENT'] . "\n");
fclose($log);

// Send the 1x1 transparent pixel
header('Content-Type: image/png');
readfile('pixel.png');
?>
