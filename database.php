<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=official-tech-algo-v2', 'root', 'pratham@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo;