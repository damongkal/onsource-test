<?php
include_once('../../bootstrap.php');
$users = new App\Api\users($mysqli);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
header('Content-Type: application/json; charset=utf-8');
echo $users->delete($id);
