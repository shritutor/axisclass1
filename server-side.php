<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
header('Access-Control-Allow-Origin: *');

// Generate a random number every second and send it to the client
while (true) {
    $randomNumber = rand(1, 100);
    echo "data: $randomNumber\n\n";
    ob_flush();
    flush();
    sleep(1);
}
?>
