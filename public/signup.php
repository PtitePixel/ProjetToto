<?php
require_once __DIR__.'/../inc/config.php';

session_start();

 $mail = '';
 $password = '';
 $pswvalid = '';

 if (!empty($_POST)) {
  $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
  $password= isset($_POST['password']) ? $_POST['password'] : '';
  $pswvalid= isset($_POST['pswvalid']) ? $_POST['pswvalid'] : '';


  $mail = trim(strip_tags($mail));
  $password = trim($password);
  $password = md5('projetTOTO'.$password.'userpsw');
  $pswvalid = trim($password);
  $pswvalid = md5('projetTOTO'.$pswvalid.'userpsw');

  //Verify
  $sql = " SELECT usr_email
  FROM table1
  WHERE usr_email = :mail";
  $pdoStatement=$pdo->prepare($sql);
  if ($pdoStatement === false) {
    print_r($pdo->errorInfo());
    exit;
  }
  $pdoStatement->bindValue(':mail', $mail, PDO::PARAM_STR);
  $pdoStatement->execute();

  $check=$pdoStatement->rowCount();

  if ($check > 0) {
    echo 'email existe déjà';
  }else {
    //Insert

  $formOk = true;
   if (empty($mail)) {
 		echo 'Email requis<br>';
 		$formOk = false;
 	}
   else if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
     echo 'Email invalide<br>';
     $formOk = false;
   }

   if (empty($password)) {
     echo 'Mot de Passe requis <br>';
     $formOk = false;
   }

    if($_POST['password']!==$_POST['pswvalid']) {
    	echo 'Mot de passe invalide<br>';
    	$formOk = false;
    }

    if ($formOk) {
    echo 'Bravo !';
    $displayForm = false;
    $sql2 = "INSERT INTO table1 (usr_email, usr_password)
    VALUES (:mail, :password)";

    $pdoStatement=$pdo->prepare($sql2);
    if ($pdoStatement === false) {
      print_r($pdo->errorInfo());
      exit;
    }

    $pdoStatement->bindValue(':mail', $mail, PDO::PARAM_STR);
    $pdoStatement->bindValue(':password', $password, PDO::PARAM_STR);

    $pdoStatement->execute();
  }
 	}
 }


 require_once __DIR__.'/../view/header.php';
 require_once __DIR__.'/../view/signup.php';
 require_once __DIR__.'/../view/footer.php';
 ?>
