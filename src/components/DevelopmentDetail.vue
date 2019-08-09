<template>
  <main>
		<div class="welcome-slider-area">
			<div id="carouselArea" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
				 <!--ImageId--> 
				<ol class="carousel-indicators carousel-indicators-slider">
					<li data-target="#carouselArea" data-slide-to="0" class="active"></li>
					<li v-for="n in photos.length - 1" :key="n"  data-target="#carouselArea" :data-slide-to="n"></li>
				</ol>
				<div  class="carousel-inner text-center single-slide-item-table" role="listbox">
				 <!--Items of Slide-->

					<!--First item/Image of Slide-->
					<div class="item active" >
						<div class="single-slide-item" :style="{ 'background-image': 'url(' + photos[0] + ')' }">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
													<h2 >{{development.propiedad}}</h2>
													<p>{{development.city}}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <!--Others items/Images of Slide-->
					<div v-for="(photo,i) in photos" :key="photo" :index="i" v-if="i>0" class="item " >
						<div class="single-slide-item" :style="{ 'background-image': 'url(' + photo + ')' }">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
													<h2 >{{development.propiedad}}</h2>
													<p>{{development.city}}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselArea" role="button" data-slide="prev" style="position:absolute;margin-top:-25%; z-index:1000; left:2%; font-size:50px; float:left;">
					<i class="fa fa-angle-left" style="font-size:70px;"></i>
				</a>
				<a class="carousel-control-next" href="#carouselArea" role="button" data-slide="next" style="position:absolute;margin-top:-25%; z-index:1000; right:2%; font-size:50px; float:left;">
					<i class="fa fa-angle-right" style="font-size:70px;"></i>
  			</a>
			</div>
		</div>
	  <!-- Start Content -->
		<br>
	  <div class="main" role="main">
	    <div id="content" class="content full">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-9">
	            <div class="single_property">
	              <h2 class="page-title">{{ development.propiedad }}, <span class="location">{{development.city }}</span></h2>
	              <!--<div class="price" v-if="development.pr>0"><span>$ {{ property.precio | format }} {{ property.MonedaVenta}}</span></div>-->
                  <div class="price"><span v-if="development.precio_minimo > 0">Precio Desde: ${{development.precio_minimo | format}} {{development.moneda}}</span></div>
	              <!--<div class="price" v-if="property.precioM>0"><span>$ {{ property.precioM | format }} {{ property.rentaMoneda}}  (Renta)</span></div>-->
								<div class="property-amenities clearfix" style="padding-left:3%; font-size:15px;"> 
									<div class="single_property_price"><span  style="float:right;"><strong  v-if="development.venta>0">EN VENTA </strong> <strong v-if="development.preventa>0">EN PREVENTA</strong><br>Folio del desarrollo: #{{development.folio}}</span></div>
									<br>
									<span class="area"  v-if="development.construccion!=null"><br><strong>EN CONSTRUCCIÓN</strong></span> 
                                    <span class="area"  v-if="development.construccion!=null"><br>AVANCE:<strong>{{development.avance}}</strong></span>
									<span class="parking"  v-if="development.construccion==null"><br>TOTAL DE UNIDADES: <strong>{{ development.totalUnidades }}</strong></span> 
                                    <span class="beds"  v-if="development.ocupacion!=null"><br>OCUPACION: <strong>{{ development.ocupacion }}</strong></span> 
									<span class="baths"  v-if="development.tipoPago!=null"><br>TIPO DE PAGO: <strong>{{ development.tipoPago }}</strong></span> 									
								</div>
								<br>
								<h3>Descripción</h3>
								<div class="tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#Spanish" style="color:#000;">
											Español
										</a></li>
										<li v-if="development.ingles != 0"><a data-toggle="tab" href="#English" style="color:#000;">
											English
										</a></li>
									</ul>
									<div class="tab-content">
										<div id="Spanish" class="tab-pane active">
											<div class="description" >
												<blockquote>{{ development.español }}</blockquote>
											</div>
										</div>
										<div id="English" class="tab-pane">
											<div class="description" >
												<blockquote>{{ development.ingles }}</blockquote>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#interiors"  style="color:#000;">
											Amenidades
										</a></li>
										<!--<li><a data-toggle="tab" href="#exteriors"  style="color:#000;">
											Exteriores
										</a></li>-->
										<li><a data-toggle="tab" href="#services" style="color:#000;">
											Servicios
										</a></li>
										<!--<li><a data-toggle="tab" href="#dev"  style="color:#000;">
											Desarrollo
										</a></li>
										<li><a data-toggle="tab" href="#maintenance" style="color:#000;">
											Mantenimiento
										</a></li>-->
									</ul>
									<div class="tab-content">
										<div id="interiors" class="tab-pane active">
											<div class="additional-amenities" >
													<div class="available" v-for="(n,i) in amenidades" index="n" :key="i" style="color:#000;" >
														<i class="fa fa-check-square"  ></i> {{ amenidades[i] }}
													</div>
											</div>
	                 					 </div>
	                                    <!--<div id="exteriors" class="tab-pane">
											<div class="additional-amenities">
												<div class="available" v-for="(n,i) in exteriors" index="n" :key="i"  style="color:#000;">
													<i class="fa fa-check-square"></i> {{ exteriors[i] }}
												</div>
											</div>
	                                    </div>-->
										<div id="services" class="tab-pane">
											<div class="additional-amenities">
												<div class="available" v-for="(n,i) in servicios" index="n" :key="i"  style="color:#000;">
													<i class="fa fa-check-square"></i> {{ servicios[i] }}
												</div>
											</div>
	                                    </div>
										<!--<div id="dev" class="tab-pane">
											<div class="additional-amenities">
												<div class="available" v-for="(n,i) in dev" index="n" :key="i" style="color:#000;" >
													<i class="fa fa-check-square"></i> {{ dev[i] }}
												</div>
											</div>
	                                    </div>
										<div id="maintenance" class="tab-pane">
											<div class="additional-amenities">
												<div class="available" v-for="(n,i) in maintenance" index="n" :key="i"  style="color:#000;">
													<i class="fa fa-check-square"></i> {{ maintenance[i] }}
												</div>
											</div>
	                                    </div>-->
	                                </div>
								</div>
								<br>
	                             <h3>Agente</h3>
								<hr>
                                <div class="agent">
                                    <div class="row">
                                        <div class="col-md-4" style="width:250px; height:300px;">                                            
                                            <!--<img src="http://www.iplusrealestate.com/src/assets/img/Foto%20perfil_2.jpg" style="width:100%; height:100%;" alt="">-->
                                        </div>
                                                            <br>
                                        <div class="col-md-7">
                                        <h4><a style="color:#000;">{{ development.fullname }}</a></h4>
                                                                <div class="footer_contact">
                                                                    <ul>
                                                                        <li ><i class="fa fa-envelope" style="color:#000;"></i> <span><a class="contact-links" :href="'mailto:' + development.email" style="color:#000;">{{ development.email }}</a></span></li>								
                                                                        <li><i class="fa fa-phone" style="color:#000;"></i> <span><a class="contact-links" style="color:#000;" >{{ development.cellphone }}</a></span></li>
                                                                        
                                                                    </ul>
                                                                </div>
                                            <div class="agent-contacts clearfix">
                                                <button id="buttonOpenModal" class="buttonOpenModal btn" @click="openModal()">Contactar</button>
                                            <div class="col-md-8">
															 <div class="footer_social">
																<ul>
																		<li v-if="development.fb != '0'  "><a data-toggle="tooltip" data-placement="top" title="Facebook" :href="development.fb" target="_blank"><i class="fa fa-facebook"></i></a>
																		</li>
																		<li v-if="development.tweet != '0' "><a data-toggle="tooltip" data-placement="top" title="Twitter"  :href="development.tweet"><i class="fa fa-twitter "></i></a>
																		</li>
																		<li v-if="development.gmas != '0' "><a data-toggle="tooltip" data-placement="top" title="Google Plus" :href="development.gmas"><i class="fa fa-google-plus "></i></a>
																		</li>
																		<li v-if="development.skypeid != '0' "><a data-toggle="tooltip" data-placement="top" title="Skype" :href="development.skypeid" target="_blank"><i class="fa fa-skype"></i></a>
																		</li>
																		<li v-if="development.pinterest != '0' "><a data-toggle="tooltip" data-placement="top" title="Pinterest" :href="development.pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
																		</li>

																</ul>
															 </div>
	                           	</div>                       		
	                          </div>
	                      </div>
	                  </div>
	              </div>
	            </div>
								<!-- Start Mail Form -->
							<div id="mailModal" class="modal">
									<form id="contactoform" name="contactProp-form" class="modal-content animate" method="POST" action="/mail/mailer.php">
										<div class="titleContainer">
											<span>
												Contactar 
												<span @click="closeMail()" class="close" title="Close Modal">&times;</span><hr>
											</span>
										</div>
										
										<div class="container">
											<div class="form-group">
												<input type="text" id="name" name="name" class="form-control " placeholder="Nombre*" required v-model="name">
											</div>
											<div class="form-group">
												<input type="email" id="email" name="email" class="inputInfo form-control" placeholder="Correo electronico*" required v-model="email">
											</div>
											<div class="form-group">
												<input type="tel" id="phone" name="phone" class="form-control" placeholder="Telefono" minlength="10" maxlength="15"  required v-model="phone">
											</div>
											<div class="form-group">
												<textarea cols="6" rows="5" id="message" name="message" class="form-control" placeholder="Mensaje*" required v-model="message"></textarea>
											</div>
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
										<span>
											<button type="submit" id="sendMail"  class="sendButton btn btn-block" style="align:center;" >Enviar</button>
											<button type="button" id="sendMail" @click="closeMail()" class="cancelbtn btn btn-block" style="align:center;">Cancel</button>
										</span>
      														
									</form>								
							</div><!-- End Maail Form -->
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</main>
</template>
<script>
    import immoService from '@/services/immo'
	import Carousel from '@/components/carousel/Carousel'
	import CarouselSlide from '@/components/carousel/CarouselSlide'
	import numeral from 'numeral'
	import VueResource from 'vue-resource'
	import IpSlideProp from '@/components/slideProperty.vue'

	export default {
		name:'app',
		components:{
			IpSlideProp
		},
		filters: {
      truncate: function (str) {
        return str.substring(0, 125) + '...'
      },
      format: function (value) {
        return numeral(value).format('0,0')
      }
		},
		data() {
			
			return {
				development: {},
				photos: [],
				//operation: 'Venta',
				amenidades: [],
				//exteriors: [],
				servicios: [],
				//dev: [],
				//maintenance: [],
				id:[],
				descripcion:[],
				des:[],
				precio:[],
				/*modelo:{
				checked:false
				},*/
				precioRenta:[],
				precioVenta:[],			

				/* Datos para correo electronico */
				
				//Datos para informacion por propiedad
				urlSite:'',
				company:'',
				agentName:'',
				agentPhone:'',
				agentEmail:'',
				name: '',
				email: '',
				phone: '',
				message: '',
				
				folioProp:'',

				//Datos para banner de email
				logoPrev:'',

				addressCompany:'',
				phoneCompany:'',
				emailCompany:'',
				logoCompany:''

				
				

				/* Fin de datos para correo electronico */
				
			}
		},
		created () {
			const id = this.$route.params.id
			
			let cont=0;

			immoService.getDetDevsById(id)
				.then(res => {
					const development = res.development
					this.development = development
					this.photos = development.photos
					this.amenidades = development.amenidades
					//this.exteriors = property.exterior
					this.servicios = development.servicios
					//this.dev = property.development
					//this.maintenance = property.maintenance
					this.id = development.folio
					/*
						Formateo del texto

					this.des=property.webEsp
					this.property.webEsp=property.webEsp.replace(/<[^>]*>?/g, '');;
					this.property.webEng=property.webEng.replace(/<[^>]*>?/g, '');;
					//this.property.webEng=$(property.webEng).text();*/
					this.development.webEsp=development.español
					this.development.webEng=development.ingles

					//this.folioProp=property.folio
				})

				immoService.getInfoCompany()
				.then(res => {
					const foDat=res[0]
					this.urlSite=foDat.website
					this.company=foDat.company
					this.addressCompany=foDat.address1
					this.phoneCompany=foDat.phone1
					this.emailCompany=foDat.reserveemail
					this.logoCompany=foDat.logo
					
				})

      if (this.development.preventa == 1) {
        this.operation = "Preventa"
			}

			var modal=document.getElementById('mailModal');
			window.onclick = function(event) {
    		if (event.target == modal) {
       	 modal.style.display = "none";
   		 	}
			}
		},
		components:{
			Carousel,
			CarouselSlide
		},
		methods:{
			openModal(){
				document.getElementById('mailModal').style.display='block'
			},
			closeMail(){
				document.getElementById('mailModal').style.display='none';
				document.getElementById('name').value='';
				document.getElementById('email').value='';
				document.getElementById('phone').value='';
				document.getElementById('comments').value='';
			},
			/*sendMail(){
				this.$http({url:'http://www.immosystem.com.mx/api/mailer.php',method:'POST',data:{
  			name:this.name,
  			email: this.email,//
  			phone: this.phone,//
				message: this.message,
				folioProp:this.folioProp//
				} }).then(function () {
					console.log('form submitted')
				}, function () {
					console.log('form failed')
				})
				this.closeMail();
				//variable=documenet.nombre_del_form.nombre_del_control.value
			}*/
		}
	}
</script>
<style>
    
	a {
		text-decoration: none;
	}
    input[type=text], input[type=email],input[type=tel]{
        width: 400px;
        height: 60px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #cbb114;
        box-sizing: border-box;
	}
	.form-group textarea{
		width: 400px;
        height: 60px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #cbb114;
        box-sizing: border-box;
	}

    @media only screen and (max-width:500px) {
        input[type=text], input[type=email],input[type=tel]{
			width: 100%;
			height: 60px;

			margin: 2px 0;
			display: inline-block;
			border: 1px solid #cbb114;
			box-sizing: border-box;
		}
		.form-group textarea{
		width: 100%;
		height: 60px;
		margin: 2px 0;
		display: inline-block;
		border: 1px solid #cbb114;
		box-sizing: border-box;
	}
	}
</style>


