<?php 
$sql = "SELECT * FROM demandes, users WHERE  users.useraddid =demandes.useraddid"; 
$rs_result = mysql_query ($sql);
?> 
                                
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th width="228">Date de la demande</th>
                                            <th width="228">Demandeur </th>
                                            <th width="228">Contact </th>
                                            <th width="228">Code demande </th>
                                            <th width="228">Commune / Quartier </th>
                                            <th width="128">Localisation </th>
                                            <th width="128">Statut </th>
                                            <th  colspan="3">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
											while ($row = mysql_fetch_assoc($rs_result)) { 
											?> 
                                            <tr>
                                                <td width="228" > <b><?php echo $row['dateaj']; ?></b></td>
                                                <td width="228"><?php echo htmlentities($row['nom_prenom']); ?></td>
                                                <td width="228"><?php echo htmlentities($row['contact']); ?></td>
                                                <td width="228"><?php echo htmlentities($row['code_client']); ?></td>
                                                <td width="228"><?php echo htmlentities($row['commune']); ?></td>
                                                <td width="128"><?php echo htmlentities($row['locatisation']); ?></td>
                                                <td width="128"><?php
												
												echo $row['statut']; ?></td>
                                                <td align="center" width="67"><a href="#" title="Voir les photos"><i style="color:#009900" class="fa fa-file-photo-o"></i></a></td>
                                                <td align="center" width="67"><a href="<?php echo $row['dateaj']; ?>" title="Dispatcher la demande"><i style=" color:rgba(0,102,255,1)" class="fa fa-share-alt"></i></a></td>
                                            </tr>
                                            <?php 
											}; 
											?>
                                    </tbody>
                                </table>