<div>
	<!-- START SECTION TOP -->
	<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Contacto</h3>
							<div class="page_location">
								<a href="/">Inicio</a>
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Contacto</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		
		<!-- END SECTION TOP -->
		
		<!-- START CONTACT FORM  -->
		<section id="contact" class="contact-us section-padding">
			<div class="container"> 
				<div class="row ">
					<div align="center" >
						<div class="single_contact_one">
							<div class="contact">
								<h3> Contactanos</h3>
								<hr>
								<form id="contact-form" method="post" action="/mail/mailerContact.php">
									<div class="row">
										<div class="form-group col-md-12">
											<input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required="required" v-model="name">
										</div>
										<div class="form-group col-md-12">
											<input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" required="required" v-model="email">
										</div>
										<div class="form-group col-md-12 mbnone">
											<textarea rows="6" name="message" class="form-control" id="message" placeholder="Tu mensaje" required="required" v-model="message"></textarea>

											<input type="hidden" name="urlSite" id="urlSite" v-model="urlSite">
											<input type="hidden" name="company" id="company" v-model="company">
											<input type="hidden" name="addressCompany" id="addressCompany" v-model="addressCompany">
											<input type="hidden" name="phoneCompany" id="phoneCompany" v-model="phoneCompany">
											<input type="hidden" name="emailCompany" id="emailCompany" v-model="emailCompany">
											<input type="hidden" name="logoCompany" id="logoCompany" v-model="logoCompany">

										</div>
									</div>
									<div >
										<div>
												<input id="sendMailContact" class="btn btn-default" type="submit" value="Enviar">
											</div>
										</div>
								</form>	
							</div>
						</div>
					</div><!-- END COL  -->					
				</div><!-- END ROW -->
			</div><!--- END CONTAINER -->	
		</section>
	<!-- END CONTACT FORM -->	
</div>	
		
		