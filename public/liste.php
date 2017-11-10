<?php

require_once __DIR__.'/../inc/config.php';



$page = isset($_GET['page'])?intval($_GET['page']):1;
$offset=($page-1) *5;
if ($offset<=0){
  $offset = 0;
}

$search = isset ($_GET['term']) ? trim($_GET['term']):'';

if (!empty($search)) {
  $sql= 'SELECT *
  FROM student
  WHERE stu_lastname LIKE :search
  OR stu_firstname LIKE :search
  OR stu_email LIKE :search

  ';
  $PDOStatement=$pdo->prepare($sql);
  $PDOStatement->bindValue(':search', '%'.$search.'%');


  $PDOStatement->execute();
}
else {

$sql='SELECT *
FROM student
LIMIT 5 OFFSET '.$offset;
$PDOStatement=$pdo->query($sql);
}


if ($PDOStatement === false) {
  print_r ($pdo-> errorInfo());
  exit;
}
$results = $PDOStatement->fetchAll (PDO::FETCH_ASSOC);


if (isset($_SESSION['usr_id'])){

}else {
  header("Location: signin.php");
}


if ($_SESSION['usr_role'] == 'user') {
  header("Location: 403.php");
}else {
  
}








require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/list.php';
require_once __DIR__.'/../view/footer.php';
 ?>
