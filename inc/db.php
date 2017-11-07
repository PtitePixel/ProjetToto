<?php

$dsn = 'mysql:dbname='.$config['DB_NAME'].';host='.$config['DB_HOST'].';charset=UTF8';

try {
  $pdo = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);
  // Génère automatiquement une exception si erreur dans la requete
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e){
  echo "Connexion echouée" . $e->getMessage();

}
