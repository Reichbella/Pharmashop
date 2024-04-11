<?php
$server="localhost";
$user="root";
$pwd="";
$db="Pharmashop";
$nom = $_POST['nom'];
 $email = $_POST['email'];
 $msg = $_POST['msg'];
 $connexion= mysqli_connect($server,$user,$pwd,$db);
 $query="insert into Contact(nom,email,msg) values ('".$nom."','".$email."','".$msg."')";
 mysqli_query($connexion,$query);
 header("location:index.php");

?>