 <?php 
$sql = "SELECT * FROM agent "; 
$rs_result = mysql_query ($sql);

?> 
                                
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th width="228">Matricule</th>
                                            <th width="228">Nom et prénoms </th>
                                            <th width="128">Service</th>
                                            <th width="128">Fonction </th>
                                            <th  colspan="2">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
											while ($row = mysql_fetch_assoc($rs_result)) { 
											?> 
                                            <tr>
                                                <td width="228" > <b><?php echo $row['matricule']; ?></b></td>
                                                <td width="228"><?php echo htmlentities($row['nom_prenom']); ?></td>
                                                <td width="128"><?php echo htmlentities($row['id_service']); ?></td>
                                                <td width="128"><?php echo $row['id_fonction']; ?></td>
                                                <td align="center" width="67"><a href="#" title="Modifier"><i style="color:#009900" class="fa fa-file-photo-o"></i></a></td>
                                                <td align="center" width="67"><a href="#" title="Supprimer"><i style="color:#FF0000" class="fa fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php 
											}; 
											?>
                                    </tbody>
                                </table>