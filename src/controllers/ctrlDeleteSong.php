<?php

function ctrlDeleteSong($request, $response, $container) {

        $data = json_decode(file_get_contents('php://input'), true);
        if (!isset($data['id_song'])) {
            throw new \Exception("ID de canción no proporcionado");
        }

        $id_song = $data['id_song'];
        $songsModel = $container->Songs();
        $result = $songsModel->delete($id_song);
        
        $response->setJson();
        $response->set('success', true);
        return $response;
    }

