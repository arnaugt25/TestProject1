<?php

function ctrlCredits($request, $response, $container){
    $response->setTemplate("credits.php");
    return $response;
}