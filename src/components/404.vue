<template>
  <main>
      <!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">404</h3>
							<div class="page_location">
								<router-link to="/">Inicio</router-link> 															 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>404</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section End -->
		
		<!-- Error Section Start -->
		<section id="page_error">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="error_area">
							<div class="page_error">404</div>
							<h4 class="section_title_green">Opps Esta página no puede encontrarse!</h4>
							<p>La página que busca no parece existir.<br> Regrese o diríjase a nuestra página principal para elegir una nueva dirección.</p>
							<router-link to="/" class="btn btn-default">Ir al inicio</router-link>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Error Section End -->
  </main>  
</template>
<script>
export default {
	created(){
		window.scrollTo(0,0);
	}
}
</script>
<style>


</style>

