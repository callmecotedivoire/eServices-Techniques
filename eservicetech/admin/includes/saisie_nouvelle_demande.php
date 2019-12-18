		<?php $an = date('ym');

                        function random($car) {
                        $string = "";
                        $chaine0 = "0123456789ABDCEFGHJKLMNOPQRSTUVWXYZ";
                        srand((double)microtime()*1000000);

                        for($i=0; $i<$car; $i++) {
                        $string .= $chaine0[rand()%strlen($chaine0)];
                        }
                        return $string;
                        }
                        $chaine = random(3);  


if (isset($_GET['action'])) {
	$hidden = "";
}else{
	$hidden = "hidden=hidden";
	}

?>                                    <div class="alert alert-success alert-dismissible" <?php  echo $hidden; ?>>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Merci d'avoir envoyé votre demande <a href="#" class="alert-link">Le Service technique vous contactera</a>.
                                    </div>
                                    
                                    
                                    
        				<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Formulaire de Demande d'Occupation de Territoire
                                </div>
                                <div class="panel-body">
                                
                                <form action="?link=valide_demande" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="new_demande">

 								 <div class="form-group">
                                    <label>Code de la demande</label>
                                       <input type="text" name="code_demande"  class="form-control" id="code_demande" value="<?php echo'D-'; echo$an; echo'-'; echo $chaine; ?>" readonly="readonly">
                                   </div>
                                  <div class="form-group">
                                    <label>Commune</label>
                                       <input type="text" name="commune" class="form-control" id="commune" placeholder="Cocody / Adjamé">
                                   </div>
                                  <div class="form-group">
                                    <label>Quartier</label>
                                       <input type="text" name="quartier" class="form-control" id="quartier" placeholder="Angré / Riviera / Forums">
                                    </div>
                                     <div class="form-group">
                                       <label>Détails de la localisation</label>
                                           <textarea name="localisation" rows="3" class="form-control" id="localisation"></textarea>
                                     </div>
                                     <div class="form-group">
                                       <label>Catégorie</label>
                                                    <select name="categorie" class="form-control" id="categorie">
                                                        <option value="1">Lieu de commerce</option>
                                                        <option value="2">Marché</option>
                                                        <option value="3">Intérieur de quartier</option>
                                                        <option value="4">Espace panneau publicitaire</option>
                                                        <option value="5">Autre</option>
                                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label>Activité envisagée</label>
                                      <input type="text" name="Activite" class="form-control" id="Activite" placeholder="Cocody / Adjamé">
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Votre lieu de résidence</label>
                                      <input type="text" name="residence" class="form-control" id="residence" placeholder="Cocody / Adjamé">
                                    </div>
                                    
                                  <div class="form-group">
                                    <label>Photo 1</label>
                                        <input name="photo1" type="file" id="photo1">
                                    </div>
                                  <div class="form-group">
                                    <label>Photo 2</label>
                                        <input name="photo2" type="file" id="photo2">
                                    </div>
                                  <div class="form-group">
                                    <label>Photo 3</label>
                                        <input name="photo3" type="file" id="photo3">
                                    </div>
                                  <div class="form-group">
                                    <label>Photo 4</label>
                                        <input name="photo4" type="file" id="photo4">
                                   </div>
                                   
                                   <div align="center">
                                    <button type="submit" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-arrow-right"></i></button>
                                    <button type="reset" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                   </div>
                                
                                </form>  
                                    
                                </div>
                            </div>
                        </div>