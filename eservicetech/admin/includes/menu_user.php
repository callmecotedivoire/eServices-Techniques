<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">E-ServiceTech</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Site web</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>Utilisateur Connecté :  <?php echo $nom; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                        		<div align="center" style="padding-top:15px">  <i class="fa fa-user fa-fw"></i> <?php echo $nom; ?> </div>
                        
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="?link=dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            
<li style="visibility:<?php echo $visi_admin; ?>">
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Traitement des dossiers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="?link=listes_all">Liste des demandes</a></li>
                                    <li><a href="?link=listes_a_imputer">Demandes à Imputer</a></li>
                                    <li><a href="?link=liste_a_traiter">Imputations et traitements</a></li>
                                    <li><a href="?link=inspections">Gérer les inspections</a></li>
                                    <li><a href="#">Validation des dossiers</a></li>
                                </ul>
                                <!-- /.nav-second-level -->
</li>
<li> <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gestion de compte<span class="fa arrow"></span></a> </li>
<li> <a href="?link=new_demande"><i class="fa fa-bar-chart-o fa-fw"></i> Faire une nouvelle demande</span></a> </li>
<li> <a href="?link=liste_demandes"><i class="fa fa-bar-chart-o fa-fw"></i> Suivre mes demandes</span></a> </li>
<li> <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Renouvellement des demandes</a> </li>
<li> <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Paiement Regie</a> </li>
<li> <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Ecrire au Maire</a> </li>
                       

                            <li style="visibility:hidden">
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Dossiers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="#">Dossier en cours</a> </li>
                                    <li><a href="#">Dossier Validés</a> </li>
                                    <li><a href="#">Dossier annulés </a> </li>
                                   
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li style="visibility:<?php echo $visi_admin; ?>">
                                <a href="?link=saisie_agents"><i class="fa fa-users fa-fw"></i> Créer des utilisateurs</span></a></li>
                            <li><a href="controllers/deconnexion.php"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>