<template lang="html">
	<ip-search v-if="searchCompleted" :properties="propertiesFound"></ip-search>
	<main v-else>

		<!-- Slider Part Start -->
		<section id="slider-fixed">
			<div class="fix-banner">
				<div class="carousel-caption">
					<div class="container">
						<div class="slider-search-2">
							<h1>ENCUENTRA LA CASA DE TUS SUEÑOS</h1>
							<ip-search-form @select="setPropertiesFound"></ip-search-form>
							<!--<div class="advance-page">
								<a href="property_search.html" class="btn btn-primary">Advance Search</a>
							</div>
							<span>We have listed over 100000+ property in our database</span>-->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Slider Part End --> 

		<!-- START HOME 
		<section id="home" class="welcome-area">
			<div class="welcome-slider-area">
				<div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
					<ol class="carousel-indicators carousel-indicators-slider">
						<li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
						
						<li v-for="n in sliderProperties.length-1" data-target="#welcome-slide-carousel" :data-slide-to="n"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<ip-slide v-for="(p, itemObjKey) in sliderInfo" :key="p.propertyid" :property="p" :index="itemObjKey + 1"></ip-slide>
					</div>
					<a class="carousel-control-prev" href="#welcome-slide-carousel" role="button" data-slide="prev" style="position:absolute;margin-top:-25%; z-index:1000; left:2%; font-size:50px; float:left;">
						<i class="fa fa-angle-left" style="font-size:70px;"></i>
					</a>
					<a class="carousel-control-next" href="#welcome-slide-carousel" role="button" data-slide="next" style="position:absolute;margin-top:-25%;z-index:1000; right:2%; font-size:50px; float:right;">
						<i class="fa fa-angle-right" style="font-size:70px;"></i>
  					</a>
				</div>
			</div>
		</section>
		END  HOME DESIGN -->

		<!--<ip-search-form @select="setPropertiesFound"></ip-search-form>-->	

		<!-- START PROPERTY -->	
		<section class="template_property">
			<div class="container">
				<div class="row" >
					<div class="section-title text-center wow zoomIn">
						<h3 class="section_title_blue">Últimas <span>Propiedades</span></h3>
						<hr>
					</div>
				</div><!--- END ROW -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="gallery-section">
							<div class="auto-container">
								<!-- filter -->
								<!--<div class="filters">
									<ul class="filter-tabs filter-btns clearfix anim-3-all">
										<li class="active filter" data-role="button" data-filter="all">Todos</li>
										<li v-for="x in types" :key="x" class="filter" data-role="button" :data-filter="'.'+x">{{x}}</li>
										<li class="filter" data-role="button" data-filter=".office">Office</li>
										<li class="filter" data-role="button" data-filter=".appartment">Appartment</li>
										<li class="filter" data-role="button" data-filter=".realty">Realty</li>
									</ul>
								</div>-->
								<!-- end ffilter -->

								<!-- properties list  -->

										<!--<ip-development v-for="p in developments" :key="p.num_desarrollo" :development="p"></ip-development>-->
										<!--<ip-development v-for="p in developments" :key="p.num_desarrollo==214" :development="p" ></ip-development>-->
										<!--<ip-property v-for="p in sliderProperties" :key="p.propertyid" :property="p"></ip-property>-->
										<ip-property v-for="p in homeProperties" :key="p.propertyid" :property="p" :class="p.typepropertyspa">

											{{isLoading}}

										</ip-property>
										<!--<ip-property v-for="p in properties" :key="p.propertyid==16522" :property="p"></ip-property>
										<ip-property v-for="p in properties" :key="p.propertyid==16524" :property="p"></ip-property>
										<ip-property v-for="p in properties" :key="p.propertyid==16509" :property="p"></ip-property>
										<ip-property v-for="p in properties" :key="p.propertyid==16503" :property="p"></ip-property>-->

								<!--end properties list -->
							</div>
						</div>

					</div>
					
				</div>						
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  PROPERTY -->		

  </main>
</template>

<script>
import immoService from '@/services/immo'
import IpSlide from '@/components/Slide.vue'
import IpProperty from '@/components/Property.vue'
import IpDevelopment from '@/components/Development.vue'
import RlLoader from '@/components/shared/Loader.vue'
import IpSearch from '@/components/Search.vue'
import IpSearchForm from '@/components/SearchForm.vue'

export default {
  name: 'app',
  components: {
  	IpSlide,
	  IpProperty,
	  IpDevelopment,
  	RlLoader,
  	IpSearch,
	IpSearchForm
  },
  data () {
    return {
    	types: [],
    	selectedType: '0',
    	selectedOperation: '0',
    	selectedCity: '0',
		  sliderProperties: [],
		  homeProperties: [],
		  homePropertiesRent: [],
		recentProperties: [],
		lastProperty: [],
      	isLoading: false,
      	isSearching: false,
      	searchCompleted: false,
	  	propertiesFound: {},
		sliderInfo:[],
		developments: [],
		allProperties:[]
    }
  },
  methods: {
  	setPropertiesFound (properties) {
		this.propertiesFound = properties
		this.$router.push({ name: "search", params: { properties } });
	  },
	  goToProperty (id,name) {        
        this.$router.push({name: 'properties'  });
      }
  },
  created () {
		this.isLoading = true
		immoService.getSliderHome()
			.then(res => {
				this.sliderInfo = res
			})
		
		immoService.getPropsHome()
			.then(res => {			
				this.homeProperties = res
				//this.recentProperties = res
				this.text=res.property
					this.isLoading = false
					this.lastProperty = this.recentProperties[0]

					for(let x in res){
						this.types.push(res[x].typepropertyspa);						
					}
					
				});
		immoService.getPropsHomeRent()
			.then(res => {			
				this.homePropertiesRent = res
				//this.recentProperties = res
				this.text=res.property
					this.isLoading = false
					this.lastProperty = this.recentProperties[0]

					for(let x in res){
						this.types.push(res[x].typepropertyspa);						
					}
					
				})
				
		
			/*immoService.getAllDevs()
			.then(res => {
				this.developments = res
				this.isLoading = false
			})*/
			
			/*immoService.getPropsHome()
			.then(res => {
				this.allProperties = res
				this.isLoading = false
			})*/
	}

}
</script>
<style>
	.video_section{
		width: 60%;
		float: none;
		margin: auto;				
		text-align: center;					
	}	
	@media only screen and (max-width:992px) {
		.video_section{
			width: 95%;			
		}
	}	
	.more-properties{
		text-align: center;
		border-radius: 2px;
	}
	.more-properties button{
		padding: 10px;
		border:2px solid #cc2922;
		background-color: #cc2922;
		color:#fff;
		font-weight: 700;
		font-size: 20px;
	}
	.more-properties button:hover{
		background-color: #fff;
		color:#cc2922;
	}
</style>

