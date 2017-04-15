<?php

if (isset($_GET['zip'])) {

    $zip = $_GET['zip'];
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?components=country:US|postal_code:';
    $json = file_get_contents($url . $zip);

    header("Content-Type: application/json");
    echo $json;

}

?>