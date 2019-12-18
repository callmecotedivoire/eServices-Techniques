<?php
session_start();
$serveur = "localhost"; 
//$login_serveur = "Joomla"; 
//$pswd = "joomlaAZ77*"; 

$login_serveur = "joomla"; 
$pswd = "joomla"; 
$bdd = "notations"; 
$connect = mysql_connect($serveur,$login_serveur,$pswd) or die ('Erreur de connexion. Login et/ou Mot de passe du serveur'); 
mysql_select_db($bdd,$connect) or die ('Erreur de connexion base. Vérifier le fichier config.php : Base de données'); 

$login = $_POST['email'];
$mdp = $_POST['mdp'];

$loginOK = false; 

  $sql = "SELECT * FROM jury WHERE code_acces = '".addslashes($login)."'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);
 
  // On vérifie que l'utilisateur existe bien
  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
   
    // On vérifie que son mot de passe est correct
    if ($login == $data['code_acces']) {
      $loginOK = true;
    }
  }


// Si le login a été validé on recupère les informations de connexion
if ($loginOK) {
	$_SESSION['nom'] = $data['noms_prenoms'];
	$_SESSION['fonction'] = $data['fonction'];
	$_SESSION['id_jury'] = $data['id_jury'];
	
header('Location:../index.php?link=acceuil');
  
}
else {
  echo 'Incorrect';
}

?>