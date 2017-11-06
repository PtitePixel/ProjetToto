<!DOCTYPE html>
<html>
<head>
 <title>UPLOAD</title>
 <meta charset="utf-8">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
 <div class="container">
   <div class="row">
     <div class="col-md-2 col-sm-2 col-xs-0"></div>
     <div class="col-md-8 col-sm-8 col-xs-12">


       <!-- Si envoie de ficher => POST + enctype !!-->
       <form action="" method="post" enctype="multipart/form-data">
         <fieldset>
         <input type="hidden" name="submitFile" value="1" />
         <label for="fileForm">Fichier</label>
         <input type="file" name="fileForm" id="fileForm" />
         <p class="help-block">.csv</p>
         <br />
         <input type="submit" class="upload" value="Uploader" />
         </fieldset>
       </form>
       <br>
    

         <input type="submit" class="upload" value="Exporter" />

       </form>


     </div>
     <div class="col-md-2 col-sm-2 col-xs-0"></div>
   </div>

 </div>

</body>
</html>
