<?php
foreach ($results as $key=>$value) {

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
  if ($k == "stu_age"){
    echo "<td> $v</td>";
  }
  if ($k == "city_cit_id"){
    echo "<td> $v</td>";
  }
  if ($k == "stu_friendliness"){
    echo "<td> $v</td>";
  }
  if ($k == "session_ses_id"){
    echo "<td> $v</td>";
  }
  }
?>
