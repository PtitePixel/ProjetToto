<?php

$dsn = 'mysql:dbname='.$config['DB_NAME'].';host='.$config['DB_HOST'].';charset=UTF8';

try {
  $pdo = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);
}
catch (Exception $e){
  echo "Connexion echouée" . $e->getMessage();

}
