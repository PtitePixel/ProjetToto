<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet TOTO</title>
    <link rel="stylesheet" href="css/stylesheet.css">
  </head>
  <body>
   <div class="form">
    <nav>
      <ul>
        <li>  <a href="index.php"> HOME </a> </li>
        <li>  <a href="index.php"> TOUTES LES SESSIONS </a> </li>
        <li>  <a href="liste.php"> TOUS LES ETUDIANTS </a> </li>
        <li>  <a href="add.php"> AJOUT D'UN ETUDIANT </a> </li>
        <?php if (isset($_SESSION['usr_id'])){
        ?>    <li> <a href="logout.php"> SE DECONNECTER </a></li>
        <?php
        }else{
        ?>
         <li>  <a href="signup.php"> S'INSCRIRE </a> </li>
         <li>  <a href="signin.php"> SE CONNECTER </a> </li>

         <?php
        }
        ?>

    </ul>

        <form action="liste.php" method="get">
         <input type="text" name="term" /><br />
         <input type="submit" name="submit" value="Rechercher" />
       </form>
    </nav>
   </div>
