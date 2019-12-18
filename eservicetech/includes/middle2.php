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
										
                                      	<form action="ajax/contact-form.php" method="post" class="m-ajax-form">
										<input type="hidden" name="contact-form">

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

										<!-- NAME FIELD : begin -->
										<p>
											<label for="contact-name">Nom et prénoms <span>*</span></label>
											<input type="text" id="contact-name" name="contact-name" required>
										</p>
										<!-- NAME FIELD : end -->
                                        <!-- birth FIELD : begin -->
										<p>
											<label for="contact-name">Date de naissance <span>*</span></label>
											<input type="date" id="contact-name" name="contact-name" required>
										</p>
										<!-- birth FIELD : end -->

										<!-- EMAIL FIELD : begin -->
										<p>
											<label for="contact-email">Contact <span>*</span></label>
											<input type="tel" id="contact-email" name="contact-email" required>
										</p>
										<!-- Honeypot (anti spam) -->
										<p>
											<label for="contact-email-hp">Email</label>
											<input type="email" id="contact-email-hp" name="contact-email-hp">
										</p>
										<!-- EMAIL FIELD : end -->

										<!-- PHONE FIELD : begin -->
										<p>
											<label for="contact-phone">Mot de passe</label>
											<input type="tel" id="contact-phone" name="contact-phone">
										</p>
										<!-- PHONE FIELD : end -->
                                        <!-- PHONE FIELD : begin -->
										<p>
											<label for="contact-phone">Repetez votre mot de passe</label>
											<input type="tel" id="contact-phone" name="contact-phone">
										</p>
										<!-- PHONE FIELD : end -->
                                                	<!-- PHONE FIELD : begin -->
										<p>
											<label for="contact-phone">Domaine d'activité</label>
											<input type="tel" id="contact-phone" name="contact-phone">
										</p>
										<!-- PHONE FIELD : end -->
										<!-- SUBJECT FIELD : begin --
										<p>
											<label for="contact-subject">Message Subject</label>
											<input type="text" id="contact-subject" name="contact-subject">
										</p>
										<!-- SUBJECT FIELD : end -->

										<!-- MESSAGE FIELD : begin --
										<p>
											<label for="contact-message">Message <span>*</span></label>
											<textarea id="contact-message" name="contact-message" class="m-required"></textarea>
										</p>
										<!-- MESSAGE FIELD : end -->

										<!-- SUBMIT BUTTON : begin -->
										<p>
											<button type="submit" class="submit-btn c-button" data-loading-label="Sending..." data-label="Send Message">Créer votre compte et accédez à votre espace</button>
										</p>
										<!-- SUBMIT BUTTON : end -->
									</form>
								
								<!-- CONTACT FORM : end -->
                                        
									</div>
							  </div>
							  <!-- DIRECTORY : end -->

							 

							</div>
						</div>
						<!-- PAGE CONTENT : end -->

						<hr class="c-separator m-margin-top-small m-margin-bottom-small m-transparent hidden-lg hidden-md">

					</div>
					<!-- MIDDLE COLUMN : end -->
