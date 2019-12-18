<?php 
$sql = "SELECT * FROM demandes, users WHERE  users.id_users =demandes.useraddid"; 
$rs_result = mysql_query ($sql);
?> 
                                
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="font-size:12px">
                                    <thead>
                                        <tr align="center">
                                            <th>Date</th>
                                            <th>Demandeur </th>
                                            <th>Code demande </th>
                                            <th>Commune / Quartier </th>
                                            <th>Localisation </th>
                                            <th>Imputé à </th>
                                            <th>Statut </th>
                                            <th  colspan="3">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
											while ($row = mysql_fetch_assoc($rs_result)) { 
											?> 
                                            <tr>
                                                <td> <b><?php echo conversion2FR($row['dateaj_demande']); ?></b></td>
                                                <td><?php echo $row['nom_prenom']; ?></td>
                                                <td><?php echo $row['code_demande']; ?></td>
                                                <td><?php echo $row['commune']; ?></td>
                                                <td><?php echo $row['localisation']; ?></td>
                                                <td><?php 
$id_ok = $row['id_demandes'];
$sql = "SELECT * FROM  `imputation` , agent WHERE  `id_demandes` ='$id_ok' AND agent.id_agent = imputation.id_impute_a";
$req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql.'<br>'.mysql_error());
if (mysql_num_rows($req) > 0) { $data = mysql_fetch_assoc($req); 
$nom_users = $data['nom_prenom'];
}
else {
	$nom_users = "";
}
echo $nom_users; ?></td>
                                                <td><?php
												
												echo $row['statut']; ?></td>
                                                <td align="center" width="10"><a href="?link=voir_demande&code_demande=<?php echo $row['code_demande'];?>&id_demandes=<?php echo $row['id_demandes'];?>" title="Voir la demande"><i style="color:#009900" class="fa fa-file-photo-o"></i></a></td>
                                                <td align="center" width="10"><a href="?link=listes_all&id_demandes=<?php echo $row['id_demandes'];?>&code_demande=<?php echo $row['code_demande'];?>" title="Dispatcher la demande"><i style=" color:rgba(0,102,255,1)" class="fa fa-share-alt"></i></a></td>
                                            </tr>
                                            <?php 
											}; 
											?>
                                    </tbody>
                                </table>