<?php

require_once __DIR__.'/../inc/config.php';

session_start();

if (!empty($_POST)) {
  print_r($_POST);
  print_r($_FILES);

  if (!empty($_FILES)) {
    $fileForm = isset($_FILES ['fileForm']) ? $_FILES['fileForm'] : array();
    $formOK = true;
    $allowedExe = array('csv');
    if ($fileForm['type'] != 'application/octet-stream') {
      echo 'fichier incorrect';
      $formOK=false;
    }
    $dot = strrpos($fileForm['name'], '.');
    $exe = substr($fileForm['name'], $dot+1);
    if (!in_array($exe, $allowedExe)) {
      echo 'nope';
      $formOK= false;
    }
    if ($formOK) {
      $newName= md5(uniqid().'projetTOTO').'.'.$exe;
        if (move_uploaded_file($fileForm['tmp_name'], __DIR__.'/csv/'.$newName)) {
        echo 'upload done';
      }
      else {
        echo 'fail';
       }
     }
     $file= fopen(__DIR__.'/csv/'.$newName, "r");
     if ($file) {
        while (($open = fgets($file)) !== false) {

        $explode = explode(";", $open);
        print_r ($explode);
        $sql = 'INSERT INTO student (stu_lastname, stu_firstname, stu_email, stu_friendliness, stu_birthdate, session_ses_id, city_cit_id)
        VALUES (:lastname, :firstname, :mail, :friendliness, :birthdate, :sessionID, :cityID)';
        $pdoStatement = $pdo->prepare($sql);
        if ($pdoStatement === false) {
        print_r($pdo->errorInfo());
        exit;
        }


        $pdoStatement->bindValue(':lastname', $explode[0], PDO::PARAM_STR);
        $pdoStatement->bindValue(':firstname',$explode[1], PDO::PARAM_STR);
        $pdoStatement->bindValue(':mail', $explode[2], PDO::PARAM_STR);
        $pdoStatement->bindValue(':friendliness', $explode[3] , PDO::PARAM_INT);
        $pdoStatement->bindValue(':birthdate', $explode[4], PDO::PARAM_STR);
        $pdoStatement->bindValue(':sessionID',1, PDO::PARAM_INT);
        $pdoStatement->bindValue(':cityID',4 , PDO::PARAM_INT);

        $pdoStatement->execute();
      }
      if (!feof($file)) {
        echo "";
      }


      fclose($file);
    }
  }
}

/*$file = fopen("export-20171106.csv", "w");
foreach ($array as $line) {
    fputcsv($file, $line)
};
*/
?>
<?php

require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/form.php';
require_once __DIR__.'/../view/footer.php';

 ?>
