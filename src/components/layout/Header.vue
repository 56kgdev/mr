<template> 
  <!-- START NAVBAR -->
  	<header id="header">		  		
		<!-- Nav Header Start -->
		<div id="nav_header">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<nav class="navbar navbar-default nav_edit">
							<!--<div>
								<span class="whatsButton">	
									<h5> <span id="contact-whats-leyend">Contáctanos</span>
										<a class="contact-links" data-toggle="tooltip" data-placement="top" title="Contactar en WhatsApp" :href="'https://api.whatsapp.com/send?text=Buen día estoy interesado en esta propiedad: '+ruta+'&phone=52'+agentPhone" target="_blank">
											<i style="float:none; margin-left:15px;font-size:20px;line-height:40px;" class="fa fa-whatsapp"></i>
										</a> 
									</h5>										 									
								</span>
							</div>-->								
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">																		
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 										
									<span class="sr-only">Toggle navigation</span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
									<span class="icon-bar"></span> 
								</button>													
								<router-link class="navbar-brand" to="/"> <img class="nav-logo" :src="'http://agent.immosystem.com.mx/'+logo" alt=""> </router-link> 									
							</div>
							
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse my_nav" id="bs-example-navbar-collapse-1">																											
								<ul class="nav navbar-nav navbar-right nav_text">
									<li><router-link to="/">Inicio </router-link></li>
									<li><router-link to="/nosotros">Nosotros</router-link></li>
									<li><router-link to="/propiedades">Propiedades</router-link></li>
									<li><router-link to="/contacto">Contacto</router-link></li>		
									<!--<li><router-link to="/aviso-privacidad">Aviso de privacidad</router-link></li> -->
								</ul>																											
							</div>								
							<!-- /.navbar-collapse --> 
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Nav Header End -->
	</header>
  <!-- END NAVBAR -->
</template>
<script>
import immoService from '@/services/immo'

export default {
  name: 'app',
	data(){
		return{
			company:[],
			logo:[],
			email:"",
			langText:"Esp",
			langId:1,
			phone:""
		}
		
	},
	created(){
		immoService.getInfoCompany()
			.then(res => {
				console.log(res);
				const foDat=res[0]
				this.logo=foDat.logo
				this.company=foDat.company
				this.email=foDat.reserveemail
				this.phone=foDat.phone1
			})
	},
	methods:{
		changeLang(lang){
			console.log(lang);
			switch(lang){
				case 1:
					this.langText="Esp"
					break;
				case 2:
					this.langText="Eng"
					break;
				default:
					this.langText="Esp"
					break;
			}
		}
	}
}
</script>


<style scoped>
	.navbar-brand img {
	    margin-top: -17px;
    width: 85px;		
	}
	/*@media only screen and (max-width:991px) {
		.navbar-brand img{
			width:150%;
		}
	}*/
	@media only screen and (max-width:767px) {
		.navbar-brand img{
			width:100%;
		}
	}
	.navbar-nav{
		margin:0px !important;
	}
	.navbar-collapse{
		border-color: transparent !important;
	}
	.aviso-priv a{
		color:#000;
	}
	.aviso-priv a:hover{
		color:#d05953;
	}
</style>