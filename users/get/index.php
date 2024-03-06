<?php
include_once('../../bootstrap.php');
$users = new users($mysqli);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
header('Content-Type: application/json; charset=utf-8');
echo $users->fetch($id);
