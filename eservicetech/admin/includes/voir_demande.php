<?php
$code = $_GET['code_demande'];
$sql = "SELECT * FROM demandes, users WHERE  users.id_users =demandes.useraddid AND  `code_demande` LIKE  '$code'";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());

  if (mysql_num_rows($req) > 0) {
$data = mysql_fetch_assoc($req);
 
$nom_users = $data['nom_prenom'];
$contact_users = $data['contact'];
$mail_users = $data['mail'];
$code_demande = $data['code_demande'];
$code_demande = $data['code_demande'];
$commune = $data['commune'];
$quartier = $data['quartier'];
$localisation = $data['localisation'];
$categorie = $data['categorie'];
$Activite = $data['Activite'];
$photo1 = $data['photo1'];
$photo2 = $data['photo2'];
$photo3 = $data['photo3'];
$photo4= $data['photo4'];
$residence= $data['residence'];
$date= $data['dateaj_demande'];
$useraddid = $data['useraddid'];

}
else {
echo "<script type='text/javascript'>document.location.replace('../?link=listes_all&action=error');</script>";
}


?>      
                                    
                                    
        				<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Recapitulatif du formulaire
                                </div>
                                <div class="panel-body">
                                
                                <form action="controllers/controllers.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="new_demande" value="<?php echo $nom; ?>">
                                <input type="hidden" name="code_demande" value="<?php echo $code_demande; ?>">
                                <input type="hidden" name="useraddid" value="<?php echo $useraddid; ?>">

 								 <div class="form-group" style="float:left">
                                 <?php echo $nom_users; ?> <br/>
                                 <?php echo $code_demande; ?><br/>
                                 <?php echo $contact_users; ?><br/>
                                 <?php echo $mail_users; ?><br/>
                                 </div>

                               
                                 <br/>
                                 <div class="form-group" style="float:right">
                                 Abidjan le  <?php echo conversion2FR($date); ?> <br/><br/><br/>
                                 A<br/>
                                 Monsieur le Maire<br/>
                                 </div>
                                 <br/><br/><br/>
                                 <div class="form-group">
                                 <br/><br/><br/>
                                 Objet : Demande d'Autorisation d'Occupation de Territoire
                                 
                                 </div>
                                 
                                 <div class="form-group">
                                <p align="justify">
                                	Je soussigné <b> <?php echo $nom_users; ?></b> résidant à  <b><?php echo $residence; ?>,</b>
                                    je viens par la présente formuler auprès de vous une Demande d'Autorisation 
                                    d'Occupation de Territoire au sein de la commune de <b> <?php echo $commune; ?></b>
                                 </p>
                                  <p align="justify">
                                	Le lieu objet de ma demande est situé à : <b><?php echo $commune; ?></b> , <b><?php echo $quartier; ?></b>,
                                    et plus précisement à : <b><?php echo $localisation; ?></b>
                                 </p>
                                  <p align="justify">
                                	L'espace demandé devra servir pour : <b><?php echo $Activite; ?></b>.
                                 </p>
                                 <p align="justify">
                                	Vous trouverez ci-joint les photos de l'espace demandé.
                                 </p>
                                 <p align="justify">
                                	Dans l'attente d'une suite favorable, recevez, Monsieur l'expression de mes civilités distinguées.
                                 </p>
                                 
                                 </div>
                                  
                                  
                                 
                                 
<table width="500" border="0" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td><img src="photos_sites/1.jpg" width="283" height="178" /></td>
    <td><img src="photos_sites/2.jpg" alt="" width="283" height="178" /></td>
  </tr>
  <tr>
    <td><img src="photos_sites/3.jpg" alt="" width="283" height="178" /></td>
    <td><img src="photos_sites/4.jpg" alt="" width="283" height="178" /></td>
  </tr>
</table>

<div class="form-group" style="float:right; padding-bottom:15px; padding-top:15px">
                                 <?php echo $nom_users; ?> <br/>
                                 
                                 </div>
                                 
                                   
                                   <div align="center" style="padding-top:30px">
                                          </div>
                                
                                </form>  
                                    
                                </div>
                            </div>
                        </div>