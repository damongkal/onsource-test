<?php
include_once('../bootstrap.php');
$users = new users($mysqli);
header('Content-Type: application/json; charset=utf-8');
echo $users->getAll();
