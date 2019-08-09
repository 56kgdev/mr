<?php 
    include '../base/base.php';
    $data = getFooter();
?>
<!-- START NAVBAR -->
<div id="header">
	<!-- Nav Header Start -->
    <div id="nav_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navbar navbar-default nav_edit">
                        
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>				
                            
                            <a class="navbar-brand" href="/"> <img class="nav-logo" src="http://agent.immosystem.com.mx/<?php echo $data['logo'] ?>" alt="<?php echo $data['company'] ?>"> </a> 
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse my_nav" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right nav_text">
                                <li><router-link to="/">Inicio </router-link></li>
                                <li><router-link to="/nosotros">Nosotros</router-link></li>
                                <li><router-link to="/propiedades">Propiedades</router-link></li>
                                <li><router-link to="/contacto">Contacto</router-link></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse --> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Header End -->
</div>
  <!-- END NAVBAR -->