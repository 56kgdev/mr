<template>
	<main>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;background-attachment:fixed; padding:30px 0;">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Propiedades encontradas: {{ results }}</h1>
						<ol class="breadcrumb">
						  <li><router-link to="/"><i class="fa fa-undo"></i> Inicio</router-link></li>
						</ol>
						<h4 >Pagina: {{pag}}</h4>						
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
		<!-- START PROPERTY -->	
		<section class="template_property">
			<div class="container">
				<div class="row">			  
					<ip-property v-for="(p,index) in propertiesFound" :key="p.propertyid" :property="p" :index="index" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index"></ip-property>
					<!-- Paginator -->
					<div class="row">
						<div class="col-md-12">
							<div class="pagination_area">
								<nav aria-label="Page navigation">
									<ul class="pagination pagination_edit">
										<li v-show="pag != 1"  id="previous">
											<a href="#" aria-label="Previous" @click.prevent="pag -= 1">													
												<span aria-hidden="true">prev</span>
											</a>
										</li>
										<li v-for="(n) in NUM_PAGES" :key="n" :id="n" @click.prevent="pag = n" v-bind:class="{'active':(pag==n)}">
											<a aria-hidden="true" href="#">{{n}}</a>
										</li>
										<!--<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>-->
										<li v-show="pag * NUM_RESULTS / propertiesFound.length < 1" id="next">
											<a href="#" aria-label="Next"  @click.prevent="pag += 1">
												<span aria-hidden="true">next</span>													
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--End paginator -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  PROPERTY -->	
		<div class="container" align="center">
			<div class="slider-search-2" align="center">
				<ip-search-form @select="setPropertiesFound"></ip-search-form>
			</div>
		</div>
		
		<hr>
  </main>
</template>

<script>
	import IpProperty from '@/components/Property.vue'
	import IpSearchForm from '@/components/SearchForm.vue'
	import IpLoader from '@/components/shared/Loader.vue'

	export default {
		components: {
			IpProperty,
			IpSearchForm,
			IpLoader
		},
		
		/*props: {
      		properties: { required: true }
		},*/
		
		data () {
			return {
				propertiesFound: [],
				results: '',
				pag:1,
				NUM_RESULTS:21,							
				isLoading: false,
				NUM_PAGES:0
			}
		},

		methods: {
			setPropertiesFound (properties) {
				this.propertiesFound = properties;
      			this.results = properties.length;
			}
		},

		created () {
			this.propertiesFound = this.$route.params.properties;
			//this.propertiesFound = this.properties;
			this.results = this.propertiesFound.length;

			this.NUM_PAGES = this.propertiesFound.length/this.NUM_RESULTS;
			this.NUM_PAGES=this.NUM_PAGES.toString();
			this.NUM_PAGES= this.NUM_PAGES.split(".");
			this.NUM_PAGES=eval(this.NUM_PAGES[0]);	
			if(this.propertiesFound.length % this.NUM_RESULTS !=0){
				this.NUM_PAGES++;
			}						
			window.scrollTo(0, 0);
		},

		updated () {
			window.scrollTo(0, 0)
		}
	}
</script>