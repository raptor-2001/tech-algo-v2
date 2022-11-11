<?php

  require  __DIR__.'/vendor/autoload.php';

  use Kreait\Firebase\Factory;
  use Kreait\Firebase\Auth;

  $factory = (new Factory)
      ->withServiceAccount('C:\xampp\htdocs\official-tech-algo-v.2\tech-algo-v2-firebase-adminsdk-2uxhc-1faf348ebc.json')
      ->withDatabaseUri('https://tech-algo-v2-default-rtdb.firebaseio.com/');

  $database = $factory->createDatabase();
  $auth = $factory->createAuth();

?>