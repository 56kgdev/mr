<template>
	<main>
		<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Propiedades</h3>
							<div class="page_location">
								<router-link to="/">Inicio</router-link>
								<i class="fa fa-angle-right" aria-hidden="true"></i> 
								<span>Propiedades</span>
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
		<!-- Property List Start -->
		<section id="property_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<!-- Property List Start -->
						<div class="row">
							<list-props v-for="(p,index) in properties" :key="p.propertyid" :property="p" :index="index" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index"></list-props>
						</div>
						<!-- End Property list -->
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
											<li v-show="pag * NUM_RESULTS / properties.length < 1" id="next">
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
					</div>
				</div>
			</div>
		</section>
		<!-- Property List End -->				
  </main>
</template>

<script>
import immoService from '@/services/immo'
import IpProperty from '@/components/Property.vue'
import RlLoader from '@/components/shared/Loader.vue'
import ListProps from '@/components/PropertyList.vue'
import IpSearchForm from '@/components/SearchForm.vue'

export default {
  name: 'app',
  components: {
  	IpProperty,
		RlLoader,
		ListProps,
		IpSearchForm
  },
  data () {
    return {
      pag:1,
		NUM_RESULTS:9,			
    	properties: [],
		isLoading: false,
		NUM_PAGES:0,
		propertiesFound: []
    }
  },
  methods: {
		setPropertiesFound (properties) {
		this.propertiesFound = properties
		this.$router.push({ name: "search", params: { properties } });
	  },
	},
  created () {
	window.scrollTo(0,0);
  	this.isLoading = true

  	immoService.getAllProps()
  		.then(res => {
  			this.properties = res
  			this.isLoading = false
		  })
		  .then(()=>{
				this.NUM_PAGES = this.properties.length/this.NUM_RESULTS;
				this.NUM_PAGES=this.NUM_PAGES.toString();
				this.NUM_PAGES= this.NUM_PAGES.split(".");
				this.NUM_PAGES=eval(this.NUM_PAGES[0]);
				if(this.properties.length % this.NUM_RESULTS !=0){
					this.NUM_PAGES++;
				}			
			})		
  }
}
	
</script>