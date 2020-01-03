<!DOCTYPE html>
<html lang="es">
<head>
  <script>  
    function createCookie(clave, valor, diasexpiracion) {        
      var d = new Date();
      d.setTime(d.getTime() + (diasexpiracion*24*60*60*1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = clave + "=" + valor + "; " + expires;
    }

    function verifyCookie(clave) {        
      var name = clave + "=";
      var cookie = document.cookie.split(';');
      for(var i=0; i<cookie.length; i++) {
          var c = cookie[i];
          while (c.charAt(0)==' ') c = c.substring(1);
          if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
      }
      return "";
    }

    function checkCookie(clave) {        
      var cookie = verifyCookie(clave);
      if (cookie!="") {
        $.ajax({
          url: "http://www.immosystem.com.mx/api/countvisits.php?companyid=247&concurrent=1",
          method: "GET",
          async: false,         
          dataType: "json",
          success: function(respuesta) {
            console.log("success");
          },
          error:function(){
            console.log("error");s
          }         
        });
      }else{
          createCookie(clave,1,365);
            $.ajax({
            url: "http://www.immosystem.com.mx/api/countvisits.php?companyid=247&unic=1",
            method: "GET",
            async: false,         
            dataType: "json",
            success: function(respuesta) {
              console.log("success")
            },
            error:function() {
              console.log("error");
            }                                
          });
      }
    }
  </script>
<?php 
  //error_reporting(E_ALL);
  //ini_set('display_errors', '1');
  include ("./core/base/base.php");
  $enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $porciones = explode("/", $enlace_actual );
  
  $porcion = explode("-", $porciones [1]);
  
  if($porcion[0] == '/propiedad' || $porcion[0] == '/Propiedad'){
    $field= 'propiedad='.$porcion[1];
    $data=getMetaData($field);
    
    $unique=TRUE;
  }elseif($porcion[0] == 'desarrollo' || $porcion[0] == '/Desarrollo') {
    $field= 'desarrollo='.$porcion[1];
    $data=getMetaData($field);
    $unique=TRUE;
  }else{
    $field= 'company=247';
    $data=getMetaData($field);
    $unique=FALSE;
  }
  //include 'http://www.immosystem.com.mx/api/metatags.php?'.$field;
?>
    <meta property="og:site_name"       content="<?php 
    if($data['website']){
      echo $data['website'];
    }
    else{
      echo $data['company'];
    } ?>"/>
    <meta property="og:title"           content="<?php echo $data['title']?>" />
    <meta property="og:image"           content="<?php echo $data['image']?>" />
    <meta property="og:image:alt"       content="<?php echo $data['alt']?>" />
    <meta property="og:description"     content="<?php echo $data['description']?>" />
    <meta itemprop="name"               content="<?php echo $data['title']?>" />
    <meta itemprop="description"        content="<?php echo $data['description']?>" />
    <meta property="og:locale"          content="es_LA"/>
    <meta property="og:type"            content="website">
    <meta name="twitter:site"           content="<?php echo $data['tw']?>"/>
    <meta name="twitter:creator"        content="<?php echo $data['tw']?>"/>
    <meta name="twitter:title"          content="<?php echo $data['title']?>" />
    <meta name="twitter:description"    content="<?php echo $data['description']?>" />
    <meta name="twitter:image"          content="<?php echo $data['image']?>" />
    <meta name="description"            content="<?php echo $data['description']?>" />
    <meta name="twitter:card"           content="summary">
    <meta name="author"                 content="Immo System" />
    <title><?php echo $data['title']?></title>
    <meta property="og:url"         content="<?php echo $enlace_actual; ?>" >
    <link rel="canonical" href="<?php echo $enlace_actual; ?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="./favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Template tags -->
    <link rel="stylesheet" href="./src/assets/css/bootstrap.css">
		<link rel="stylesheet" href="./src/assets/css/style.css">
		<link rel="stylesheet" href="./src/assets/css/font-awesome.css">
		<link rel="stylesheet" href="./src/assets/fonts/flaticon.css">
		<link rel="stylesheet" href="./src/assets/css/color.css" id="color-change">
		<link rel="stylesheet" href="./src/assets/css/jslider.css">
		<link rel="stylesheet" href="./src/assets/css/responsive.css">
    <link rel="stylesheet" href="./src/assets/css/loader.css">
    <!-- Template tags -->
  </head>
  <body data-spy="scroll" data-offset="80" onload="checkCookie('count')" onunload="beforeExit()">
  
    <div itemtype="app" id="app">
      <h1 itemprop="title"><?php echo $data['title']?></h1>
      <div itemprop="header" id="header"><?php include './core/layouts/header.php'?></div>
      
      <div itemprop="content" id="content" hidden><?php
      switch($porcion[0]){
        case 'nosotros':
          include './core/about.php';
        break;
        case 'propiedades':
           include './core/properties.php';
        break;
        case'desarrollos':
          include './core/developments.php';
        break;
        case'contacto':
          include './core/contact.php';
        break;
        case'propiedad':
          include './core/property-detail.php';
        //propertyDetail($porcion[1]);
        break;

        default:
        include './core/home.php';
        break;
      }               
      ?></div>
      <div itemprop="footer" id="footer"><?php include './core/layouts/footer.php'?></div>
    </div>
    <!-- Scroll to top -->
		<div class="scroll-to-top">
			<a href="#" class="scroll-btn" data-target=".pagewrap"><b> <i class="fa fa-angle-up" aria-hidden="true"></i> </b></a>
		</div>
    <!-- End Scroll To top -->
        
      <!--Script para antes de salir del navegador-->
    <script language="JavaScript" type="text/javascript">      

      //window.onbeforeunload = beforeExit;

      function beforeExit() {        
        $.ajax({
          url: "http://www.immosystem.com.mx/api/countvisits.php?companyid=247&live=0",
          method: "GET",
          async: false,         
          dataType: "json",
          success: function(respuesta) {
            console.log("success")
          },     
          error:function(){
            console.log("error en envio de datos a Immo");
          }                           
        });
        return 1;
      }
    </script>
    <!--Termina script-->
    <script src="./dist/build.js"></script>
    <script src="./src/assets/js/scrolltopcontrol.js"></script>
    <!--<script src="./src/assets/js/wow.min.js"></script>-->
    <script src="./src/assets/js/scripts.js"></script>
   <!-- <script src="./src/assets/js/jquery.min.js"></script>
    <script src="./src/assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>-->
    <script src="./src/assets/js/jquery.min.js"></script>
		<script src="./src/assets/js/bootstrap.min.js"></script>
		<script src="./src/assets/js/bootstrap-select.js"></script>
		<script src="./src/assets/js/YouTubePopUp.jquery.js"></script>
		<script src="./src/assets/js/jquery.fancybox.pack.js"></script>
		<script src="./src/assets/js/jquery.fancybox-media.js"></script>
		<script src="./src/assets/js/owl.js"></script>
		<script src="./src/assets/js/mixitup.js"></script>
		<script src="./src/assets/js/wow.js"></script>
		<script src="./src/assets/js/jshashtable-2.1_src.js"></script>
		<script src="./src/assets/js/jquery.numberformatter-1.2.3.js"></script>
		<script src="./src/assets/js/tmpl.js"></script>
		<script src="./src/assets/js/jquery.dependClass-0.1.js"></script> 
		<script src="./src/assets/js/draggable-0.1.js"></script> 
		<script src="./src/assets/js/jquery.slider.js"></script> 
    <script src="./src/assets/js/custom.js"></script>
    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-106986305-1', 'auto');
		  ga('send', 'pageview');
		</script>
  </body>
</html>
