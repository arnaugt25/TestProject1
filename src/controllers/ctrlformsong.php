<?php

function ctrlFormSong($request, $response, $container){
    $response->setTemplate("formsongs.php");
    return $response;
}