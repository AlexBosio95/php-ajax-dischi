<?php

include __DIR__ . '/../database.php';

header("Content-Type: application/json");

if (empty($_GET['genere'])) {
    echo json_encode($database);
    
} else {

    $arrayFiltered = [];
    $genere = $_GET['genere'];

    foreach ($database as $key => $value) {

        if ($value['genre'] == $genere){
            $arrayFiltered[] = $value;
        }
    }

    echo json_encode($arrayFiltered);
}




?>