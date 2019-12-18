<?php
$serveur = "localhost"; 
$login_serveur = "joomla"; 
$pswd = "joomla"; 
$bdd = "eaa"; 
$connect = mysql_connect($serveur,$login_serveur,$pswd) or die ('Erreur de connexion. Login et/ou Mot de passe de la base'); 
mysql_select_db($bdd,$connect) or die ('Erreur de connexion base. Vérifier le fichier config.php');
mysql_query("SET NAMES 'utf8'");
/*
if (!isset($_SESSION['token'])){
    $_SESSION['token']=md5(time()*rand(75,658));
	}

header( 'content-type: text/html; charset=utf-8' );
*/
include('datefct.php');




?>
