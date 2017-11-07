<?php

require_once __DIR__.'/../inc/config.php';
session_start();

$fname = '';
$lname = '';
$mail = '';
$date = '';
$friendly='';
$ses='';
$city='';


if (!empty($_POST)) {
 $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
 $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
 $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
 $date= isset($_POST['date']) ? $_POST['date'] : '';

 $lname = strtoupper(trim(strip_tags($lname)));
 $fname = ucfirst(trim(strip_tags($fname)));
 $mail = trim(strip_tags($mail));
 $date = trim($date);

 $formOk = true;
	if (empty($lname)) {
		echo 'Nom vide<br>';
		$formOk = false;
	}
	else if (strlen($lname) < 2) {
		echo 'Nom invalide<br>';
	$formOk = false;
  }
  if (empty($fname)) {
		echo 'Prénom vide<br>';
 	$formOk = false;
  }
  else if (strlen($fname) < 2) {
  	echo 'Prénom invalide<br>';
	$formOk = false;
  }
  if (empty($mail)) {
		echo 'Email vide<br>';
		$formOk = false;
	}
  else if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    echo 'Email invalide<br>';
    $formOk = false;
  }
  if (empty($date)) {
		echo 'Date vide<br>';
 	$formOk = false;
  }
  else if (strlen($date) < 10) {
  	echo 'Date invalide<br>';
	$formOk = false;
 }
 if ($formOk) {
		echo '$lname='.$lname.'<br>';
		echo '$fname='.$fname.'<br>';
		echo '$mail='.$mail.'<br>';
		echo '$date='.$date.'<br>';

		$displayForm = false;
	}
}



require_once __DIR__.'/../view/add.php';
?>
