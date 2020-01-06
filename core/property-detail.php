<?php  
    include include './base/base.php';

    $enlace_actual = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $porciones = explode("/", $enlace_actual );
    $porcion = explode("-", $porciones [3]);
   
    $data=getDataProperty($porcion[1]);
        
?> 
<div>
	<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Detalle de propiedad</h3>
							<div class="page_location">
								<a href="/">Inicio</a>
								<i class="fa fa-angle-right" aria-hidden="true"></i> 
								<span>Detalle de propiedad</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section End -->

		<!-- Single Property Start -->
		<section id="single_property">
			<div class="container">					
				<div class="row">
					<div class="col-md-8">
						<!--Slider -->
				<div class="row">
					<div class="col-md-12">
						<div class="property_slider">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
                                    <?php 
                                    $count=0;
                                    foreach($data['photos'] as &$photo){ ?>
                                        <div class="item" key="<?php echo $photo[$count]?>" index="<?php echo $count; ?>">
										    <img src="<?php echo $photo[$count] ?>" alt="<?php echo $photo[$count] ?>">
									    </div>	
                                    <?php $count++; } ?>																		
								</div>
								
								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<div class="lef_btn">Prev</div>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<div class="right_btn">Next</div>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End slider -->
				<div class="price" v-if="property.precio > 0">
					<h3>										
						<span >En venta $<?php echo $data['precio'].$data['MonedaVenta']?></span>							
						
					</h3>
					<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
				</div>
				<div class="price" v-else-if="property.precioM>0">
					<h3>					
						<span >En renta $<?php echo $data['precioM'].$data['rentaMoneda'] ?></span>					
						
					</h3>
					<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
				</div>
				<div class="price" v-else-if="property.holiday_price!=0">
					<h3>											
						<span >Renta vacacional $<?php echo $data['holiday_price'].$data['vacation_rental_currency'] ?></span>					
						
					</h3>
					<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
				</div>
				
				<hr>
						<!-- Property card details  -->
						<div class="row">
							<div class="col-md-12">
								<div class="property-summary2">
									<div class="profile_data">
										<ul>
											<li><span>Folio : </span> #<?php echo $data['folio']?></li>
											<li><span>Area:</span> <?php echo $data['mc']?> m<sup>2</sup></li>
											<li><span>Recamaras :</span>  <?php echo $data['recamaras']?></li>
											<li><span>Baños :</span> <?php echo $data['baños']?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Property card details  -->

						<!-- Property detail  -->
						<div class="row">
							<div class="col-md-12">
								<div class="detail_text">
									<div class="property-text">
										<h4 class="property-title"><?php echo $data['propiedad']?></h4>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $data['city']?> </span>
	
										<div class="profile_data">
											<div class="accordion">
												<div class="panel-group" id="accordion-desc" role="tablist" aria-multiselectable="true">
													<h4 class="inner-title">DESCRIPCIÓN</h4>
													<hr>
													<div class="panel panel-default accordion_panel">
														<div class="panel-heading accordian_title" role="tab" id="headingDescOne">
															<div class="panel-title">
																<a role="button" data-toggle="collapse" data-parent="#accordion-desc" href="#collapseDescOne" aria-expanded="true" aria-controls="collapseDescOne">
																	<b>ESPAÑOL</b>
																	<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
																</a>
															</div>
														</div>
														<div id="collapseDescOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingDescOne">
															<div class="panel-body accordian_para">
																<blockquote ><?php echo $data['webEsp']?></blockquote>
															</div>
														</div>
													</div>

													<div class="panel panel-default accordion_panel" v-if="property.webEng != 0">
														<div class="panel-heading accordian_title" role="tab" id="headingDescTwo">
															<div class="panel-title">
																<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-desc" href="#collapseDescTwo" aria-expanded="false" aria-controls="collapseDescTwo">
																	<b> ENGLISH</b>
																	<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
																</a>
															</div>
														</div>
														<div id="collapseDescTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingDescTwo">
															<div class="panel-body accordian_para">
																<blockquote ><?php echo $data['webEng']?></blockquote>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Property detail  -->						
						<div  class="row">
							<div class="col-md-12">
								<div class="more_information">
									<div class="profile_data">
										<div class="accordion">
											<h4 class="inner-title">Amenidades</h4>
														<hr>
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div  class="panel panel-default accordion_panel">
													<div class="panel-heading accordian_title" role="tab" id="headingOne">
														<div class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																<b>INTERIORES</b>
																<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
															</a>
														</div>
													</div>
													<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
														<div class="panel-body accordian_para">
															<ul >
																<li  v-for="(n,i) in interiors" index="n" :key="i" ><span> <i class="fa fa-check" aria-hidden="true"></i> {{ interiors[i] }}</span></li>
															</ul>
														</div>
													</div>
												</div>

												<div  class="panel panel-default accordion_panel">
													<div class="panel-heading accordian_title" role="tab" id="headingTwo">
														<div class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																<b> EXTERIORES</b>
																<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
															</a>
														</div>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
														<div class="panel-body accordian_para">
															<ul >
																<li  v-for="(n,i) in exteriors" index="n" :key="i" ><span><i class="fa fa-check" aria-hidden="true"></i> {{ exteriors[i] }}</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div  class="panel panel-default accordion_panel">
													<div class="panel-heading accordian_title" role="tab" id="headingFour">
														<div class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
																<b> MANTENIMIENTO</b>
																<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
															</a>
														</div>
													</div>
													<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
														<div class="panel-body accordian_para">
															<ul>
																<li v-for="(n,i) in maintenance" index="n" :key="i" ><span><i class="fa fa-check" aria-hidden="true"></i>{{ maintenance[i] }}</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div  class="panel panel-default accordion_panel">
													<div class="panel-heading accordian_title" role="tab" id="headingThree">
														<div class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																<b> DESARROLLO</b>
																<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
															</a>
														</div>
													</div>
													<div id="collapseThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingThree">
														<div class="panel-body accordian_para">
															<ul >
																<li  v-for="(n,i) in dev" index="n" :key="i" ><span><i class="fa fa-check" aria-hidden="true"></i> {{ dev[i] }}</span></li>
															</ul>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Property characteristics  -->

						<!-- Property video -->
						<div v-if="property.ver_video!='0'" class="row">
							<div class="col-md-12">
								<div class="single_video">
									<iframe src="https://www.youtube.com/embed/tv-Uzeh7Dy8" frameborder="0"></iframe>
								</div>
							</div>
						</div>
						<!-- End Property video -->

						<!-- Property amenities -->
						<div class="row">
							<div class="col-md-12">
								<div class="single_feature">
									<h4 class="inner-title">Servicios</h4>
									<hr>
									<div class="info-list">
										<ul>                                        
											<li v-for="(n,i) in services" index="n" :key="i" ><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span><b> {{ services[i] }}</b></li>											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Property amenities -->

					</div>

					<div class="col-md-4">
						<div class="property_sidebar">							
							<!-- Contact Agent -->
							<div class="contact_agent sidebar-widget">
								<div class="agent_details">
									<div class="author_img">
										<img src="img/testimonial/2.png" alt="">
									</div>
									<div class="agent_info">
										<h4 class="author_name"><?php echo $data['fullname']?></h4>
										<span><?php echo $data['cellphone']?></span><br>
										<span><?php echo $data['email']?></span>
									</div>
									<form class="message_agent" id="contactoform" name="contactProp-form"  method="POST" action="/mail/mailer.php">
										<div class="input-group">
											<input type="text" class="form-control" name="name" id="name" placeholder="Nombre*" required="required">
										</div>
										<br>
										<div class="input-group">
											<input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico*" required="required">
										</div>
										<br>
										<div class="input-group">
											<input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono*" required="required">
										</div>
										<br>
										<div class="input-group">
											<textarea class="form-control" id="message" name="message" placeholder="Mensaje*" required="required"></textarea>
											<input type="hidden" name="folioProp" id="folioProp" v-model="folioProp">
											
											<!--  Informacion para mensaje y datos de envio-->
											<input type="hidden" name="urlSite" id="urlSite" v-model="urlSite">
											<input type="hidden" name="company" id="company" v-model="company">
											<input type="hidden" name="agentName" id="agentName" v-model="agentName">
											<input type="hidden" name="agentEmail" id="agentEmail" v-model="agentEmail">
											<input type="hidden" name="agentPhone" id="agentPhone" v-model="agentPhone">
											
											<!--  Informacion de banner-->
											<input type="hidden" name="addressCompany" id="addressCompany" v-model="addressCompany">
											<input type="hidden" name="phoneCompany" id="phoneCompany" v-model="phoneCompany">
											<input type="hidden" name="emailCompany" id="emailCompany" v-model="emailCompany">
											<input type="hidden" name="logoCompany" id="logoCompany" v-model="logoCompany">


										</div>
										<div class="input-group">
											<button type="submit" class="btn btn-default" name="submit">Send</button>
										</div>
									</form>
								</div>
							</div>
							<!--End Contact Agent -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Single Property End --> 

	</div>