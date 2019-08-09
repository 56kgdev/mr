<?php 
    include '../base/base.php';
    $data = getFooter();
?> 
<div> 
		<!-- START FOOTER TOP -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="footer_widget"> 
							<div class="footer-logo"><a href="/"><img class="nav-logo" src="http://agent.immosystem.com.mx/<?php echo $data['logo'] ?>" alt="<?php echo $data['company'] ?>"></a></div>
							<div class="footer_contact">
								<!--<p>Netus ut pede mus vestibulum montes. Mus. Pretium. Mattis habitant netus ligula ridiculus a nam bibendum fusce litora. Ac ullamcorper blandit, viverra pellentesque scelerisque. Phasellus aptent sociosqu nec posuere.</p>-->
							</div>
							<div class="socail_area">
								<ul>
									<li ><a data-toggle="tooltip" data-placement="top" title="Facebook" href="<?php echo $data['fb']?>" target="_blank"><i class="fa fa-facebook"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Twitter"  href="<?php echo $data['tw']?>"><i class="fa fa-twitter"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Google Plus" href="<?php echo $data['gmas']?>"><i class="fa fa-google-plus"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="<?php echo $data['linkedin']?>"><i class="fa fa-linkedin"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Youtube" href="<?php echo $data['youtube']?>"><i class="fa fa-youtube"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Skype" href="" target="_blank"><i class="fa fa-skype"></i></a>
									</li>
									<li ><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="<?php echo $data['pinterest']?>"><i class="fa fa-pinterest"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer_widget">
							<div class="footer-title">
								<h4>Información de Contacto</h4>
							</div>
							<div class="footer_contact">
								<ul>
									<li> <i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="ftr-list">
											<h6 class="touch-title">Dirección</h6>
											<span><?php echo $data['address1'] ?></span>
										</div>
									</li>
									<li> <i class="fa fa-phone" aria-hidden="true"></i>
										<div class="ftr-list">
											<h6 class="touch-title">Teléfono</h6>
											<span><?php echo $data['phone1'] ?></span>
										</div>
									</li>
									<li> <i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div class="ftr-list">
											<h6 class="touch-title">Correo Electrónico</h6>
											<span><?php echo $data['reserveemail'] ?></span> 
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer_widget">
							<div class="footer-title">
								<h4>Menu</h4>
							</div>
							<div class="footer_contact">
								<ul>
									<li><a href="/">Inicio</a></li>
									<li><a href="/nosotros">Nosotros</a></li>
									<li><a href="/propiedades">Propiedades</a></li>
									<li><a href="/contacto">Contacto</a></li>
									<li><a href="http://agent.immosystem.com.mx/" target="_blank">Acceder a IMMO System&copy;</a></li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END FOOTER TOP -->
		
		<!-- START FOOTER BOTTOM -->
		<div id="bottom_footer">
			<div class="reserve_text"> <span><?php echo $data['company'] ?> &copy; 2018 Todos los derechos reservados.
				<br> By <a href="http://www.immosystem.com.mx/" target="_blan">IMMO System &copy;</a>
				</span> </div>
		</div>
		<!-- END FOOTER BOTTOM-->	
	</div>