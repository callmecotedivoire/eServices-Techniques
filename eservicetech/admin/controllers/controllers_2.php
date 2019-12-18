<?php
session_start();
include('db_config.php');
//Connexions admin

if (isset($_POST['login'])) {
	
$login = $_POST['email'];
$mdp= md5($_POST['password']);
$profil = $_POST['login'];

switch ($profil) {
    case 'user_login':
		
  $sql = "SELECT * FROM professeurs WHERE mail ='$login' AND mdp='$mdp'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
   

  $_SESSION['id'] = $data['id_administration'];
  $_SESSION['login'] = $data['mail'];
  $_SESSION['email'] = $data['mail'];
  $_SESSION['info'] = "Bienvenue";
  $_SESSION['nom'] = $data['noms_prenoms'];
  $_SESSION['type'] = "2";
  $_SESSION['sexe'] = $data['sexe'];
  $_SESSION['nom_admin'] = uc_strtoupper_fr($data['nom_prenoms']);
  
   header('Location:../?link=dashboard');
  
}

else

 {

  header('Location:../?link=login&action=error');

}
        
        break;
		
    case 3:
 
 $sql = "SELECT * FROM administration WHERE mail ='$login' AND mdp='$mdp'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
   

  $_SESSION['id'] = $data['id_administration'];
  $_SESSION['login'] = $data['mail'];
  $_SESSION['email'] = $data['mail'];
  $_SESSION['info'] = "Bienvenue";
  $_SESSION['nom'] = $data['nom_prenoms'];
  $_SESSION['type'] = "3";
  $_SESSION['sexe'] = $data['sexe'];
  $_SESSION['nom_admin'] = uc_strtoupper_fr($data['nom_prenoms']);


   header('Location:../?link=dashboard');
  
}

else

 {

  header('Location:../?link=login&action=error');

}
        break;
}
}
if (isset($_POST['login'])) {

$login = $_POST['login'];
$mdp= md5($_POST['mdp']);


 $sql = "SELECT * FROM etudiants, filieres WHERE code_etudiant ='$login'  AND mdp='$mdp'
 AND etudiants.id_niveau = filieres.id_filieres";
 
 echo$sql;
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
   
  $_SESSION['id'] = $data['id_etudiants'];
  $_SESSION['code_etudiant'] = $data['code_etudiant'];
  $_SESSION['login'] = $data['mail'];
  $_SESSION['email'] = $data['mail'];
  $_SESSION['sexe'] = $data['sexe'];
  $_SESSION['filiere'] = $data['intitule_filieres'];
  $_SESSION['id_filiere'] = $data['id_niveau'];
  $_SESSION['info'] = "Bienvenue";
  $_SESSION['nom_etudiant'] = uc_strtoupper_fr($data['nom']);
  $_SESSION['prenoms'] = uc_strtoupper_fr($data['prenoms']);
  $_SESSION['datenais'] = $data['datenais'];
  $_SESSION['type'] = "1";
  
   header('Location:../?link=dashboard');
  
}

else

 {

  header('Location:../?link=login&action=error');

}

}
// Fin gestion des connexions2


// Gérer les connexions 2

//echo "connexion";
//exit;

if (isset($_GET['login'])) {

$login = $_GET['login'];
$mdp= $_GET['mdp'];

  $sql = "SELECT * FROM etudiants WHERE mail ='$login' AND mdp='$mdp'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
  $_SESSION['id'] = $data['id_etudiants'];
  $_SESSION['login'] = $data['mail'];
  $_SESSION['email'] = $data['mail'];
  $_SESSION['sexe'] = $data['sexe'];
  $_SESSION['info'] = "Bienvenue";
  $_SESSION['nom'] = $data['nom'];
  $_SESSION['prenoms'] = $data['prenoms'];
  $_SESSION['type'] = "1";
  
   header('Location:../?link=dashboard');
  
}

else

 {

  header('Location:../?link=login&action=error');

}
}
//fin connexions





//Debut filieres

if (isset($_POST['send_filiere'])) {
//echo 'dedans';
$filiere = addslashes($_POST['filiere']);
$sql="INSERT INTO filieres(intitule_filieres) VALUES('$filiere')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());
header("Location:../?link=filieres");            
  }
 // echo 'avant';
//Suppression des filieres
if (isset($_GET['id_filieres'])) {
$id_fil = $_GET['id_filieres'];
$sql = "DELETE FROM filieres WHERE id_filieres ='$id_fil'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
header('Location:../?link=filieres');
//echo 'dedans';
}
//Modification des filières

