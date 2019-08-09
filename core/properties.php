<?php 
    include include './base/base.php';
    $data=getPropsAll();
?>
  <div>
		<!-- Banner Section Start -->
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner_area">
							<h3 class="page_title">Propiedades</h3>
							<div class="page_location">
								<a href="/">Inicio</a>
								<i class="fa fa-angle-right" aria-hidden="true"></i> 
								<span>Propiedades</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Section End -->

		<!-- Property List Start -->
		<section id="property_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<!-- Property List Start -->
						<div class="row">
                        <?php foreach($data as &$property){ ?>                                                    
                            <!-- Property List Start -->
                                <div align="center">
                                    <div class="property_list">

                                        <!--   Contenedor de imagen  -->
                                        <div class="img_area list_img">
                                            <div class="sale_btn">
                                                <span v-if="property.price >0">Venta</span>
                                                <span v-else-if="property.pricepermonth>0">Renta</span>
                                                <span v-else-if="property.holiday_price!=0">Renta Vacacional</span>
                                            </div>
                                            <a class="imageProp" href=""  @click="goToProperty(property.propertyid, property.nameproperty)"><img  src="<?php echo $property['smallphoto']?>" alt="<?php echo $property['alt']?>"></a>						
                                        </div>
                                        <!-- End container  -->
                                        
                                        <!-- Contenedor de Descripcion y caracteristicas generales  -->
                                        <div class="list_type">
                                            <div class="property-text">
                                                <a href=" " @click="goToProperty(property.propertyid, property.nameproperty)"><h5 class="property-title"><?php echo $property['nameproperty'] ?></h5></a>
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $property['neighbourhood'].' '.$property['city']?> </span>
                                                <p><?php echo $property['onlinewebspa'] ?></p>
                                                <div class="quantity" >
                                                    <ul>
                                                        <li  v-if="property.m2c !=0" ><span>Construcción</span><?php echo $property['m2c'] ?> m<sup>2</sup></li>
                                                        <!--<li><span>Rooms</span>9</li>-->
                                                        <li v-if="property.bedrooms !=0"><span>Dormitorios</span><?php echo $property['bedrooms'] ?></li>
                                                        <li v-if="property.bathrooms !=0"><span>Baños</span><?php echo $property['bathrooms'] ?></li>
                                                        <!--<li><span>Garage</span>1</li>-->
                                                    </ul>
                                                </div>
                                                
                                                <!--  Contenedor para  caracteristicas generales  -->
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
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End container  -->
                                    </div>
                                </div>						
                                    <!-- Property List End -->
                        <?php } ?>							
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
  </div>