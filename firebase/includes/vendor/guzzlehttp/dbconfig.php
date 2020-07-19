<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/test-c422f-firebase-adminsdk-55r34-817a10e32e.json');
$firebase= (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://test-c422f.firebaseio.com/');
    ->create();
$database = $firebase->getDatabase();
?>