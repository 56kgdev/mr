<template>
	<div> 
		<!-- START FOOTER TOP -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="footer_widget"> 
							<div class="footer-logo"><router-link to="/"><img class="nav-logo" :src="'http://agent.immosystem.com.mx/'+logo" alt=""></router-link></div>
							<div class="footer_contact">
								<!--<p>Netus ut pede mus vestibulum montes. Mus. Pretium. Mattis habitant netus ligula ridiculus a nam bibendum fusce litora. Ac ullamcorper blandit, viverra pellentesque scelerisque. Phasellus aptent sociosqu nec posuere.</p>-->
							</div>
							<div class="social_area">
								<ul>
									<li v-if="fb!='0'"><a :href="fb" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li v-if="tw!='0'"><a :href="tw" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li v-if="linkedin!='0'"><a :href="linkedin" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li v-if="gmas!='0'"><a :href="gmas" class="gmas"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li v-if="youtube!='0'"><a :href="youtube" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
									<li v-if="skype != '0'"><a :href="skype" class="skype"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
									<li v-if="pinterest != '0'"><a :href="pinterest" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li v-if="instagram != '0'"><a :href="instagram" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>								
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
											<span>{{address}}</span>
										</div>
									</li>
									<li> <i class="fa fa-phone" aria-hidden="true"></i>
										<div class="ftr-list">
											<h6 class="touch-title">Teléfono de oficina</h6>
											<a :href="'tel:52'+phone1">{{phone1}}</a>
										</div>
									</li>
									<li> <i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div class="ftr-list">
											<h6 class="touch-title">Correo Electrónico</h6>
											<a :href="'mailto:'+email">{{email}}</a> 
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
									<li><router-link to="/">Inicio</router-link></li>
									<li><router-link to="/nosotros">Nosotros</router-link></li>
									<li><router-link to="/propiedades">Propiedades</router-link></li>
									<li><router-link to="/contacto">Contacto</router-link></li>
									<!--<li><router-link to="/aviso-privacidad">Aviso de privacidad</router-link></li>-->
									<li><a href="http://agent.immosystem.com.mx/" target="_blank">Acceder a IMMO System<sup>&copy;</sup></a></li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="social_area dadFace">
					<ul>
						<h5>Comparte.</h5>
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://seahouse.com.mx/" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li ><a href="https://twitter.com/intent/tweet?text=http://seahouse.com.mx/" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li ><a href="https://www.linkedin.com/sharing/share-offsite/?url=http://seahouse.com.mx/" target="_blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li ><a href="https://plus.google.com/share?url=http://seahouse.com.mx/" target="_blank" class="gmas"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>							
						<li ><a :href="'https://www.pinterest.com.mx/pin/create/button/?url=http://seahouse.com.mx/&media=http://agent.immosystem.com.mx/'+logo+'&description=Venta y renta de casas y más en Guadalajara : SEAHOUSE'" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					</ul>
				</div>				
			</div>
		</section>
		<!-- END FOOTER TOP -->
		
		<!-- START FOOTER BOTTOM -->
		<div id="bottom_footer">
			<div class="reserve_text"> <span>{{company}} <sup>&copy;</sup> 2018 Todos los derechos reservados.
				<br> By <a href="http://www.immosystem.com.mx/" target="_blan">IMMO System <sup>&copy;</sup></a>
				<!--<router-link to="/aviso-privacidad"> Aviso de privacidad</router-link>-->
				</span> </div>
		</div>

		<!--<footer class="footer">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">
						<p class="footer_copyright">
							{{company}} &copy; 2018 Todos los derechos reservados.
							<br> By <a href="http://immosystem.com.mx" target="_blan">IMMO System &copy;</a>
						</p>		
					</div>
				</div>
			</div>
		</footer>-->
		<!-- END FOOTER BOTTOM-->	
	</div>
</template>
<script>
import immoService from '@/services/immo'

export default {
	name: 'app',
	data(){
		return{
			company:[],
			phone1:[],
			email:[],
			address:[],
			logo:[],
			fb:[],
			tw:[],
			gmas:[],
			linkedin:[],
			pinterest:[],
			skype:[],
			youtube:[],
			instagram:[]
		}
		
	},
	created(){
		immoService.getInfoCompany()
			.then(res => {
				const foDat=res[0]
				this.company=foDat.company
				this.phone1=foDat.phone1
				this.email=foDat.reserveemail
				this.address=foDat.address1
				this.fb=foDat.fb
				this.tw=foDat.tw
				this.linkedin=foDat.linkedin
				this.pinterest=foDat.pinterest
				this.skype=foDat.skypeid
				this.gmas=foDat.gmas
				this.youtube=foDat.youtube
				this.instagram=foDat.instagram
				this.logo=foDat.logo
			})
	}
}
</script>


<style scoped>
	.contact-links {
		font-size: inherit;
		text-transform: none;
	}

	.footer-logo {
		display: inline-block;
		max-width: 100%;
	}

	.footer-logo img {
		margin-top: 50%;
		margin-left: -10px;		
		width: 100%;
	}

	.footer_contact {
		margin: 10px 0;
	}
	.whats-app a{
		font-size:12px;
		color:#000;
	}
	.whats-app a:hover{
		color:#d05953;		
	}
	a:hover{
		color:#d05953;
	}
</style>

