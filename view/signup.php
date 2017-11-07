<style>
h2, form{
  text-align: center;
}
</style>



<!DOCTYPE html>
<html>
<head>
 <title>Inscription</title>
 <meta charset="utf-8">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>


  <h2>Inscription</h2>
  <form action="signup.php" method="post">
  E-Mail :<br>
  <input name="mail" type="email"><br>
  Mot de passe :<br>
  <input name="password" type="password"> <br>
  Confirmer mot de passe :<br>
  <input name="pswvalid" type="password"> <br>
  <input type="submit" name="submit" value="S'inscrire" />
</form>


</body>
</html>
