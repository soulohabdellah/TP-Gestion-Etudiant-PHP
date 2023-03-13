<?php 
//include('connexiondata.php');
require('connexiondata.php');

?>


<?php
$id=$_GET['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$requet="UPDATE etudiants SET nom='$nom',prenom='$prenom',age='$age' WHERE id='$id'";
$con->exec($requet);
header("Location:menuPrincipale.php");


?>