if (isset($_POST['modif_filiere'])) {

$id_fil = $_GET['id_filieres'];
$fil = $_GET['filieres'];

$sql = "UPDATE filieres SET  intitule_filieres = '$fil' WHERE  id_filieres ='$id_fil'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
 
   header('Location:../?link=filieres');

}




//Fin filières


//Debut unite

if (isset($_POST['send_unite'])) {
//echo 'dedans';
$unite_p = addslashes($_POST['unite_p']);
$code_u = $_POST['code_u'];
$dep_u = $_POST['dep_u'];
$niveau = $_POST['niveau'];

$sql="INSERT INTO unites_pedagogiques(id_niveau,departement, unites_pedagogiques, code, useraddid ) VALUES('$niveau','$dep_u', '$unite_p', '$code_u', '1')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());
header("Location:../?link=up");            
  }
 // echo 'avant';
//Suppression des unité
if (isset($_GET['id_unite'])) {
$id_unite = $_GET['id_unite'];
$sql = "DELETE FROM unites_pedagogiques WHERE id_unites_pedagogiques ='$id_unite'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
header('Location:../?link=up');
//echo 'dedans';
}
//Modification des unité

if (isset($_POST['modif_unite'])) {

$id_unite= $_GET['id_unite'];
$unite = $_GET['unite'];

$sql = "UPDATE unites_pedagogiques SET  unites_pedagogiques = '$unite' WHERE  id_funites_pedagogiques ='$id_unite'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
 
   header('Location:../?link=up');

}

//Fin unité

//Debut disciplines enseignants

if (isset($_POST['send_affectation_disciplines'])) {
//echo 'dedans';
$id_disciplines = $_POST['id_disciplines'];
$id_professeurs = $_POST['id_professeurs'];

$sql="INSERT INTO disciplines_professeurs (id_professeurs, id_disciplines) VALUES ('$id_professeurs', '$id_disciplines');";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());
header("Location:../?link=affectation_disciplines");            
  }
 // echo 'avant';
//Suppression des diciplines
if (isset($_GET['id_disciplines_professeurs'])) {
$id_disciplines_professeurs = $_GET['id_disciplines_professeurs'];
$sql = "DELETE FROM disciplines_professeurs WHERE id_disciplines_professeurs ='$id_disciplines_professeurs'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
header('Location:../?link=affectation_disciplines');
//echo 'dedans';
}
//Modification des diciplines

if (isset($_POST['modif_unite'])) {

$id_unite= $_GET['id_unite'];
$unite = $_GET['unite'];

$sql = "UPDATE unites_pedagogiques SET  unites_pedagogiques = '$unite' WHERE  id_funites_pedagogiques ='$id_unite'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
 
   header('Location:../?link=up');

}




//Fin affectation disciplines enseignants





//Debut dicipline

if (isset($_POST['send_dicipline'])) {
//echo 'dedans';
$unite_p = $_POST['unite_p'];
$niveau = $_POST['niveau'];
$code_d = $_POST['code_d'];
$intitule_discipline = addslashes(htmlspecialchars($_POST['intitule_discipline']));
$credit_sem1 = $_POST['credit_sem1'];
$credit_sem2 = $_POST['credit_sem2'];
$vh1 = $_POST['vh1'];
$vh2= $_POST['vh2'];
$coef= $_POST['coef'];
$categorie= $_POST['categorie'];

$sql="INSERT INTO disciplines(id_niveaux,id_unites_pedagogiques,categorie,code_d,intitule_disciplines,coeficient,credit_sem1,credit_sem2,vh1,vh2)
 VALUES ('$niveau','$unite_p','$categorie','$code_d','$intitule_discipline','$coef','$credit_sem1','$credit_sem2','$vh1','$vh2')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());
header("Location:../?link=disciplines");            
  }
 // echo 'avant';
//Suppression des diciplines
if (isset($_GET['id_disciplines'])) {
$id_disciplines = $_GET['id_disciplines'];
$sql = "DELETE FROM disciplines WHERE id_disciplines ='$id_disciplines'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
header('Location:../?link=disciplines');
//echo 'dedans';
}
//Modification des diciplines

if (isset($_POST['modif_unite'])) {

$id_unite= $_GET['id_unite'];
$unite = $_GET['unite'];

$sql = "UPDATE unites_pedagogiques SET  unites_pedagogiques = '$unite' WHERE  id_funites_pedagogiques ='$id_unite'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
 
   header('Location:../?link=up');

}




//Fin diciplines

// Gestion des inscription

