<?php

$records = json_decode(file_get_contents('records.json'), true);

if (isset($_POST['newRecord'])) {
    array_push($records, $_POST['newRecord']);

    file_put_contents('records.json', json_encode($records));
}

header('Content-Type: application/json');

echo json_encode($records);
