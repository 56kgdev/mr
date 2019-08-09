<template>
 <main>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Desarrollos</h1>
						<ol class="breadcrumb">
						  <li><router-link to="/menesse-blank/">Inicio</router-link></li>
						  <li class="active">Desarrollos</li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->

		<!-- START PROPERTY -->	
		<section class="template_property">
			<div class="container">
				<div class="row">

					<ip-development v-for="p in developments" :key="p.num_desarrollo" :development="p"></ip-development>
											
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  PROPERTY -->
  </main>
</template>
<script>
import immoService from '@/services/immo'
import IpDevelopment from '@/components/Development.vue'
import RlLoader from '@/components/shared/Loader.vue'

export default {
  name: 'app',
  components: {
  	IpDevelopment,
  	RlLoader
  },
  data () {
    return {
      developments: [],
      isLoading: false
    }
  },
  created () {
  	this.isLoading = true

  	immoService.getAllDevs()
  		.then(res => {
  			this.developments = res
  			this.isLoading = false
  		})
  }
}
</script>
<style>
  
  
</style>