if (isset($_POST['inscrire_adherents'])) {

$titre_admission = $_POST['titre_admission'];
$code_etudiant = $_POST['code_etudiant'];
$nom =$_POST['nom'];
$prenom = $_POST['prenoms'];
$niveau = $_POST['niveau'];

//echo $nom;echo $prenom;
//exit;


$sexe = $_POST['sexe'];
$nationalite = $_POST['nationalite'];
$datenais = $_POST['datenais'];
$lieunais = utf8_encode($_POST['lieunais']);
$situation_familiale = $_POST['Situation_familiale'];
$adresse = $_POST['adresse'];
$details= $_POST['details'];
$annee_obtention = $_POST['annee_obtention'];
$regime_boursier = $_POST['regime_boursier'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$type_tuteur = $_POST['type_tuteur'];
$nom_prenoms_tuteur = $_POST['nom_prenoms_tuteur'];
$mail_tuteur = $_POST['mail_tuteur'];
$contact_tuteur = $_POST['contact_tuteur'];
$profession_tuteur = $_POST['profession_tuteur'];
$mdp = MD5($_POST['mdp']);



//echo $code;

$sql="
INSERT INTO  `eaa`.`etudiants` (
id_niveau,
`code_etudiant` ,
`nom` ,
`prenoms` ,
`nationalite` ,
`sexe` ,
`datenais` ,
`lieunais` ,
`situation_familiale` ,
`adresse` ,
`mobile` ,
`fixe` ,
`mail` ,
`titre_admission` ,
`annee_obtention` ,
`pays_origine` ,
`regime_boursier` ,
`type_tuteur` ,
`nom_tuteur` ,
`adresse_tuteur` ,
`telephone_tuteur` ,
`mail_tuteur` ,
`profession_tuteur` ,
`details` ,
`mdp`,
`dateaj`

)
VALUES ('$niveau','$code_etudiant',  '$nom',  '$prenom',  '$nationalite',  '$sexe',  '$datenais',  '$lieunais',  '$situation_familiale',  
'$adresse',  '$mobile',  '$fixe',  '$mail', '$titre_admission',  '$annee_obtention',  '$pays_origine ',  '$regime_boursier',  '$type_tuteur',  '$nom_tuteur', 
 '$adresse_tuteur',  '$telephone_tuteur',  '$mail_tuteur',  '$profession_tuteur',  '$details',  '$mdp', CURRENT_TIMESTAMP);
";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());


header('Location:controllers.php?login='.$mail.'&mdp='.$mdp.'');


  }

// fin Gestion des adhérents

// Gestion des réservations

if (isset($_POST['reserver_ok'])) {

$id_serv = $_POST['id_serv'];
$code = $_POST['code'];
$id_client = $_POST['id_client'];
$debut = $_POST['debut'];
$fin = $_POST['fin'];
$nb_enfant = $_POST['nb_enfant'];
$montant = $_POST['montant'];

$sql="INSERT INTO reservation(code, id_client, id_service, debut, fin, nb_enfants, montant ) VALUES('$code', '$id_client', '$id_serv', '$debut', '$fin', '$nb_enfant', '$montant')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());


header("Location:http://www.jciabidjan.org/paiement/console.php?code=$code&montant=$montant");            


  }

//Gestion des notes

if (isset($_POST['send_notes'])) {
$disc = $_POST['disc'];
$nb = $_POST['nb_notation'];
$id_prof = $_POST['id_prof'];
$filiere = $_POST['fil'];

$sql_note ="INSERT INTO discipline_evaluation (id_discipline,id_filiere,id_note,id_prof)
VALUES ('$disc',  '$filiere',  '$nb', '$id_prof');";
mysql_query($sql_note) or die('ErreurSQL!<br>'.$sql_note.'<br>'.mysql_error());  



foreach ( $_POST as $post => $val )  {            
        $$post = $val;
 
 $sql=" INSERT INTO  `eaa`.`notations` (
nb_notation,
id_professeurs ,
id_etudiants ,
id_disciplines ,
note,
id_filiere 
)
VALUES (
'$nb','$id_prof',  '$post',  '$disc',  '$val', '$filiere');";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());  
$sql2 = "DELETE FROM notations WHERE id_etudiants =0";
$req2 = mysql_query($sql2) or die('Erreur SQL : <br />'.$sql2.'<br>'.mysql_error());

header('Location:../?link=notes_menus');

    echo $disc;
	echo $post;
	echo $val;
	echo '-';
	}
}



//Fin Gestion des notes






//Modification des notes

if (isset($_POST['modif_notes'])) {
	
$disc = $_POST['disc'];
$nb = $_POST['nb_notation'];
$id_prof = $_POST['id_prof'];
$filiere = $_POST['fil'];
$id_notation = $_POST['id_notations'];

//echo $id_notation;
//echo"okk";

foreach ( $_POST as $post => $val )  {            
        $$post = $val;
		
//echo $post; echo '-'; echo $val; echo '<br/>';
 
$sql="UPDATE notations SET  note = '$val' WHERE  id_notations ='$post'";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());  

	}
	
