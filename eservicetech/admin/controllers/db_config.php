<?php
$serveur = "localhost"; 
$login_serveur = "Joomla"; 
$pswd = "joomlaAZ77*"; 
$bdd = "eservices"; 
$connect = mysql_connect($serveur,$login_serveur,$pswd) or die ('Erreur de connexion. Login et/ou Mot de passe de la base'); 
mysql_select_db($bdd,$connect) or die (mysql_error().'<br>'.'Erreur de connexion base. Vérifier le fichier de configuration config.php');


if (!isset($_SESSION['token'])){
    $_SESSION['token']=md5(time()*rand(75,658));
	}

header( 'content-type: text/html; charset=utf-8' );

include('datefct.php');

function uc_strtoupper_fr($chaine)
{
$chaine=strtoupper($chaine);
$chaine = strtr($chaine,"äâàáåãéèëêòóôõöøìíîïùúûüýñçþÿæœðø","ÄÂÀÁÅÃÉÈËÊÒÓÔÕÖØÌÍÎÏÙÚÛÜÝÑÇÞÝÆŒÐØ");
$chaine=utf8_encode($chaine);


return $chaine;
}

?>
