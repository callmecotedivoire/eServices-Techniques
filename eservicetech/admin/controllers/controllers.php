<?php
session_start();
include('db_config.php');

//inscription utilisateurs
if (isset($_POST['inscription_users'])) {
//echo 'dedans';
$code_client = $_POST['code_client'];
$mail = $_POST['mail'];
$datenais = $_POST['datenais'];
$nom_prenom = addslashes(htmlspecialchars($_POST['nom_prenom']));
$contact = $_POST['contact'];
$domaine = $_POST['domaine'];
$mdp = $_POST['mdp'];

$sql="
INSERT INTO users(
`code_client` ,
`nom_prenom` ,
`datenais` ,
`contact` ,
`mail` ,
`domaine` ,
`mdp` 
)
VALUES ('$code_client',  '$nom_prenom',  '$datenais',  '$contact',  '$mail','$domaine','$mdp');";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());

echo "<script type='text/javascript'>document.location.replace('../?link=user_login&user=$mail');</script>";

//header('Location:index.php?link=user_login');            
  }
//Fin inscription
//Inscription Agent

if (isset($_POST['enregistrer_agent'])) {
//echo 'dedans';
$matricule = $_POST['matricule'];
$nom_prenom = $_POST['nom_prenom'];
$sexe = $_POST['sexe'];
$datenais = $_POST['datenais'];
$id_matri = $_POST['id_matri'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$niveau =$_POST['niveau'];
$id_service = $_POST['id_service'];
$id_fonction = $_POST['id_fonction'];
$photo = $_POST['photo'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];
$statut = $_POST['statut'];
$useraddid = $_POST['useraddid'];

$sql="
INSERT INTO  `eservices`.`agent` (
`matricule` ,
`nom_prenom` ,
`sexe` ,
`datenais` ,
`id_matri` ,
`contact` ,
`email` ,
`niveau` ,
`id_service` ,
`id_fonction` ,
`photo` ,
`login` ,
`mdp` ,
`statut` ,
`useraddid`
)
VALUES ('$matricule',  '$nom_prenom',  '$sexe',  '$datenais',  '$id_matri',  '$contact',  '$email',  '$niveau',  '$id_service',  '$id_fonction',  '$photo',  '$login',  '$mdp',  '$statut',  '$useraddid'
);";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());

echo "<script type='text/javascript'>document.location.replace('../?link=saisie_agents&action=success');</script>";

//header('Location:index.php?link=user_login');            
  }
//Fin inscription agents

//Debut connexion
if (isset($_POST['login'])) {	
$login = $_POST['email'];
$mdp= $_POST['password'];
$profil = $_POST['login'];

switch ($profil) {
  case 'user_login':
		
  $sql = "SELECT * FROM users WHERE mail ='$login' AND mdp='$mdp'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);

  $_SESSION['id'] = $data['id_users'];
  $_SESSION['code_client'] = $data['code_client'];
  $_SESSION['nom_prenom'] = uc_strtoupper_fr($data['nom_prenom']);
  $_SESSION['info'] = "Bienvenue";
  $_SESSION['contact'] = $data['contact'];
  $_SESSION['type'] = "1";
  $_SESSION['mail'] = $data['mail'];
  $_SESSION['domaine'] = uc_strtoupper_fr($data['domaine']);
  
echo "<script type='text/javascript'>document.location.replace('../?link=dashboard');</script>";}

 else{

echo "<script type='text/javascript'>document.location.replace('../?link=user_login&action=error');</script>";

}
break;

  case 'admin_login':
$login = $_POST['username'];
  
  $sql = "SELECT * FROM agent WHERE login ='$login' AND mdp='$mdp'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);

	  $_SESSION['id'] = $data['id_agent'];
	  $_SESSION['login'] = $data['mail'];
	  $_SESSION['email'] = $data['mail'];
	  $_SESSION['info'] = "Bienvenue";
	  $_SESSION['nom_prenom'] = uc_strtoupper_fr($data['nom_prenom']);
	  $_SESSION['type'] = "2";
	  $_SESSION['id_service'] = $data['id_service'];
	  $_SESSION['id_fonction'] = $data['id_fonction'];

echo "<script type='text/javascript'>document.location.replace('../?link=dashboard');</script>";
}
else {
echo "<script type='text/javascript'>document.location.replace('../?link=user_login&action=error');</script>";
}
      break;
}
}

//Fin connexion
//Debut demande

if (isset($_POST['new_demande'])) {

$code_demande = $_POST['code_demande'];
$commune = addslashes(htmlspecialchars($_POST['commune']));
$quartier = addslashes(htmlspecialchars($_POST['quartier']));
$localisation = addslashes(htmlspecialchars($_POST['localisation']));
$categorie = $_POST['categorie'];
$Activite = addslashes(htmlspecialchars($_POST['Activite']));
$photo1 = $_POST['photo1'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];
$photo4= $_POST['photo4'];
$useraddid = $_POST['useraddid'];
$residence= addslashes(htmlspecialchars($_POST['residence']));


$sql="
INSERT INTO  demandes (
`code_demande` ,
`commune` ,
`quartier` ,
`localisation` ,
`categorie` ,
`Activite` ,
`photo1` ,
`photo2` ,
`photo3` ,
`photo4` ,
`statut` ,
`residence` ,
`useraddid`
)
VALUES (
'$code_demande',  '$commune',  '$quartier',  '$localisation ',  '$categorie',  '$Activite',  '$photo1',  '$photo2',  '$photo3',  '$photo4',  '0',  '$residence',  '$useraddid')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());

echo "<script type='text/javascript'>document.location.replace('../?link=new_demande&action=success');</script>";

  }
//Fin demande

//Imputation
if (isset($_POST['imputation'])) {
$id_impute_par = $_POST['impute_par'];
$id_impute_a = $_POST['id_impute_a'];
$id_demandes = $_POST['id_demandes'];
$note_instruction = addslashes(htmlspecialchars($_POST['note_instruction']));
$useraddid_imputation = $_POST['impute_par'];


$sql="
INSERT INTO  `eservices`.`imputation` (
`id_impute_par` ,
`id_impute_a` ,
`id_demandes` ,
`note_instruction` ,
`statut` ,
`useraddid_imputation`
)
VALUES (
'$id_impute_par',  '$id_impute_a',  '$id_demandes',  '$note_instruction',  '$statut',  '$useraddid_imputation'
);";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());

//Modifier statut

$sql_modif="UPDATE  `eservices`.`demandes` SET  `statut` =  '1' WHERE  `demandes`.`id_demandes` ='$id_demandes';";
mysql_query($sql_modif) or die('ErreurSQL!<br>'.$sql_modif.'<br>'.mysql_error());

echo "<script type='text/javascript'>document.location.replace('../?link=listes_a_imputer&action=success');</script>";

//header('Location:index.php?link=user_login');            
  }
//Fin imputation
