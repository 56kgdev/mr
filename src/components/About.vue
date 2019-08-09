<template>
	<main>
		<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Nosotros</h3>
							<div class="page_location">
								<router-link to="/">Inicio</router-link> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Nosotros</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section End -->
		<!--Search-->		
		<section style="padding:0px;">			
			<div class="container" align="center">
				<br>
				<div class="section-title text-center wow zoomIn">
					<h3 class="section_title_blue">Encuentra el hogar <span>de tus sueños</span></h3>				
				</div>				
				<div class="slider-search-2" align="center">					
					<ip-search-form @select="setPropertiesFound"></ip-search-form>
				</div>
			</div>
		</section>
		<!--End search -->		
		<!-- Offer Part Start -->
		<section id="offer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="offer_area wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
							<div class="circle_area"><i class="flaticon-home-1"></i></div>
							<a><h5 class="offer-title">Nunc. Lectus eget.</h5></a>
							<p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="offer_area wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
							<div class="circle_area"><i class="flaticon-pencil-and-paper"></i></div>
							<a><h5 class="offer-title">Nunc. Lectus eget.</h5></a>
							<p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
						
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="offer_area wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
							<div class="circle_area"><i class="flaticon-home"></i></div>
							<a><h5 class="offer-title">Nunc. Lectus eget.</h5></a>
							<p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="offer_area wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
							<div class="circle_area"><i class="flaticon-connections"></i></div>
							<a><h5 class="offer-title">Nunc. Lectus eget.</h5></a>
							<p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Offer Part End -->  

		<!-- Who We Are Part Start -->
		<section id="who_are">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="row">
							<div class="who_text">
								<div class="section_title_white"><h2>Nunc <span> Lectus eget.</span></h2></div>
								<p>Nibh. Eu quis Congue euismod aliquet sociis ante lobortis consequat suscipit eget elit ante lacinia interdum bibendum quam risus maecenas mattis dictumst ultrices neque class lobortis. Mattis nostra litora mollis sociis dolor pretium senectus nullam turpis feugiat consectetuer sapien urna gravida sed sed pede posuere ultricies placerat Ligula quis sagittis.</p>
								<div class="who_list">
									<ul>
										<li><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Iaculis dui velit velit turpis lacus nostra a aliquet integer</span></li>
										<li><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Iaculis dui velit velit turpis lacus nostra a aliquet integer</span></li>
										<li><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Iaculis dui velit velit turpis lacus nostra a aliquet integer.</span></li>
										<li><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Iaculis dui velit velit turpis lacus nostra a aliquet integer. </span></li>
										<li><i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Iaculis dui velit velit turpis lacus nostra a aliquet integer.</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Who We Are Part End -->

		<!-- About Accordion Part Start -->
		<section id="about_description">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="we_do">
							<div class="title-row"><h2 class="section_title_blue">Facilisi  <span>mi potenti</span></h2></div>
							<p>Facilisi mi potenti quam ad, volutpat tristique maecenas non facilisi varius venenatis posuere maecenas nam. Consequat nostra donec natoque facilisis fames venenatis neque potenti senectus convallis lacinia nec tincidunt. Convallis mollis euismod class nascetur nunc. Justo risus tempor interdum. Dictumst sit cubilia taciti Lacinia ad mi Nam. Mattis ut phasellus.</p>
							<div class="accordion">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default accordion_panel">
										<div class="panel-heading accordian_title" role="tab" id="headingOne">
											<div class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Hendrerit convallis gravida lacinia eleifend eros morbi vivamus.
													<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												</a>
											</div>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body accordian_para">
												<p>Consectetuer pulvinar accumsan donec, lacus tristique odio tempor. Auctor tempus sociosqu pulvinar pharetra vel, cubilia nec sociosqu aliquet quis facilisis diam mus gravida cursus nascetur hac Quis molestie pretium curae.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default accordion_panel">
										<div class="panel-heading accordian_title" role="tab" id="headingTwo">
											<div class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Condimentum felis feugiat scelerisque commodo tempus tortor.
													<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												</a>
											</div>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body accordian_para">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default accordion_panel">
										<div class="panel-heading accordian_title" role="tab" id="headingThree">
											<div class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Platea aliquam fusce viverra primis nisl nec facilisis sit elementum.
													<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												</a>
											</div>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body accordian_para">
												<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default accordion_panel">
										<div class="panel-heading accordian_title" role="tab" id="headingFour">
											<div class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
													Facilisi Suscipit justo aenean tortor convallis inceptos dis sodales.
													<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
												</a>
											</div>
										</div>
										<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="panel-body accordian_para">
												<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="we_do">
							<div class="title-row"><h2 class="section_title_blue">mi potenti <span>venenatis</span></h2></div>
							<p>Facilisi mi potenti quam ad, volutpat tristique maecenas non facilisi varius venenatis posuere maecenas nam. Consequat nostra donec natoque facilisis fames venenatis neque potenti senectus convallis lacinia nec tincidunt. Convallis mollis euismod class nascetur nunc. Justo risus tempor interdum. Dictumst sit cubilia taciti Lacinia ad mi Nam. Mattis ut phasellus.</p>
							<div class="misson_area">
								<ul>
									<li>
										<!--<img src="img/about/about-1.png" alt="">-->
										<div class="misson_text">
											<span>Platea aliquam.</span>
											<p>Mattis conubia facilisi. Suscipit quam donec cum mus sagittis suscipit lobortis habitant non tellus condimentum nisl.</p>
										</div>
									</li>
									<li>
										<!--<img src="img/about/about-2.png" alt="">-->
										<div class="misson_text">
											<span>Platea aliquam.</span>
											<p>Mattis conubia facilisi. Suscipit quam donec cum mus sagittis suscipit lobortis habitant non tellus condimentum nisl.</p>
										</div>
									</li>
									<li>
										<!--<img src="img/about/about-3.png" alt="">-->
										<div class="misson_text">
											<span>Platea aliquam.</span>
											<p>Mattis conubia facilisi. Suscipit quam donec cum mus sagittis suscipit lobortis habitant non tellus condimentum nisl.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Accordion Part End -->

		<!-- START ABOUT US 
		<section id="about" class="about-us section-padding">
			<div class="container" style="text-align:justify;">
				<div class="row">	
					<div class="section-title text-center wow zoomIn">
						<h2>Identidad corporativa Luxury in the Caribbean</h2>
						<div></div>
					</div>					
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="about-us-content">
							<h2>Misión</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>							
						</div>
						<div class="about-us-content">
							<h2>Visión</h2>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
						</div>
						<div class="about-us-content">
							<h2>Valores</h2>
							
							<ul>
								<li><i class="fa fa-check"></i><strong>Lorem ipsum:</strong>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </li>
								<li><i class="fa fa-check"></i><strong>Lorem ipsum:</strong>  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</li>
								
							</ul>
						</div>
						
						
						<div class="about-us-content">
							<h2>Acerca de...</h2>
							<p>Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex.</p>
						</div>
						<hr>		
						<div class="about_img" align="left" style="display:inline-block;">
							<div style="width:100%">
					  			
							</div>
						</div>	
							
					</div> END COL 
					<div class="col-md-6 col-sm-12 col-xs-12" >
						<br>
						<div class="about-us-content">
							<h2>Servicios</h2>
							
							<ul>
								<li><i class="fa fa-check"></i><strong>Lorem ipsum dolor sit amet.</strong></li>
								<li><i class="fa fa-check"></i><strong>consectetuer adipiscing elit</strong></li>
								<li><i class="fa fa-check"></i><strong>consectetuer adipiscing elit.</strong></li>
								<li><i class="fa fa-check"></i><strong>Lorem ipsum dolor sit amet.</strong></li>
								
							</ul>
						</div>
						<div class="about-us-content">
							<h2>Lorem ipsum dolor sit amet.</h2>
							<p> His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu. Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex.</p>
						</div>
						<div class="about-us-content">
							<h2>Lorem ipsum dolor sit amet.</h2>
							<p>Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex.</p>
							<p>Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex.</p>
						</div>
						<hr>
						
					</div>END COL 
					<br>
					<br>
				</div>END ROW 
				<div align="center">
					<h3> Luxury in the Caribbean</h3>
						
				</div>
			</div>
		</section>
		 END ABOUT US  -->

  </main>
</template>
<script>
import IpSearchForm from '@/components/SearchForm.vue'
export default {
	components: {		
		IpSearchForm
	},
	data () {
		return {
			propertiesFound: [],				
		}
	},
	methods: {
		setPropertiesFound (properties) {
		this.propertiesFound = properties
		this.$router.push({ name: "search", params: { properties } });
	  },
	},
	created(){
		window.scrollTo(0,0);
	}
}
</script>
