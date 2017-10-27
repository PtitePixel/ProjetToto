<pre><?php

require_once __DIR__.'/../inc/config.php';

$page = isset($_GET['page'])?intval($_GET['page']):1;
$offset=($page-1) *5;
if ($offset<=0){
  $offset = 0;
}
$sql= 'SELECT *
       FROM student
       LIMIT 5 OFFSET '.$offset;

$PDOStatement=$pdo->query($sql);
if ($PDOStatement === false) {
  print_r ($pdo-> errorInfo());
  exit;
}
$results = $PDOStatement->fetchAll (PDO::FETCH_ASSOC);


require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/list.php';
require_once __DIR__.'/../view/footer.php';
 ?> </pre>
