		<?php $an = date('ym');

                        function random($car) {
                        $string = "";
                        $chaine0 = "0123456789";
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
                                        Agent ajouté avec succès<a href="#" class="alert-link">Vous pouve modifier les données</a>.
                                    </div>
                                    
                                    
                                    
        				<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Formulaire de création des agents
                                </div>
                                <div class="panel-body">
                                
                                <form action="controllers/controllers.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="enregistrer_agent">

 								 <div class="form-group">
                                    <label>Matricule</label>
                                       <input type="text" name="matricule"  class="form-control" id="matricule" value="<?php echo'AGT-'; echo $chaine; ?>" readonly="readonly">
                                   </div>
                                  <div class="form-group">
                                    <label>Nom et prénoms</label>
                                       <input type="text" name="nom_prenom" class="form-control" id="nom_prenom" >
                                   </div>
                                   <div class="form-group">
                                       <label>Sexe</label>
                                                    <select name="categorie" class="form-control" id="categorie">
                                                        <option value="H">Homme</option>
                                                        <option value="F">Femme</option>
                                                    </select>
                                     </div>
                                  <div class="form-group">
                                    <label>Date de naissance</label>
                                       <input type="text" name="datenais" class="form-control" id="datenais" >
                                    </div>
                                    
                                   <div class="form-group">
                                       <label>Situation Matrimoniale</label>
                                                    <select name="categorie" class="form-control" id="categorie">
                                                        <option value="Marié(e)">Marié(e)</option>
                                                        <option value="Célibataire">Célibataire</option>
                                                        <option value="veuf">Veuf</option>
                                                                    <option value="Divorcé">Divorcé</option>
                                        </select>
                                     </div>
                                   
                                  <div class="form-group">
                                    <label>Contact</label>
                                      <input type="text" name="contact" class="form-control" id="contact" >
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Email</label>
                                      <input type="email" name="residence" class="form-control" id="residence" placeholder="Cocody / Adjamé">
                                    </div>
                                   <div class="form-group">
                                       <label>Niveau</label>
                                                    <select name="niveau" class="form-control" id="niveau">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                       			    </select>
                                     </div>
                                     <div class="form-group">
                                       <label>Service</label>
                                                    <select name="id_service" class="form-control" id="id_service">
                                                        <option value="1">Service 1</option>
                                                        <option value="2">Service 2</option>
                                                        <option value="3">Service 3</option>
                                       			    </select>
                                     </div>
                                     <div class="form-group">
                                       <label>Fonction</label>
                                                    <select name="id_fonction" class="form-control" id="id_fonction">
                                                        <option value="1">Chef de service</option>
                                                        <option value="2">Chargé d'étude</option>
                                       			    </select>
                                     </div>


									<div class="form-group">
                                    <label>Photo</label>
                                        <input name="photo" type="file" id="photo">
                                    </div>                                  
                                    
                                    
                                    <div class="form-group">
                                    <label>Nom d'utilisateur</label>
                                      <input type="text" name="login" class="form-control" id="login" >
                                    </div>
                                      <div class="form-group">
                                    <label>Mot de Passe</label>
                                      <input type="password" name="mdp" class="form-control" id="mdp" >
                                    </div>
                                    
                                  
                                   <div align="center">
                                    <button type="submit" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>
                                    <button type="reset" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i></button>
                                   </div>
                                
                                </form>  
                                    
                                </div>
                            </div>
                        </div>