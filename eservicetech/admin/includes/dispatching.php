<?php 
$sql = "SELECT * FROM agent"; 
$rs_result = mysql_query ($sql);
?> 
                      <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    IMPUTATION DOSSIERS
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
                                       <label>Choisir un agent</label>
                                       
                                                    <select name="id_impute_a" class="form-control" id="id_impute_a"<
                                                        <option value="">Choisissez un agent</option>
                                            <?php 
										while($data= mysql_fetch_assoc($rs_result)){
                                               echo '<option value="'.$data['id_agent'].'">'.$data['nom_prenom'].'</option>';
                                                                    }
											?>
                                                    </select>
                                     </div>
                                     <div class="form-group">
                                       <label>Instructions</label>
                                           <textarea name="note_instruction" rows="3" class="form-control" id="note_instruction"></textarea>
                                     </div>
                                     <button type="submit" class="btn btn-default btn-lg-12 btn-block"><i class="fa fa-check"></i>Imputer</button>
                                </div>
                                <!-- /.panel-body -->
                                </form>
                            </div>
                            <!-- /.panel -->
                        </div>