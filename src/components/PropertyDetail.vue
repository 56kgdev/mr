<template>
	<main>
	
		<!-- Banner Section Start -->
		<section id="banner">
	
			<div class="container">
	
				<div class="row">
	
					<div class="col-md-12">
	
						<div class="banner_area">
	
							<h3 class="page_title">Detalle de propiedad</h3>
	
							<div class="page_location">
	
								<router-link to="/">Inicio</router-link>
	
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
	
											<div class="item active">
	
												<img :src="photos[0]" alt="">
	
											</div>
	
											<div class="item" v-for="(photo,i) in photos" :key="photo" :index="i" v-show="i>0">
	
												<img :src="photo" alt="">
	
											</div>
	
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

						<!-- Property detail  -->
	
						<div class="row">
	
							<div class="col-md-12">
	
								<div class="detail_text">
	
									<div class="property-text">
	
										<h4 class="property-title">{{ property.propiedad }}</h4>
	
										<span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ property.address }} </span>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: {{ property.direccion }} </span>
										<span><i class="fa fa-map-marker" aria-hidden="true"></i> Referencia: {{ property.referenciaEsp }} </span>																							
	
									</div>
	
								</div>
	
							</div>
	
						</div>						
						
						<br>
						<!-- End Property detail  -->	
	
						<div class="price" v-if="property.precio > 0">
	
							<h3>
	
								<span>En venta ${{ property.precio | format }} {{ property.MonedaVenta }}</span>
	
							</h3>
	
							<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
	
						</div>
	
						<div class="price" v-else-if="property.precioM>0">
	
							<h3>
	
								<span>En renta ${{ property.precioM | format}} {{ property.rentaMoneda}}</span>
	
							</h3>
	
							<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
	
						</div>
	
						<div class="price" v-else-if="property.holiday_price!=0">
	
							<h3>
	
								<span>Renta vacacional ${{ property.holiday_price | format}} {{ property.vacation_rental_currency}}</span>
	
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
	
											<li ><span>Folio : </span> #{{property.folio}}</li>
	
											<li v-if="property.mc != 0"><span>Area:</span> {{ property.mc }} m<sup>2</sup></li>
											
											<li v-else-if="property.ml != 0"><span>Area:</span> {{ property.ml }} m<sup>2</sup></li>
	
											<li v-if="property.recamaras != '0'"><span>Recamaras :</span> {{ property.recamaras }}</li>
	
											<li v-if="property.baños != '0'"><span>Baños :</span> {{ property.baños }}</li>

											<li ><span>Tipo de propiedad :</span> {{ property.typepropertyspa }}</li>
	
										</ul>
	
									</div>
	
								</div>
	
							</div>
	
						</div>
	
						<!-- End Property card details  -->
	
						<!-- Download files -->						
						<div class="row">
	
							<div class="col-md-12">
	
								<div class="property-summary2">
	
									<div class="files-prop">
										<h4>Descarga el contenido de esta propiedad</h4>
										<br>
										<h5>Banners</h5>
										<ul class="buttons-content">												
											<li v-if="property.banner1">												
												<a class="button-flyer" target="_blank" :href="property.banner1">
													<i class="fa fa-file-image-o"></i> 1 Foto
												</a>
											</li>
											<li v-if="property.banner3">
												<a class="button-flyer" target="_blank" :href="property.banner3">
													<i class="fa fa-file-image-o"></i> 3 Fotos
												</a>
											</li>	
											<li v-if="property.banner4">												
												<a class="button-flyer" target="_blank" :href="property.banner4">
													<i class="fa fa-file-image-o"></i> 4 Fotos
												</a>
											</li>
											<li v-if="property.banner6">												
												<a class="button-flyer" target="_blank" :href="property.banner6">
													<i class="fa fa-file-image-o"></i> 6 Fotos
												</a>
											</li>		
										</ul>	

										<br>
										<h5>FLYERS</h5>
										<ul class="buttons-content">												
											<li v-if="property.flyerEs">												
												<a class="button-flyer" target="_blank" :href="property.flyerEs">
													<i class="fa fa-file-pdf-o"></i> FLYER ESPAÑOL
												</a>
											</li>
											<li v-if="property.flyerEn">												
												<a class="button-flyer" target="_blank" :href="property.flyerEn">
													<i class="fa fa-file-pdf-o"></i> FLYER INGLES
												</a>
											</li>		
										</ul>														
	
									</div>
	
								</div>
	
							</div>
	
						</div>
						<!-- End Download files -->
	
						<!-- Social Share -->	
						<div class="row">
		
							<div class="col-md-12">
	
								<div class="property-summary2 property-summary3">
	
									<div class="social_areaProp">
		
										<h4>Comparte en redes sociales</h4>
	
										<br>	
	
										<ul>
	
											<li><a :href="'https://www.facebook.com/sharer/sharer.php?u='+ruta" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	
											<li><a :href="'https://twitter.com/intent/tweet?text='+ruta" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	
											<li><a :href="'https://www.linkedin.com/sharing/share-offsite/?url='+ruta" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
	
											<li><a :href="'https://plus.google.com/share?url='+ruta" target="_blank" class="gmas"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
	
											<li><a :href="'https://www.pinterest.com.mx/pin/create/button/?url='+ruta+'&media='+photos[0]+'&description='+property.webEsp" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
	
											<span class="whatsButton">
	
													<h4> <span id="contact-whats-leyend">Contáctanos por WhatsApp</span>
	
														<a class="contact-links" data-toggle="tooltip" data-placement="top" title="Contactar en WhatsApp" :href="'https://api.whatsapp.com/send?text=Buen%20día%20estoy%20interesado%20en%20esta%20propiedad:%20'+ruta+'&phone=52'+agentPhone" target="_blank">
	
															<i style="float:none; margin-left:15px;font-size:25px;line-height:40px;" class="fa fa-whatsapp"></i>
	
														</a> 
	
													</h4>										 									
	
												</span>
	
										</ul>
	
									</div>
		
								</div>
	
							</div>
		
						</div>

						<!-- End Social Share -->		
													
	
						<!-- Property characteristics		
								v-if="interiors.length > 0 && exteriors.length>0 && dev.length>0 && maintenance.length>0"
	
								v-if="interiors.length > 0"
	
								v-if="exteriors.length > 0"
	
								v-if="dev.length > 0"
	
								v-if=" maintenance.length > 0" -->
						
						<div class="row">
							<div class="col-md-12">
								<div class="more_information">
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
	
																<p style="text-align:justify;">{{ property.webEsp }}</p>
	
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
	
																<p style="text-align:justify;">{{ property.webEng }}</p>
	
															</div>
	
														</div>
	
													</div>
	
												</div>
	
											</div>
	
										</div>
								</div>
							</div>
						</div>
	
						<div v-if="property.interiores || property.exterior || property.maintenance || property.development" class="row">
	
							<div class="col-md-12">
	
								<div class="more_information">
	
									<div class="profile_data">
	
										<div class="accordion">
	
											<h4 class="inner-title">Amenidades</h4>
	
											<hr>
	
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	
												<div v-if="property.interiores" class="panel panel-default accordion_panel">
	
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
	
															<ul>
	
																<li v-for="(n,i) in interiors" index="n" :key="i"><span> <i class="fa fa-check" aria-hidden="true"></i> {{ interiors[i] }}</span></li>
	
															</ul>
	
														</div>
	
													</div>
	
												</div>
	
	
	
												<div v-if="property.exterior" class="panel panel-default accordion_panel">
	
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
	
															<ul>
	
																<li v-for="(n,i) in exteriors" index="n" :key="i"><span><i class="fa fa-check" aria-hidden="true"></i> {{ exteriors[i] }}</span></li>
	
															</ul>
	
														</div>
	
													</div>
	
												</div>
	
												<div v-if="property.maintenance" class="panel panel-default accordion_panel">
	
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
	
																<li v-for="(n,i) in maintenance" index="n" :key="i"><span><i class="fa fa-check" aria-hidden="true"></i>{{ maintenance[i] }}</span></li>
	
															</ul>
	
														</div>
	
													</div>
	
												</div>
	
												<div v-if="property.development" class="panel panel-default accordion_panel">
	
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
	
															<ul>
	
																<li v-for="(n,i) in dev" index="n" :key="i"><span><i class="fa fa-check" aria-hidden="true"></i> {{ dev[i] }}</span></li>
	
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
	
						<div v-if="property.services" class="row">
	
							<div class="col-md-12">
	
								<div class="single_feature">
	
									<h4 class="inner-title">Servicios</h4>
	
									<hr>
	
									<div class="info-list">	
										<ul>	
											<li v-for="(n,i) in services" index="n" :key="i" style="color:#000;"><span><i class="fa fa-check-square-o" aria-hidden="true"></i></span><b> {{ services[i] }}</b></li>		
										</ul>	
									</div>
	
								</div>
	
							</div>
	
						</div>
	
						<!-- End Property amenities -->	

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
	
										<h4 class="author_name">{{ property.fullname }}</h4>
	
										<a :href="'mailto:52'+property.cellphone"><i class="fa fa-phone"></i> {{ property.cellphone }}</a><br>
	
										<a :href="'mailto:'+property.email"><i class="fa fa-envelope"></i> {{property.email}}</a>
	
									</div>
	
									<!--<form class="message_agent" id="contactoform" name="contactProp-form" method="POST" action="/mail/mailer.php">-->
									<form class="message_agent" method="post" v-on:submit.prevent="sendEmail" name="contactProp-form" id="contactoform" autocomplete="on">
	
										<div class="input-group">
	
											<input v-model="name" type="text" class="form-control" name="name" id="name" placeholder="Nombre*" required="required">
	
										</div>
	
										<br>
	
										<div class="input-group">
	
											<input v-model="email" type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico*" required="required">
	
										</div>
	
										<br>
	
										<div class="input-group">
	
											<input v-model="phone" type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono*" required="required">
	
										</div>
	
										<br>
	
										<div class="input-group">
	
											<textarea v-model="message" class="form-control" id="message" name="message" placeholder="Mensaje*" required="required"></textarea>
	
											<!--<input type="hidden" name="folioProp" id="folioProp" v-model="folioProp">											
											<input type="hidden" name="urlSite" id="urlSite" v-model="urlSite">	
											<input type="hidden" name="company" id="company" v-model="company">	
											<input type="hidden" name="agentName" id="agentName" v-model="agentName">	
											<input type="hidden" name="agentEmail" id="agentEmail" v-model="agentEmail">	
											<input type="hidden" name="agentPhone" id="agentPhone" v-model="agentPhone">											
											<input type="hidden" name="addressCompany" id="addressCompany" v-model="addressCompany">	
											<input type="hidden" name="phoneCompany" id="phoneCompany" v-model="phoneCompany">	
											<input type="hidden" name="emailCompany" id="emailCompany" v-model="emailCompany">	
											<input type="hidden" name="logoCompany" id="logoCompany" v-model="logoCompany">-->
	
										</div>
	
										<div class="input-group">
											<button id="sendMailContact" type="submit" class="btn btn-default" name="submit">Enviar</button>
											<span class="submit button" id="sendMailContactSuccess" disabled > ¡Mensaje enviado correctamente :)!</span>
                							<span class="submit button" id="sendMailContactError" disabled>Ocurrió un error. Por favor recarga la pagina e intenta nuevamente :(</span>
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
	
	</main>
</template>

<script>
	import immoService from "@/services/immo";
	
	import Carousel from "@/components/carousel/Carousel";
	
	import CarouselSlide from "@/components/carousel/CarouselSlide";
	
	import numeral from "numeral";
	
	import VueResource from "vue-resource";
	
	import IpSlideProp from "@/components/slideProperty.vue";

	import config from '../services/config';
		
	import IpSearchForm from '@/components/SearchForm.vue'
	
	export default {	
		name: "app",	
		components: {	
			IpSlideProp,
			Carousel,	
			CarouselSlide,
			IpSearchForm	
		},	
		filters: {	
			truncate: function(str) {	
				return str.substring(0, 125) + "...";	
			},	
			format: function(value) {	
				return numeral(value).format("0,0");	
			}	
		},
	
		data() {	
			return {	
				propertiesFound: [],
				property: {},
				photos: [],	
				//operation: 'Venta',	
				interiors: [],	
				exteriors: [],	
				services: [],	
				dev: [],	
				maintenance: [],	
				id: [],	
				descripcion: [],	
				des: [],	
				precio: [],	
				/*modelo:{	
					checked:false	
				},*/	
				precioRenta: [],	
				precioVenta: [],			
				/* Datos para correo electronico */	
				//Datos para informacion por propiedad	
				urlSite: "http://seahouse.com.mx/",	
				company: "",
				companyId:"",
				agentId:"",	
				agentName: "",	
				agentPhone: "",	
				agentEmail: "",	
				name: "",	
				email: "",	
				phone: "",	
				message: "",
				folioProp: "",		
				//Datos para banner de email	
				logoPrev: "",		
				addressCompany: "",	
				phoneCompany: "",	
				emailCompany: "",	
				logoCompany: ""		
				/* Fin de datos para correo electronico */
	
			};	
		},
	
		created() {
	
			window.scrollTo(0, 0);
	
			const id = this.$route.params.id;
	
			let agentId=0;	

			if(this.$route.params.a){
                console.log("con agente")
                agentId=this.$route.params.a;
                this.ruta =this.urlSite+"propiedades-" +	this.$route.params.id + '-' + this.$route.params.a;	
			}else if( this.$route.params.namePropFilt ){
				console.log("con nombre")
                this.ruta=this.urlSite+'propiedad-'+this.$route.params.id+'-'+this.$route.params.namePropFilt;
			}else{
				console.log("sin nombre")
				this.ruta =this.urlSite+"propiedades-" +	this.$route.params.id;	
            }
	
	
			let cont = 0;
	
	
	
			immoService.getDetPropById(id).then(res => {
	
				if (res.property.company == "141") {
	
					const property = res.property;
	
	
					this.agentId=property.user
					this.agentName = property.fullname;
	
					this.agentPhone = property.cellphone;
	
					this.agentEmail = property.email;
	
					this.property = property;
	
					this.photos = property.photos;
	
					this.interiors = property.interiores;
	
					this.exteriors = property.exterior;
	
					this.services = property.services;
	
					this.dev = property.development;
	
					this.maintenance = property.maintenance;
	
					this.id = property.id;
	
					/*	
						Formateo del texto	
					*/
	
					this.property.webEsp = property.webEsp.replace("<br/>", "\n");
	
					this.property.webEsp = this.property.webEsp.replace("<br>", "\n");
	
					this.property.webEsp = this.property.webEsp.replace("<br>", "\n");
	
	
	
					this.property.webEng = property.webEng.replace("<br/>", "\n");
	
					this.property.webEng = this.property.webEng.replace("<br>", "\n");
	
					this.property.webEng = this.property.webEng.replace("<br>", "\n");
	
	
	
					this.folioProp = property.folio;
	
				} else {
	
					this.$router.push({
	
						name: "404"
	
					});
	
				}
	
			});
			
			immoService.getInfoCompany().then(res => {
	
				const foDat = res[0];
	
				this.urlSite = foDat.website;
	
				this.company = foDat.company;
	
				this.addressCompany = foDat.address1;
	
				this.phoneCompany = foDat.phone1;
	
				this.emailCompany = foDat.reserveemail;
	
				this.logoCompany = foDat.logo;
	
			}).then(()=>{
				this.companyId=config.companyId;
			});	
		
			if (this.property.rentaL == 1) {
	
				this.operation = "Renta";
	
			}						
	
		},
	
		methods: {
	
			sendEmail(){
				var tis = this;
				$.ajax({
					url: "http://www.immosystem.com.mx/api/mailWeb/mailer.php",
					type: "post",
					data: {
						name:tis.name,
						email:tis.email,
						phone:tis.phone,
						message:tis.message,
						folioProp: tis.folioProp,
						urlSite: tis.urlSite,
						ruta:tis.ruta,
						company: tis.company,
						agentName: tis.agentName,
						agentEmail: tis.agentEmail,
						agentPhone: tis.agentPhone,
						addressCompany: tis.addressCompany,
						phoneCompany: tis.phoneCompany,
						emailCompany: tis.emailCompany,
						logoCompany: tis.logoCompany
					},
					beforesend: function() {
						console.log("Procesando para enviar");
					},
					success: function(response) {
						console.log("se envió correctamente");
						$('#sendMailContact').css({'display': 'none'});
						$('#sendMailContactSuccess').css({'display': 'block'});
						tis.resetForm(tis);
						tis.getPosicion(tis);
					},
					error: function() {
						$('#sendMailContact').css({'display': 'none'});
						$('#sendMailContactError').css({'display': 'block'});
						console.log("falló el envio de datos");
						tis.resetForm(tis);
					}
				});				
				return;
			},
			getPosicion(tis) {
				var lat;
				var lng;
				var address;

				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(
						displayLocationInfo,
						errorLocation
					);
				}
				function displayLocationInfo(position) {
					lng = position.coords.longitude;
					lat = position.coords.latitude;
					console.log("datos de ubicacion: ",lat+','+lng)
					result(lat, lng);
				}
				function errorLocation() {
					console.log("No se pudo obtener la ubicacion");
					lat = '0';
					lng='0';
					address='0';
					tis.sendDataImmo(lat, lng, address, tis);
				}
				function result(lat, lng, addressClient) {
					immoService.getLocation(lat, lng).then(res => {
						address = res;
						tis.sendDataImmo(lat, lng, address, tis);
					});
				}
				return;
			},
			sendDataImmo(lat, lng, address, tis) {		
				var urls =
					'http://www.immosystem.com.mx/api/contact.php?companyid='+
					tis.companyId+
					'&fullname=' +
					tis.name +
					'&email=' +
					tis.email +
					'&phone=' +
					tis.phone +
					'&message=' +
					tis.message +
					//'&num_desarrollo='+
					'&propertyid='+
					tis.folioProp+					
					'&location=' +
					address +
					'&contacttype=2&latitude='+
					lat +
					'&longitude='+
					lng+
					'&soldagentid='+
					tis.agentId;
				
				$.ajax({
				url: urls,
				type:"get",
				success: function(respuesta) {
					console.log("coorecto")
				},     
				error:function(){
					console.log("error en envio de datos a Immo");
				}                           
				});

				return;
			},
			resetForm(tis){
				$("#name").attr("disabled","disabled");
				$("#email").attr("disabled","disabled");
				$("#phone").attr("disabled","disabled");
				$("#message").attr("disabled","disabled");      

				return;
			},
			setPropertiesFound (properties) {
				this.propertiesFound = properties
				this.$router.push({ name: "search", params: { properties } });
			}
		}	
	};
</script>

<style scoped>
	.price {
	
		background-color: #9cd7d3c5;
	
		border-radius: 5px;
	
		width: 50%;
	
		height: auto;
	
		text-align: center;
	
	}
	@media (max-width: 620px){
		.price {
											
			width: 100%;
		
		}
		.property-summary3{
			height: auto;
			display: flex;
    		flex-wrap: wrap;
		}
		#contact-whats-leyend{			
			font-size: 14px;
		}
	}
	
	
	.price h3 {
	
		color: #000;
	
		padding-top: 10px;
	
		padding-bottom: 10px;
	
	}
	
	
	
	#leyendaPrecios {
	
		float: right;
	
		font-size: 11px;
	
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
	
		padding-bottom: 10px;
	
	}
</style>