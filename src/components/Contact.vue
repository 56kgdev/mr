<template>
	<main>
		
		<!-- START SECTION TOP -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Contacto</h3>
							<div class="page_location">
								<router-link to="/">Inicio</router-link>
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>Contacto</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		
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
		<!-- START CONTACT FORM  -->
		<section id="contact" class="contact-us section-padding">
			<div class="container"> 
				<div class="row ">
					<div align="center" >
						<div class="single_contact_one">
							<div class="contact">
								<h3> Contactanos</h3>
								<hr>
								<form method="post" v-on:submit.prevent="sendEmail" name="contact-form" id="contactform" autocomplete="on">
									<div class="row">
										<div class="form-group col-md-12">
											<input type="text" name="name" class="form-control" id="name" placeholder="Nombre *" required="required" v-model="name">
										</div>
										<div class="form-group col-md-12">
											<input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico *" required="required" v-model="email">
										</div>
										<div class="form-group col-md-12">
											<input type="tel" name="phone" class="form-control" id="phone" placeholder="Teléfono *" required="required" v-model="phone">
										</div>
										<div class="form-group col-md-12 mbnone">
											<textarea rows="6" name="message" class="form-control" id="message" placeholder="Tu mensaje *" required="required" v-model="message"></textarea>
										</div>
									</div>
									<div >
										<div>
												<input id="sendMailContact" class="btn btn-default" type="submit" value="Enviar">
												<input type="submit" class="submit button" id="sendMailContactSuccess" disabled value="¡Mensaje enviado correctamente :)!">
                				<input type="submit" class="submit button" id="sendMailContactError" disabled value="Ocurrió un error. Por favor recarga la pagina e intenta nuevamente :(">
											</div>
										</div>
								</form>	
							</div>
						</div>
					</div><!-- END COL  -->
					
					<!-- END COL  -->
				</div><!-- END ROW -->
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END CONTACT FORM -->

	</main>
</template>

<script>
import RlLoader from '@/components/shared/Loader.vue';
import VueResource from 'vue-resource';
import immoService from '@/services/immo';
import config from '../services/config';
import IpSearchForm from '@/components/SearchForm.vue';
export default {
  name: 'app',
  components: {
		RlLoader,
		IpSearchForm
  },
  data () {
    return {
			propertiesFound: [],
      isSending: false,
			name: '',
			phone:'',
    	email: '',
			message: '',
			/* Datos para correo electronico */
					
			//Datos para informacion por mensaje
			urlSite:'http://seahouse.com.mx/',
			company:'',		
			companyid:'',

			//Datos para banner de email
			logoPrev:'',

			addressCompany:'',
			phoneCompany:'',
			emailCompany:'',
			logoCompany:''

			/* Fin de datos para correo electronico */
    }
  },
  created(){
	  window.scrollTo(0,0);
	  immoService.getInfoCompany()
			.then(res => {
				const foDat=res[0]
				this.urlSite=foDat.website
				this.company=foDat.company
				this.addressCompany=foDat.address1
				this.phoneCompany=foDat.phone1
				this.emailCompany=foDat.reserveemail
				this.logoCompany=foDat.logo
			}).then(()=>{
				this.companyId=config.companyId;
			})
  },
  methods: {
		setPropertiesFound (properties) {
			this.propertiesFound = properties
			this.$router.push({ name: "search", params: { properties } });
		},
		
  	sendEmail() {
      var tis = this;

      $.ajax({
        url: "http://www.immosystem.com.mx/api/mailWeb/mailerContact.php",
        type: "post",
        data: {
          name: tis.name,
          email: tis.email,
          message: tis.message,
          urlSite: tis.urlSite,
          company: tis.company,
          addressCompany: tis.addressCompany,
          phoneCompany: tis.phoneCompany,
          emailCompany: tis.emailCompany,
          logoCompany: tis.logoCompany
        },        
        success: function(response) {
					console.log("se envió correctamente");
					$("#sendMailContact").css({ display: "none" });
          $("#sendMailContactSuccess").css({ display: "block" });
          tis.resetForm(tis);
          tis.getPosicion(tis);
        },
        error: function() {
					$("#sendMailContact").css({ display: "none" });
          $("#sendMailContactError").css({ display: "block" });
          tis.resetForm(tis);
          console.log("falló el envio de datos");
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
        '&location=' +
        address +
        '&contacttype=1&latitude='+
        lat +
        '&longitude='+
        lng+
        '&soldagentid=0';

         console.log("enviando para salir", urls);

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
		resetForm(tis) {
      $("#name").attr("disabled", "disabled");
      $("#email").attr("disabled", "disabled");
      $("#phone").attr("disabled", "disabled");
      $("#message").attr("disabled", "disabled");

      return;
    }
  }
}
</script>

<style scoped>
	a:hover {
		color: inherit;
	}
	input[type=text], input[type=email],input[type=tel], textarea{
		width: 500px;
		height: 60px;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #cc2922;
		box-sizing: border-box;
	}

	@media only screen and (max-width:500px) {
		input[type=text], input[type=email],input[type=tel],textarea{
			width: 100%;
			height: 60px;

			margin: 2px 0;
			display: inline-block;
			border: 1px solid #cc2922;
			box-sizing: border-box;
		}
	}
</style>
