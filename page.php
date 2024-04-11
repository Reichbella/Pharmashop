<?php
$server="localhost";
$user="root";
$pwd="";
$db="Pharmashop";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$ordonance = $_POST['ordonance'];
$allergies = $_POST['allergies'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];

 //CONNEXION AVEC LA BASE DE DONNÉES
 $connexion=mysqli_connect($server,$user,$pwd,$db);
$query="insert into Commande(nom,prenom,genre,ordonance, allergies,telephone,email,ville,adresse) values('".$nom."','".$prenom."','".$sexe."','".$ordonance."','".$allergies."','".$telephone."','".$email."','".$ville."','".$adresse."')";
mysqli_query($connexion,$query);

?>