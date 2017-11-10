<?php

require_once __DIR__.'/../inc/config.php';


if ($_SESSION['usr_role'] == 'user'){
  header("Location: 403.php");
  }else {

}
 ?>
