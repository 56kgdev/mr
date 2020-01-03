<template>
  <!-- START SEARCH -->
          <div class="property_search_form">
								<div class="property_filter_input">
									<div class="row">
                    
                    <span class="custom-dropdown big">
                      <div>
                        <select class=" form-control" id="search_location" name="search_location" data-placeholder="Ubicación" v-model="selected.city">
                          <option value="">Ubicación</option>
                          <option v-for="x in cities" :key="x.city" :value="x.city">
                            {{ x.city }}
                          </option>
                        </select>
                      </div>
                    </span>
                    
                    
                    <span class="custom-dropdown big">
                      <div>
                        <select class=" form-control" id="search_prop_type" name="search_prop_type" data-placeholder="Tipo de Propiedad" v-model="selected.type" >
                          <option value="">Tipo de propiedad</option>
                          <option v-for="x in types" :key="x.typepropertyid" :value="x.typepropertyid">{{x.typepropertyspa}}</option>
                        </select>
                      </div>
                    </span>

                    <!--<span class="search-span">
                      <div>
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Casa, Venta, Cancún" v-model="selected.keyword">                        
                      </div>
                    </span>  -->                 										
										<div class="col-md-3 col-sm-4 btn_search"  >
											<button  @click="search()" id="search" name="search" class="btn btn-default">Buscar</button>
										</div>
                    <div class="container" v-show="isSearching">
              			  <ip-loader></ip-loader>
		                </div>									
									</div>
								</div>
							</div>
    
        <!--<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single_search">
            <select v-model="selected.minPrice">
              <option value="">Precio mínimo</option>
              <option v-for="x in prices" :key="x" :value="x">
                $ {{ x | format }}
              </option>
            </select>					
          </div>
        </div>END COL -->
        <!--<div align="center">
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="single_search">
            <select v-model="selected.maxPrice">
              <option value="">Precio máximo</option>
              <option v-for="x in prices" :key="x" :value="x">
                $ {{ x | format }}
              </option>
            </select>					
          </div>
        </div>END COL 
        
        style="display:block;margin-left:auto; margin-right:auto;"
        -->
      <!--<div align="center" >
        <span  class="single_search">
            <select v-model="selected.currency">
              <option value="" >Moneda</option>
              <option value="USD">USD</option>
              <option value="MXN">MXN</option>
              <option value="EUR">EUR</option>
            </select>					
          </span> END COL -->
        
         <!--<span  class="single_search">
            <select v-model="selected.operation">
              <option value="sale">Venta</option>
              <option value="rent">Renta</option>
              <option value="rent">Renta Vacacional</option>
            </select>					
          </span>  END COL -->
          <!--</div>-->
    
  <!-- END  SEARCH -->
</template>

<script>
  import immoService from '@/services/immo'
  import IpLoader from '@/components/shared/Loader.vue'
  import numeral from 'numeral'

  export default {
    data () {
      return {
        cities: [],
        types: [],
        bedrooms: [],
        bathrooms: [],
        prices: [],
        currencies: [],
        selected: {
          city: '',
          type: '',
          bedrooms: '',
          bathrooms: '',
          minPrice: '',
          maxPrice: '',
          currency: '',
          operation: '',
          keyword:''
        },

        isSearching: false
      }
    },

    components: {
      IpLoader
    },

    filters: {
      format: function (value) {
        return numeral(value).format('0,0')
      }
    },

    methods: {
      search () {
        this.isSearching = true

        immoService.searchProp(this.selected)
         .then(res => {                
            this.$emit('select', res)
            this.isSearching = false
          });  

        /*immoService.searchProps(this.selected)
          .then(res => {
            this.$emit('select', res)
            this.isSearching = false
            //console.log(res);
          })*/
      }
    },

    created () {
      immoService.getSelectCity()
			.then(res=>{        
				this.cities=res
      });
      immoService.getSelectTypeProps()
			.then(res=>{
				this.types=res
			});

      immoService.getSearchData()
      .then(res => {        
        //this.types = res.types
        this.bedrooms = res.bedrooms.sort((a,b)=>a-b)
        this.bathrooms = res.bathrooms.sort((a,b)=>a-b)
        this.prices = res.prices
        this.currencies = res.currencies
        this.selected.currency = this.currencies[0]
      })
    }
  }
</script>
<style>
  .search-span{
    display: inline-block;
    vertical-align: middle;
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 5px;
    position: relative;
  }
  .search-span input{
    width: 100%;
    margin: auto;
  } 
  #search{
    background-color: #ed1c24;
    color: #fff;
  }
  @media only screen and (max-width: 1200px) {
    .btn_search #search{
      margin-top:15px;
      
    }
  }
  @media only screen and (max-width: 300px) {
    .custom-dropdown{
     width:100%;
      
    }
    .custom-dropdown select,.custom-dropdown input{
     width:100%;
      
    }
    .big{
      font-size: 13px;
    }
  }
</style>
