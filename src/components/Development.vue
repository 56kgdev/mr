<template>
  <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="single_property">
      <a href=""  v-on:click="goToProperty(development.num_desarrollo, development.name_desarrollo_spa)">
      
        <img :src="development.smallphoto" class="img-responsive" :alt="development.alt"/>
      </a>      
      <div class="single_property_description text-center">
        <span><i class="fa fa-object-group"></i>Total de unidades: {{ development.totalUnidades }}</span>
        <!--<span><i class="fa fa-bed"></i> {{ property.bedrooms }}</span>
        <span><i class="fa fa-bath"></i> {{ property.bathrooms }}</span>-->
      </div>
      <div class="single_property_content">
        <h4>
            <a href="" v-on:click="goToProperty(development.num_desarrollo, development.name_desarrollo_spa)">{{ development.name_desarrollo_spa }}</a>
            
        </h4>
        <p style="text-align:justify;">{{ development.description_web_esp | truncate }} </p>
        <p>Folio del desarrollo: <b>#{{development.num_desarrollo }}</b></p>
        <!--<p><span v-if="property.pricepermonth>0">Renta:<b> ${{ property.pricepermonth | format}} {{ property.currennamePerMonth}} </b></span></p>-->
       
      </div>
      <div class="single_property_price">
        <p>{{ development.neighbourhood }}, {{ development.city}} </p>
            <p>
                <span v-if="development.precio_minimo>0">
                    Precio desde: <b>${{ development.precio_minimo | format }} {{development.moneda}}</b>
                </span>
                <br>
                <!--<span v-if="development.price_max>0">
                    Precio máximo :<b> ${{ development.price_max | format}}  </b>
                </span>-->   
                <!-- {{ development.currenname_min }}  {{ development.currenname_max}} -->     
            </p>         
      </div>
    </div><!--- END SINGLE PROPERTY -->	
    <br>
  </div><!--- END COL -->
</template>
<script>
import numeral from 'numeral'
import immoService from '@/services/immo'
  export default {
    props: {
      development: { type: Object, required: true }
      
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
        //this.$emit('select', this.property.propertyid)
        
    	},

      goToProperty (id,name) {
        let namePropFilt=immoService.normalize(name);
        this.$router.push({name: 'development', params: {id,nameDevFilt}  })
        
      }
    }

  }
</script>
<style>
    img {
        width: 100%;
    }
</style>


