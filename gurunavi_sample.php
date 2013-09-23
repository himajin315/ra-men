<?php

require_once "Gurunavi.php";

$gurunavi = new Gurunavi();

$rests = $gurunavi->search();

foreach ($rests as $rest) {
    echo $rest->get_name(). "\n";
    echo $rest->get_image_url() . "\n";
    echo $rest->get_page_url(). "\n";
    echo $rest->get_latitude() . " " . $rest->get_longitude() . "\n";
    echo $rest->get_address() . "\n";
    echo $rest->get_pref_name(). "\n";

    echo "\n";
}



