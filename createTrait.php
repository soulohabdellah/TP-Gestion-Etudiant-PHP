<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Etudiant menu</title>
  </head>
  <body>
  <?php 
//include('connexiondata.php');
require('connexiondata.php');

?>


<?php 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
if(empty($nom)||empty($prenom)||empty($age)){
if(empty($nom)){
    
echo '<div class="alert alert-danger"> Nom est vide  </div>';
}
if(empty($prenom)){
    echo '<div class="alert alert-danger"> Prénom est vide  </div>';
}
if(empty($age)){
    echo '<div class="alert alert-danger"> Age est vide  </div>';
}

echo '<a href="javascript:self.history.back()">Precedent</a>';
}else{
    $request="INSERT INTO etudiants(nom,prenom,age) VALUES('$nom','$prenom','$age')";
    $con->exec($request);

    header("Location:menuPrincipale.php");
}
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>











