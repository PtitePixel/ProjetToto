

<table>


 <thead>
   <p> Résultat(s) pour le mot '<?php echo $search ?>'</p>
   <div class="nextprev">
     <a href="list.php?idStudent=">&laquo; Précedent</a>

     <a href="list.php?idStudent=">Suivant &raquo;</a>
   </div>

   <tr>
     <th>ID</th>
     <th>Last name</th>
     <th>First name</th>
     <th>Birthdate</th>
     <th>Mail</th>
     <th> Détails </th>
   </tr>
  </thead>

  <?php
  foreach ($results as $key=>$value) {
    ?>
  <tbody>

    <tr>
      <?php
  foreach ($value as $k => $v) {
      if ($k == "stu_id"){
      echo "<td> $v</td>";
    }
    if ($k == "stu_lastname"){
      echo "<td> $v</td>";
    }
    if ($k == "stu_firstname"){
      echo "<td> $v</td>";
    }
    if ($k == "stu_birthdate"){
      echo "<td> $v</td>";
    }
    if ($k == "stu_email"){
      echo "<td> $v</td>";
    }
    ?>
    <?php
    }
  ?>
  <td>  <a href="student.php?idStudent=<?php echo $value['stu_id']; ?>">Info</a> </td>
   </tr>
 </tbody>
 <?php
}


 ?>
</table>
