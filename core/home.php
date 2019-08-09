<?php 
    include include './base/base.php';
    $data=getPropsHome(); 
?>
<div>
    <!-- Slider Part Start -->
    <section id="slider-fixed">
        <div class="fix-banner">
            <div class="carousel-caption">
                <div class="container">
                    <div class="slider-search-2">
                        <h1>Encuentra la casa de tus sueños</h1>
                        <div class="property_search_form">
                            <div class="property_filter_input">
                                <div class="row">
                        
                                    <span class="custom-dropdown big">
                                        <div>
                                            <select class=" form-control" id="search_location" name="search_location" data-placeholder="Ubicación" v-model="selected.city">
                                                <option value="">Ubicación</option>
                                                <option v-for="x in cities" :key="x" :value="x">
                                                    {{ x }}
                                                </option>
                                            </select>
                                        </div>
                                    </span>
                                                                                    
                                    <span class="custom-dropdown big">
                                        <div>
                                            <select class=" form-control" id="search_prop_type" name="search_prop_type" data-placeholder="Tipo de Propiedad" v-model="selected.type" >
                                                <option value="">Tipo de propiedad</option>
                                                <option v-for="x in types" :key="x" :value="x">{{x}}</option>
                                            </select>
                                        </div>
                                    </span>
                                                                                        
                                    <div class="col-md-3 col-sm-4 btn_search"  >
                                        <button  @click="search()" id="search" name="search" class="btn btn-default">Buscar</button>
                                    </div>                                    									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Part End --> 

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
                            <!-- properties list  -->                                
                            <?php foreach($data as &$property){ ?>
                                <div id="contain_tarjet_property" class="column mix mix_all col-md-4 col-sm-6 col-xs-12" >
                                    <div class="property_grid">
                                        <div class="img_area">
                                            <div class="sale_btn">
                                                <span >Venta</span>
                                                <span >Renta</span>
                                                <span >Renta vacacional</span>
                                            </div>                                        
                                            <a href="" @click="goToProperty(property.propertyid, property.nameproperty)"><img src="<?php echo $property['smallphoto']?>" alt="<?php echo $property['alt']?>"></a>                                    
                                        </div>
                                        <div class="property-text">
                                            <a href="" @click="goToProperty(property.propertyid, property.nameproperty)"><h6 class="property-title"><?php echo $property['nameproperty'] ?></h6></a>
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $property['neighbourhood'].' '.$property['city']?></span>
                                            <div class="quantity">
                                                <ul>
                                                    <li  v-if="property.m2c >0 " ><span>Construcción</span><?php echo $property['m2c']?> m<sup>2</sup></li>
                                                    <!--<li><span>Rooms</span>9</li>-->
                                                    <li v-if="property.bedrooms >0"><span>Dormitorios</span><?php echo $property['bedrooms']?></li>
                                                    <li v-if="property.bathrooms >0"><span>Baños</span><?php echo $property['bathrooms']?></li>
                                                    <!--<li><span>Garage</span>1</li>-->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bed_area">
                                            <ul>   
                                                <li v-if="property.price >0">
                                                    $<?php echo $property['price'].' '. $property['currenname']?>
                                                    <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
                                                </li>
                                                <li v-else-if="property.pricepermonth>0"> 
                                                    Renta: $<?php echo $property['pricepermonth'].' '. $property['currennamePerMonth']?>
                                                    <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
                                                </li>
                                                <li v-else-if="property.holiday_price!=0">
                                                    Renta Vacacional: $<?php echo $property['holiday_price'].' '. $property['vacation_rental_currency']?>
                                                    <b id="leyendaPrecios">*PRECIOS SUJETOS A CAMBIOS SIN PREVIO AVISO</b>
                                                </li>
                                                <!--<li class="flat-icon"><a href="#"><i class="flaticon-like"></i></a></li>
                                                <li class="flat-icon"><a href="#"><i class="flaticon-connections"></i></a></li>-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!--end properties list -->
                        </div>
                    </div>
                </div>            
            </div>
        </div><!--- END CONTAINER -->
    </section>
    <!-- END  PROPERTY -->		

</div>