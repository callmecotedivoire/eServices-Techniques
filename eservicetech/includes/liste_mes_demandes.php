 <?php 
$sql = "SELECT * FROM demandes WHERE  useraddid =$id_user "; 
$rs_result = mysql_query ($sql);

?> 
                                
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th width="228">Date de la demande</th>
                                            <th width="228">Commune / Quartier </th>
                                            <th width="128">Localisation </th>
                                            <th width="128">Statut </th>
                                            <th  colspan="2">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
											while ($row = mysql_fetch_assoc($rs_result)) { 
											?> 
                                            <tr>
                                                <td width="228" > <b><?php echo $row['dateaj']; ?></b></td>
                                                <td width="228"><?php echo htmlentities($row['commune']); ?></td>
                                                <td width="128"><?php echo htmlentities($row['locatisation']); ?></td>
                                                <td width="128"><?php
												
												echo $row['statut']; ?></td>
                                                <td align="center" width="67"><a href="#" title="Voir les photos"><i style="color:#009900" class="fa fa-file-photo-o"></i></a></td>
                                                <td align="center" width="67"><a href="#" title="Supprimer la demande"><i style="color:#FF0000" class="fa fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php 
											}; 
											?>
                                    </tbody>
                                </table>