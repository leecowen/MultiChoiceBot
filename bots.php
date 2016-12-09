<?php


$botToken = "317872857:AAHahyAYDj9dTN3sftsXCrLxJ2TuXXRnw-w";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

print_r($update);


?>