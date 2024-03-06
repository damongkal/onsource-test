<?php
include_once('../bootstrap.php');
$users = new App\Api\users($mysqli);
header('Content-Type: application/json; charset=utf-8');
echo $users->getAll();
