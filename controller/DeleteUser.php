<?php

require_once __DIR__ . '../../vendor/autoload.php';

$collection = (new MongoDB\Client)->mydb->users;
$collection->drop();

$deleteResult = $collection->deleteMany(['state' => 'ny']);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());

header("Location:../index.php");
?>