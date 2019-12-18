<?php 
$code_demande = $_POST['code_demande'];
$commune = $_POST['commune'];
$quartier = $_POST['quartier'];
$localisation = $_POST['localisation'];
$categorie = $_POST['categorie'];
$Activite = $_POST['Activite'];
$photo1 = $_POST['photo1'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];
$photo4= $_POST['photo4'];
$residence= $_POST['residence'];
$useraddid = $id_user;

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
                                <input type="hidden" name="commune" value="<?php echo $commune; ?>">
                                <input type="hidden" name="quartier" value="<?php echo $quartier; ?>">
                                <input type="hidden" name="localisation" value="<?php echo $localisation; ?>">
                                <input type="hidden" name="categorie" value="<?php echo $categorie; ?>">
                                <input type="hidden" name="Activite" value="<?php echo $Activite; ?>">
                                <input type="hidden" name="photo1" value="<?php echo $photo1; ?>">
                                <input type="hidden" name="photo2" value="<?php echo $photo2; ?>">
                                <input type="hidden" name="photo3" value="<?php echo $photo3; ?>">
                                <input type="hidden" name="photo4" value="<?php echo $photo4; ?>">
                                <input type="hidden" name="statut" value="<?php echo $statut; ?>">
                                <input type="hidden" name="residence" value="<?php echo $residence; ?>">
                                <input type="hidden" name="useraddid" value="<?php echo $useraddid; ?>">

 								 <div class="form-group" style="float:left">
                                 <?php echo $nom; ?> <br/>
                                 <?php echo $code; ?><br/>
                                 <?php echo $contact; ?><br/>
                                 <?php echo $mail; ?><br/>
                                 </div>

                               
                                 <br/>
                                 <div class="form-group" style="float:right">
                                 Abidjan le  <?php echo date('d/m/Y'); ?> <br/><br/><br/>
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
                                	Je soussigné <b> <?php echo $nom; ?></b> résidant à  <b><?php echo $residence; ?>,</b>
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
                                 <?php echo $nom; ?> <br/>
                                 
                                 </div>
                                 
                                   
                                   <div align="center" style="padding-top:30px">
                                    <button type="submit" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                    <button type="reset" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                   </div>
                                
                                </form>  
                                    
                                </div>
                            </div>
                        </div>