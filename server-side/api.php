<?php

include __DIR__ . '/../database.php';

header("Content-Type: application/json");
json_encode($database);

?>