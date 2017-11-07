<?php

require_once __DIR__.'/../inc/config.php';

session_start();

 $sql= "SELECT *
        FROM student
        INNER JOIN city ON city.cit_id=student.city_cit_id
        INNER JOIN session ON session_ses_id=ses_id
        INNER JOIN location ON location_loc_id=loc_id

        WHERE stu_id =  {$_GET['idStudent']}"
        ;


 $PDOStatement=$pdo->query($sql);
 if ($PDOStatement === false) {
   print_r ($pdo-> errorInfo());
   exit;
 }
 $results = $PDOStatement->fetchAll (PDO::FETCH_ASSOC);









require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/student.php';
require_once __DIR__.'/../view/footer.php';
?>
