var idCompany='247';
const config = {
  companyId:idCompany,
  /*Url's para propiedades
    apiUrl: Informacion para homePage
    singleUrl: Informacion para descripcion de propiedad
    allPropUrl:  Informacion de todas las propiedades
  */
  apiUrl: 'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
  singleUrl: 'http://www.immosystem.com.mx/api/properties.php?property=',
  allPropUrl: 'http://www.immosystem.com.mx/api/properties.php?company='+idCompany,

  /*url's para desarrollos
    allDevsUrl: lista de todos los desarrollos (para tarjetas)
    devsInfoUrl: Informacion para descripcion de desarrollo
    inmobiliariabozati@gmail.com
  */
  allDevsUrl:'http://www.immosystem.com.mx/api/developments.php?company='+idCompany+'&developments=true',
  devsInfoUrl:'http://www.immosystem.com.mx/api/developments.php?folio=',
  propsListDevsAdd:'&p=true',

  
  /*  

    NUEVOS JSON 

  */
    //ciudades
    selectCities:'http://www.immosystem.com.mx/appImmov2/immoApp2.php?&d=0&m=cities&folio='+idCompany,

    //Tipos de Propiedades
    selectTypeProperties:'http://www.immosystem.com.mx/appImmov2/immoApp2.php?&d=0&m=typeProperties&folio='+idCompany,

    //Compañia Info
    infoCompany: 'http://www.immosystem.com.mx/api/footer.php?company='+idCompany,

    //Buscador
    //http://www.immosystem.com.mx/appImmov2/immoApp2.php?d=0&m=findProperty&folio=
    //searchProps:'http://www.immosystem.com.mx/appImmov2/immoApp2.php?d=0&m=searchP&folio='+idCompany,
    searchProps:'http://www.immosystem.com.mx/api/searchproperties.php?company='+idCompany,

    //Propiedades Info
      //todas las propiedades
        //allProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany,&operacion=venta
        allProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&precio=mayor',
      // Descripcion de la propiedad
        detailProps: 'http://www.immosystem.com.mx/api/properties.php?property=',
      //Metadatos por propiedad
        metaDatProps:'http://www.immosystem.com.mx/api/metatags.php?folio=',

    //Desarrollos Info
      //todos los desarrollos
        allDevs:'http://www.immosystem.com.mx/api/developments.php?company='+idCompany+'&developments=true',
      //Descripcion del desarrollo
        detailDevs:'http://www.immosystem.com.mx/api/developments.php?folio=',

    //HomePage Info
      //Propiedades destacadas
        destProps:'http://www.immosystem.com.mx/api/destacadas.php?company='+idCompany,
      //Propiedades de slider
        sliderProps:'http://www.immosystem.com.mx/api/slider.php?company='+idCompany+'&home=true',
      //Propiedades aleatorias
        //randomProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
        randomProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true&operacion=venta&precio=mayor',
        //Propiedades aleatorias en renta
        //randomPropsRent:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
        randomPropsRent:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true&operacion=renta&precio=mayor',

    //Search Properties
       // searchProperties:'http://www.immosystem.com.mx/api/searchproperties.php?company='+idCompany,

      //Geolocation
        geolocation: "http://maps.googleapis.com/maps/api/geocode/json?latlng="
}

export default config