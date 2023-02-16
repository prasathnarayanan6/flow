<?php

$url = 'http://192.168.1.67'; // IP address of the ESP8266 server
$data = array('suma1' => '1', 'suma2' => '3 '); // Data to be sent

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context); // Send the POST request

echo $result; // Print the response from the ESP8266
?>
