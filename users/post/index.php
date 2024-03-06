<?php
include_once('../../bootstrap.php');
$users = new App\Api\users($mysqli);
$userRecord = new App\Api\userRecord;
$userRecord->first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$userRecord->last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
header('Content-Type: application/json; charset=utf-8');
echo $users->create($userRecord);
