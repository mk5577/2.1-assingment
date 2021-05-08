<?php
use Kreait\Firebase\Factory;
require __DIR__.'/vendor/autoload.php';

$factory = (new Factory)
    ->withServiceAccount('credentials.json')
    ->withDatabaseUri('https://megna-form-default-rtdb.firebaseio.com/');;

    $database = $factory->createDatabase();
?>