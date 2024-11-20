<?php

function ctrlSongsList($request, $response, $container){
    $songModel = $container->Songs();

    $songs = $songModel->getAllSongs();

    $response->set('songs', $songs);
    $response->setTemplate("songs.php");

    return $response;
}