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
                        $chaine = random(6);  
?>

<div class="middle-column col-md-6 col-md-push-3">

						<!-- PAGE HEADER : begin -->
						<div id="page-header">

							<!-- PAGE TITLE : begin -->
							<div class="page-title">
								<h1>Création de COMPTE,<br><em>pour accéder à votre espace et suivre vos demandes</em></h1>
							</div>
							<!-- PAGE TITLE : end -->

						</div>
						<!-- PAGE HEADER : end -->

						<!-- PAGE CONTENT : begin -->
						<div id="page-content">
						  <div class="page-content-inner">

								<!-- DIRECTORY : begin -->
								<!-- You can choose to have 2, 3 or 4 columns in Directory element.
								To change the number of columns, change the class in the following element from m-3-columns to m-2-columns or m-4-columns -->
							<div class="c-directory m-has-icon m-3-columns">
									<div class="c-content-box">
										
                                      	<form action="admin/controllers/controllers.php" method="post" >
										<input type="hidden" name="inscription_users">

										<!-- FORM VALIDATION ERROR MESSAGE : begin -->
										<p class="c-alert-message m-warning m-validation-error" style="display: none;">
											<i class="ico fa fa-exclamation-circle"></i>Please fill in all required (*) fields.
										</p>
										<!-- FORM VALIDATION ERROR MESSAGE : end -->

										<!-- SENDING REQUEST ERROR MESSAGE : begin -->
										<p class="c-alert-message m-warning m-request-error" style="display: none;">
											<i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.
										</p>
										<!-- SENDING REQUEST ERROR MESSAGE : end -->
										<p>
											<label for="code">Code Client<span>*</span></label>
											<input type="text" id="code_client" name="code_client" value="<?php echo $an; echo'-'; echo $chaine; ?>" required readonly="readonly">
										</p>
                                        <p>
											<label for="contact-name">Nom et prénoms <span>*</span></label>
											<input type="text" id="nom_prenom" name="nom_prenom" required>
										</p>
			
										<!--p>
											<label for="datenais">Date de naissance <span>*</span></label>
											<input type="date" id="datenais" name="datenais" required>
										</p-->
										<p>
											<label for="contact-email">Contact <span>*</span></label>
											<input type="text" id="contact" name="contact" required>
										</p>
										<p>
											<label for="contact-email-hp">Email</label>
											<input type="email" id="mail" name="mail">
										</p>
										<p>
											<label for="contact-phone">Mot de passe</label>
											<input type="password" id="mdp" name="mdp">
										</p>
										<p>
											<label for="contact-phone">Repetez votre mot de passe</label>
											<input type="password" id="mdp2" name="mdp2">
										</p>
										<p>
											<label for="contact-phone">Domaine d'activité</label>
											<input type="text" id="domaine" name="domaine">
										</p>
									
										<p>
                                        
											<input type="submit" class="submit-btn c-button" value="Créer votre compte et accédez à votre espace">
										</p>
									</form>
									</div>
							  </div>

							 

							</div>
						</div>
						<!-- PAGE CONTENT : end -->

						<hr class="c-separator m-margin-top-small m-margin-bottom-small m-transparent hidden-lg hidden-md">

					</div>
					<!-- MIDDLE COLUMN : end -->
