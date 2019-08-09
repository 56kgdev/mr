<template>
<!-- Property List Start -->
	<div align="center">
		<div class="property_list">

			<!--   Contenedor de imagen  -->
			<div class="img_area2 list_img">
				<div class="sale_btn">
					<span v-if="property.price >0">Venta</span>
					<span v-else-if="property.pricepermonth>0">Renta</span>
					<span v-else-if="property.holiday_price!=0">Renta Vacacional</span>
				</div>
				<a class="imageProp"  @click="goToProperty(property.propertyid, property.nameproperty)"><img  :src="property.smallphoto" alt=""></a>						
			</div>
			<!-- End container  -->
			
			<!-- Contenedor de Descripcion y caracteristicas generales  -->
			<div class="list_type">
				<div class="property-text">
					<a @click="goToProperty(property.propertyid, property.nameproperty)"><h5 class="property-title">{{ property.nameproperty }}</h5></a>
					<span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ property.neighbourhood }}, {{ property.city}}</span>
					<p>{{ property.onlinewebspa | truncate}}</p>
					<div class="quantity" >
						<ul>
							<li  v-if="property.m2c !=0" ><span>Construcción</span>{{ property.m2c | format }} m<sup>2</sup></li>
							<!--<li><span>Rooms</span>9</li>-->
							<li v-if="property.bedrooms !=0"><span>Dormitorios</span>{{ property.bedrooms }}</li>
							<li v-if="property.bathrooms !=0"><span>Baños</span>{{ property.bathrooms }}</li>
							<!--<li><span>Garage</span>1</li>-->
						</ul>
					</div>
					
					<!--  Contenedor para  caracteristicas generales  -->
					<div class="bed_area">
						<ul>
							<li v-if="property.price >0">${{ property.price | format }} {{ property.currenname }}
								
								<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
							</li>
							<li v-else-if="property.pricepermonth>0"> Renta: ${{ property.pricepermonth | format}} {{ property.currennamePerMonth}}
								
								<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
							</li>
							<li v-else-if="property.holiday_price!=0">Renta Vacacional: ${{ property.holiday_price | format}} {{ property.vacation_rental_currency}}
								
								<b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End container  -->

		</div>
	</div>						
		<!-- Property List End -->


    <!--<div class="item col-md-4">Set width to 4 columns for grid view mode only 
		<div class="image">
			<a href=" "  @click="goToProperty(property.propertyid, property.nameproperty)">
				<span class="btn btn-default"><i class="fa fa-file-o"></i> Details</span>
			</a>
			<img :src="property.smallphoto" alt="" />
		</div>
		<div class="price">
		    <i class="fa fa-home"></i>For Sale
				<span>${{ property.price | format }} {{ property.currenname }}</span>
        </div>
	    <div class="info">
		    <h3>
		        <a href=" " @click="goToProperty(property.propertyid, property.nameproperty)">{{ property.nameproperty }}</a>
			    <small>{{ property.neighbourhood }}, {{ property.city}}</small>
			</h3>
			<p>{{ property.onlinewebspa | truncate}}</p>						
			<ul class="amenities">
			    <li><i class="icon-area"></i> {{ property.m2c | format }} m<sup>2</sup></li>
				<li><i class="icon-bedrooms"></i> {{ property.bedrooms }}</li>
				<li><i class="icon-bathrooms"></i> {{ property.bathrooms }}</li>
			</ul>
		</div>
	</div>-->
	<!--<div class="col-md-4 col-xs-12">
    <div class="content" >
      <div class="container">
        <div class="row">
          <div class="main col-sm-12">		
						<div class="grid-style1 clearfix">
							<div class="item col-md-4" data-animation-direction="from-bottom" data-animation-delay="200">
								<div class="image">
									<a href="">
										<h3>{{ property.nameproperty }}</h3>
										<span class="location">{{ property.neighbourhood }}, {{ property.city}}</span>
									</a>
									<img :src="property.smallphoto" class="img-responsive" alt=""/>
								</div>
								<div class="price">
									<i class="fa fa-home"></i>For sale
									<span style="color:#fff;">${{ property.price | format }} {{ property.currenname }}</span>
								</div>
								<ul class="amenities">
									<li><i class="fa fa-object-group"></i> {{ property.m2c | format }} m<sup>2</sup></li>
									<li><i class="fa fa-bed"></i> {{ property.bedrooms }}</li>
									<li><i class="fa fa-bath"></i> {{ property.bathrooms }}</li>
								</ul>
							</div>																																																	
						</div>
					</div>
        </div>
      </div>
    </div>
    <br>
  </div>--><!--- END COL -->
</template>

<script>
  import numeral from 'numeral'
import immoService from '@/services/immo'
  export default {
    props: {
      property: { type: Object, required: true }
      
    },

    filters: {
      truncate: function (str) {
        return str.substring(0, 115) + '...'
      },
      format: function (value) {
        return numeral(value).format('0,0')
      }
    },

    methods: {
    	selectProperty () {
        this.$emit('select', this.property.propertyid)
        
    	},

      goToProperty (id,name) {
				let namePropFilt=immoService.normalize(name);
        this.$router.push({ name: 'property', params: {id,namePropFilt}  })
        
      }
    }

  }
</script>

<style scoped>
  img {
    width: 100%;
	}
	.imageProp img{
		width:100%; 
		height: 280px;
	}

	@media(max-width:991px){
	.property_list{
		display:block;
		width:50%;
	}
	.list_img, .list_type{
		width:100%;
		height: auto;
	}
	.bed_area{
		position: relative;
		width: 100%;
	}
	
}
@media(max-width:580px){
	.property_list{
		display:block;
		width:80%;
	}
	.list_img, .list_type{
		width:100%;
		height: auto;
	}
}
@media(max-width:450px){
	.property_list{
		display:block;
		width:100%;
	}
	.list_img, .list_type{
		width:100%;
		height: auto;
	}

}
#leyendaPrecios{
    font-size: 8px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
  }
</style>