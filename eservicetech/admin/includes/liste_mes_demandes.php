 <?php 
$sql = "SELECT * FROM demandes WHERE  useraddid =$id_user "; 
$rs_result = mysql_query ($sql);

$nb = mysql_num_rows($rs_result);

?> 
                                <div style=" padding-bottom:15px;"> Vous avez effectué <span style="color:rgba(255,0,0,1); font-weight:bold"><?php echo $nb; ?> </span> demandes </div>
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th width="88">Date </th>
                                            <th width="108">Commune / Quartier </th>
                                            <th width="228">Localisation </th>
                                            <th width="8">Statut </th>
                                            <th  colspan="3">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php 
											while ($row = mysql_fetch_assoc($rs_result)) { 
											?> 
                                            <tr>
                                                <td width="88" > <b><?php echo conversion2FR($row['dateaj']); ?></b></td>
                                                <td width="108"><?php echo $row['commune']; ?></td>
                                                <td width="128"><?php echo $row['localisation']; ?></td>
                                                <td width="8"><?php
												
												echo $row['statut']; ?></td>
                                                <td align="center" width="17"><a href="#" title="Voir les photos"><i class="fa fa-file-photo-o Primary"></i></a></td>
                                                <td align="center" width="17"><a href="#" title="Voir la demande"><i class="fa fa-eye"></i></a></td>
                                                <td align="center" width="17"><a href="#" title="Supprimer la demande"><i class="fa fa-minus-circle"></i></a></td>
                                            </tr>
                                            <?php 
											}; 
											?>
                                    </tbody>
                                </table>