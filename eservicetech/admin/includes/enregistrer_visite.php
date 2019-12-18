<?php 
$sql = "SELECT * FROM agent"; 
$rs_result = mysql_query ($sql);
?> 
                      <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Enregistrer une visite
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="form-group">
                                    
                            <form action="controllers/controllers.php" method="post" >

                                    <label>Demande choisie</label>
                                       <input type="hidden" name="imputation"  >
                                       <input type="hidden" name="id_demandes" class="form-control" id="id_demandes" value="<?php echo $_GET['id_demandes'];?>"  >
                                       <input type="text" name="code_demande" class="form-control" id="code_demande" value="<?php echo $_GET['code_demande'];?>"  >
                                       <input type="hidden" name="impute_par" class="form-control" id="impute_par" value="<?php echo $id_user;?>"  >
                                   
                                   </div>
                                    <div class="form-group">
                                       <label>Date de la visite</label>
                                       <input type="date" name="date_visite" class="form-control" id="date_visite"  >
                                     </div>
                    
                    				<div class="form-group">
                                       <label>Commentaire</label>
                                           <textarea name="commentaire" rows="3" class="form-control" id="commentaire"></textarea>
                                     </div>
                                     <div class="form-group">
                                       <label>Décision</label>
                                                    <select name="categorie" class="form-control" id="categorie">
                                                        <option value="1">Validé pour Prochaine étape</option>
                                                        <option value="2">Suspendu pour besoin d'information</option>
                                                        <option value="3">Rejeté</option>
                                                    </select>
                                  </div>
                                     <button type="submit" class="btn btn-default btn-lg-12 btn-block"><i class="fa fa-check"></i>Valider</button>
                                </div>
                                <!-- /.panel-body -->
                                </form>
                            </div>
                            <!-- /.panel -->
                        </div>