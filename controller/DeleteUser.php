<?php

require_once __DIR__ . '../../vendor/autoload.php';

if(isset($_GET['username'])) {

$username = $_GET['username'];

$collection = (new MongoDB\Client)->mydb->users;
$deleteResult = $collection->deleteMany(['username' => $username]);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

header("Location:../index.php");
}
?>