
<?php

$nomServeur = 'localhost';
 $nomUtilisateur = 'root';
  $motDePasse = '';
   $nom_db ='etudiant';
    // établir la connexion 
    
  try{
    $con = new PDO("mysql:host=$nomServeur;dbname=$nom_db",$nomUtilisateur,$motDePasse); 
    echo 'connexion reussite';

  }catch(PDOException $e){
      echo $e->getMessage();

  }
 
?>