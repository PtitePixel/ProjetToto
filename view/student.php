<?php
foreach ($results as $key=>$value) {

foreach ($value as $k => $v) {
    if ($k == "stu_id"){
    echo "<td> ID :  $v</td>" . "</br>";
  }
  if ($k == "stu_lastname"){
    echo "<td> Nom : $v</td>". "</br>";
  }
  if ($k == "stu_firstname"){
    echo "<td> Prénom : $v</td>". "</br>";
  }
  if ($k == "stu_birthdate"){
    echo "<td> Date de naissance : $v</td>". "</br>";
  }
  if ($k == "stu_email"){
    echo "<td> Email : $v</td>". "</br>";
  }
  if ($k == ""){
    echo "<td> Age : $v</td>". "</br>";
  }
  if ($k == "cit_name"){
    echo "<td> Ville : $v</td>". "</br>";
  }
  if ($k == "stu_friendliness"){
    echo "<td> Sympathie : $v</td>". "</br>";
  }
  if ($k == "loc_name"){
    echo "<td> Session :  $v</td>". "</br>";
  }
 }
}
?>
