<?php 
$sql = "SELECT * FROM agent"; 
$rs_result = mysql_query ($sql);
?> 
                      <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    TRAITEMENTS A EFFECTUER
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                     <a href="?link=traiter_demande&code_demande=<?php echo $_GET['code_demande'];?>&id_demandes=<?php echo $_GET['id_demandes'];?>&action=1" class="btn btn-default btn-lg-12 btn-block">Programmer une inspection</a>
                                     <a href="?link=traiter_demande&code_demande=<?php echo $_GET['code_demande'];?>&id_demandes=<?php echo $_GET['id_demandes'];?>&action=2" class="btn btn-default btn-lg-12 btn-block">Enregistrer/Valider une visite</a>
                                     <a href="?link=traiter_demande&code_demande=<?php echo $_GET['code_demande'];?>&id_demandes=<?php echo $_GET['id_demandes'];?>&action=3" class="btn btn-default btn-lg-12 btn-block">Valider un dossier</a>
                                     <a href="?link=traiter_demande&code_demande=<?php echo $_GET['code_demande'];?>&id_demandes=<?php echo $_GET['id_demandes'];?>&action=4" class="btn btn-default btn-lg-12 btn-block">Admettre pour la régie</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>