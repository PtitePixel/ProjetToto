<div class="info">
  <?php
foreach ($results as $key=>$value) {

foreach ($value as $k => $v) {
    if ($k == "stu_id"){
    echo "ID :  <span>$v</span>" . "</br>";
  }
  if ($k == "stu_lastname"){
    echo "Nom : <span>$v</span>". "</br>";
  }
  if ($k == "stu_firstname"){
    echo "Prénom : <span>$v</span>". "</br>";
  }
  if ($k == "stu_birthdate"){
    echo "Date de naissance : <span>$v</span>". "</br>";
  }
  if ($k == "stu_email"){
    echo "Email : <span>$v</span>". "</br>";
  }
  if ($k == ""){
    echo " Age : <span>$v</span>". "</br>";
  }
  if ($k == "cit_name"){
    echo "Ville : <span>$v</span>". "</br>";
  }
  if ($k == "stu_friendliness"){
    echo "Sympathie : <span>$v</span>". "</br>";
  }
  if ($k == "loc_name"){
    echo "Session : <span>$v</span>". "</br>";
  }
 }
}
?>
</div>
