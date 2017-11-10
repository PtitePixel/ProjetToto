<?php
require_once __DIR__.'/../inc/config.php';

$mail = '';
$password = '';




if (!empty($_POST)) {
 $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
 $password= isset($_POST['password']) ? $_POST['password'] : '';

 $sql = "SELECT usr_email, usr_password, usr_id, usr_role
 FROM table1
 WHERE usr_email = :mail";
 var_dump ($mail);
 $pdoStatement=$pdo->prepare($sql);
 $pdoStatement->bindValue(':mail', $mail, PDO::PARAM_STR);

 if ($pdoStatement->execute() === false) {
   print_r($pdoStatement->errorInfo());
   exit;
 }
 $resultat =$pdoStatement->fetch();
 print_r($resultat);

 $mail = trim(strip_tags($mail));
 $password = trim($password);
 $password = md5('projetTOTO'.$password.'userpsw');

 $formOk = true;
  if (empty($mail)) {
   echo 'Email requis<br>';
   $formOk = false;
 }
  else if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    echo 'Email incorrect<br>';
    $formOk = false;
  }

  if ($password != $resultat['usr_password']) {
    echo 'Mot de Passe requis <br>';
    $formOk = false;
  }else {
    echo 'Mot de passe Ok';
  }

   if ($formOk) {
     $_SESSION['usr_id'] =$resultat['usr_id'];
     $_SESSION['usr_role']=$resultat['usr_role'];
     echo '<br>Connecter!<br>'. 'IP: '.$_SERVER['REMOTE_ADDR'].'<br>'.'ID: '.$resultat['usr_id'];

     $displayForm = false;
   }
}


require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/signin.php';
require_once __DIR__.'/../view/footer.php';
?>
