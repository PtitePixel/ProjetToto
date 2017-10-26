<table>
 <thead>

   <tr>
     <th>ID</th>
     <th>Last name</th>
     <th>First name</th>
     <th>Birthdate</th>
     <th>Mail</th>
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
    }
 ?>
   </tr>
 </tbody>
 <?php
}


 ?>
</table>