header('Location:../?link=voir_evaluations');	
}


//Fin modification des notes



//Validations des notes

if (isset($_GET['action_valider_notes'])) {
	
$disc = $_GET['valider_id_discipline'];
$nb = $_GET['valider_note'];
$filiere = $_GET['valider_id_filieres'];

$sql="UPDATE  `eaa`.`notations` SET  `statut` =  '1' 
WHERE  `nb_notation` ='$nb'
AND  `id_filiere` =$filiere
AND  `id_disciplines` ='$disc'";

mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());  


header('Location:../?link=voir_evaluations');
	
}

//Fin Validations des notes








// Gestion des livres
//Ajouter un livre

if (($_POST['send_livre'])=="send_livre") {

$code= $_POST['code'];
//echo $code;
//Envoi du fichier PDF
$target_dir = "../../images/biblio/pdf/";
$extensions_valides = array( 'pdf' , 'docx' , 'doc' , 'png' );
$extension_upload = strtolower(substr(strrchr($_FILES['file-pdf']['name'], '.')  ,1)  );

if ( in_array($extension_upload,$extensions_valides) )
 {
$newname_pdf = $code.".".$extension_upload;
$target_file = $target_dir . $newname_pdf;
$uploadOk = 1;
//echo $target_file; 



}else{
$uploadOk = 0;
  echo "Extension pas bonne";}

if ($uploadOk==0){
  echo "Impossible d'envoyer la photo, vérifiez sa taille et son type";
} else{
if (move_uploaded_file($_FILES["file-pdf"]["tmp_name"], $target_file)) {

      // echo "The file ". basename( $_FILES["lien_image"]["name"]). " has been uploaded.";
   
$titre= addslashes($_POST['titre']);
$id_biblio_auteur = $_POST['auteur'];
$id_biblio_domaine = $_POST['categorie'];
$id_biblio_genre  =$_POST['genre'];
$lien_image = $newname_img;
$lien_pdf = $newname_pdf;
$userid = $_SESSION['id'];

//echo $lien_image;


$sql="INSERT INTO eaa.biblio_livre (
code_livre ,
id_biblio_auteur ,
id_biblio_domaine ,
id_biblio_genre ,
titre ,
image ,
fichier 
)
VALUES ('$code',  '$id_biblio_auteur',  '$id_biblio_domaine',  '$id_biblio_genre',  '$titre',  '$lien_image',  '$lien_pdf')";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());


header('Location:../index.php?link=biblio_livre&result=success');

} else {
        echo "Sorry, there was an error uploading your file.";
    }

}
  }


  //Fin Ajouter un article

  //Modifier un article


if (($_POST['action'])=="update_article") {
$images_ok2 = $_FILES['lien_image']['name']; 
$lien_img = $_POST['img'];

if (($images_ok2)=="") {

$lien_img_ok = $lien_img;

//echo $lien_img_ok;


} else{

  
$code= $_POST['code'];
$target_dir = "../../images/articles/";
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(substr(strrchr($_FILES['lien_image']['name'], '.')  ,1)  );

if ( in_array($extension_upload,$extensions_valides) )
 {
$newname = $code.".".$extension_upload;
$target_file = $target_dir . $newname;
$uploadOk = 1;
//echo $target_file; 

}else{
$uploadOk = 0;
  echo "Extension pas bonne";}

if ($uploadOk==0){
  echo "Impossible d'envoyer la photo, vérifiez sa taille et son type";
} else{
  
if (move_uploaded_file($_FILES["lien_image"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["lien_image"]["name"]). " has been uploaded.";

  $lien_img_ok = $newname;

 // echo $lien_img_ok;

}else {
        echo "Sorry, there was an error uploading your file.";
    }

}
}
 


$lien_image = $lien_img_ok;
$titre= addslashes($_POST['titre']);
$contenu= addslashes($_POST['message']);
$id_article_ok= $_POST['id_article_ok'];


$sql="UPDATE  article SET article.titre =  '$titre', contenu =  '$contenu', lien_image =  '$lien_image' WHERE  article.id_article =$id_article_ok";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());

header('Location:../index.php?link=articles&result=success');

  }

//Fin modifier un article

  //Supprimer un article


if (isset($_GET['delete'])) {

$id_article = $_GET['id_article'];

//echo $code;

$sql="DELETE FROM article WHERE id_article = $id_article";
mysql_query($sql) or die('ErreurSQL!<br>'.$sql.'<br>'.mysql_error());


header('Location:../index.php?link=articles&result=success');



  }
//Fin supprimer un article
// fin Gestion des articles




?>