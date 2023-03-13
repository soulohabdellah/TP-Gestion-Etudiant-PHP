<?php 
//include('connexiondata.php');
require('connexiondata.php');

?>


<?php
$id=$_GET['id'];
$requet="DELETE FROM etudiants WHERE $id=id";
$con->exec($requet);
header("Location:menuPrincipale.php");


?>