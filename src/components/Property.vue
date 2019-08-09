<template>
	<!--<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="single_property">
      <a href="" v-on:click="goToProperty(property.propertyid, property.nameproperty)">
        <img :src="property.smallphoto" class="img-responsive" alt=""/>
      </a>      
      <div class="single_property_description text-center">
        <span><i class="fa fa-object-group"></i> {{ property.m2c | format }} m2</span>
        <span><i class="fa fa-bed"></i> {{ property.bedrooms }}</span>
        <span><i class="fa fa-bath"></i> {{ property.bathrooms }}</span>
      </div>
      <div class="single_property_content">
        <h4><a href="" v-on:click="goToProperty(property.propertyid, property.nameproperty)">{{ property.nameproperty }}</a></h4>
        <p style="text-align:justify;">{{ property.onlinewebspa | truncate }} </p>
        <p>Folio <b>#{{ property.propertyid }}</b></p>
        <p><span v-if="property.pricepermonth>0">Renta:<b> ${{ property.pricepermonth | format}} {{ property.currennamePerMonth}} </b></span></p>
      </div>
      
      <div class="single_property_price">
        <p>{{ property.neighbourhood }}, {{ property.city}} </p>
        <p >
          <span v-if="property.price >0">
            ${{ property.price | format }} {{ property.currenname }}
          </span>
          <span v-else-if="property.pricepermonth>0">
            Renta:<b> ${{ property.pricepermonth | format}} {{ property.currennamePerMonth}} </b>
          </span>        
        </p>          
      </div>
    </div>END SINGLE PROPERTY
    <br>
  </div>END COL -->
  <div id="contain_tarjet_property" class="column mix mix_all col-md-4 col-sm-6 col-xs-12" style="height:433px;">
		<div class="property_grid" style="height:400px;">
			<div class="img_area">
				<div class="sale_btn">
          <span v-if="property.price >0">Venta</span>
          <span v-else-if="property.pricepermonth > 0">Renta</span>
          <span v-else-if="property.holiday_price > 0">Renta vacacional</span>
        </div>
				<!--<div class="featured_btn">Featured</div>-->
				<a @click="goToProperty(property.propertyid, property.nameproperty)"><img style="width:100%; height: 200px;"  :src="property.smallphoto" alt=""></a>
			<!--	<div class="sale_amount">12 Hours Ago</div>-->

			</div>
			<div class="property-text">
				<a @click="goToProperty(property.propertyid, property.nameproperty)"><h6 class="property-title">{{ property.nameproperty }}</h6></a>
				<span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ property.neighbourhood }}, {{ property.city}}</span>
				<div class="quantity">
					<ul>
				  	<li  v-if="property.m2c >0 " ><span>Construcción</span>{{ property.m2c | format }} m<sup>2</sup></li>
		    		<!--<li><span>Rooms</span>9</li>-->
						<li v-if="property.bedrooms >0"><span>Dormitorios</span>{{ property.bedrooms }}</li>
						<li v-if="property.bathrooms >0"><span>Baños</span>{{ property.bathrooms }}</li>
						<!--<li><span>Garage</span>1</li>-->
					</ul>
				</div>
			</div>
			<div class="bed_area">
				<ul>   
					<li v-if="property.price >0">
            ${{ property.price | format }} {{ property.currenname }}            
            <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
          </li>
          <li v-else-if="property.pricepermonth>0">
            Renta: ${{ property.pricepermonth | format}} {{ property.currennamePerMonth}}            
            <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
          </li>
          <li v-else-if="property.holiday_price!=0">
            Renta Vacacional: ${{ property.holiday_price | format}} {{ property.vacation_rental_currency}}            
            <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
          </li>          
					<!--<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
					<li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>-->
				</ul>
          
			</div>
      
		</div>
	</div>
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
        return str.substring(0, 125) + '...'
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
        this.$router.push({name: 'property', params: {id,namePropFilt}  })
        
      }
    }

  }
</script>

<style scoped>
  img {
    width: 100%;
  }
  @media (max-width: 767px) {
    #contain_tarjet_property{
      width:65%;
    }
  }
   @media (max-width: 520px) {
    #contain_tarjet_property{
      width:100%;
    }
  }
  #leyendaPrecios{
    font-size: 9px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    
  }
</style>