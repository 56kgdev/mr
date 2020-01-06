var idCompany='247';
const config = {
  companyId:idCompany,
  /*Url's para propiedades
    apiUrl: Informacion para homePage
    singleUrl: Informacion para descripcion de propiedad
    allPropUrl:  Informacion de todas las propiedades
  */
  apiUrl: 'https://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
  singleUrl: 'https://www.immosystem.com.mx/api/properties.php?property=',
  allPropUrl: 'https://www.immosystem.com.mx/api/properties.php?company='+idCompany,

  /*url's para desarrollos
    allDevsUrl: lista de todos los desarrollos (para tarjetas)
    devsInfoUrl: Informacion para descripcion de desarrollo
    inmobiliariabozati@gmail.com
  */
  allDevsUrl:'https://www.immosystem.com.mx/api/developments.php?company='+idCompany+'&developments=true',
  devsInfoUrl:'https://www.immosystem.com.mx/api/developments.php?folio=',
  propsListDevsAdd:'&p=true',

  
  /*  

    NUEVOS JSON 

  */
    //ciudades
    selectCities:'https://www.immosystem.com.mx/appImmov2/immoApp2.php?&d=0&m=cities&folio='+idCompany,

    //Tipos de Propiedades
    selectTypeProperties:'https://www.immosystem.com.mx/appImmov2/immoApp2.php?&d=0&m=typeProperties&folio='+idCompany,

    //Compañia Info
    infoCompany: 'https://www.immosystem.com.mx/api/footer.php?company='+idCompany,

    //Buscador
    //http://www.immosystem.com.mx/appImmov2/immoApp2.php?d=0&m=findProperty&folio=
    //searchProps:'http://www.immosystem.com.mx/appImmov2/immoApp2.php?d=0&m=searchP&folio='+idCompany,
    searchProps:'https://www.immosystem.com.mx/api/searchproperties.php?company='+idCompany,

    //Propiedades Info
      //todas las propiedades
        //allProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany,&operacion=venta
        allProps:'https://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&precio=mayor',
      // Descripcion de la propiedad
        detailProps: 'https://www.immosystem.com.mx/api/properties.php?property=',
      //Metadatos por propiedad
        metaDatProps:'https://www.immosystem.com.mx/api/metatags.php?folio=',

    //Desarrollos Info
      //todos los desarrollos
        allDevs:'https://www.immosystem.com.mx/api/developments.php?company='+idCompany+'&developments=true',
      //Descripcion del desarrollo
        detailDevs:'https://www.immosystem.com.mx/api/developments.php?folio=',

    //HomePage Info
      //Propiedades destacadas
        destProps:'https://www.immosystem.com.mx/api/destacadas.php?company='+idCompany,
      //Propiedades de slider
        sliderProps:'https://www.immosystem.com.mx/api/slider.php?company='+idCompany+'&home=true',
      //Propiedades aleatorias
        //randomProps:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
        randomProps:'https://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true&operacion=venta&precio=mayor',
        //Propiedades aleatorias en renta
        //randomPropsRent:'http://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true',
        randomPropsRent:'https://www.immosystem.com.mx/api/properties.php?company='+idCompany+'&home=true&operacion=renta&precio=mayor',

    //Search Properties
       // searchProperties:'http://www.immosystem.com.mx/api/searchproperties.php?company='+idCompany,

      //Geolocation
        geolocation: "https://maps.googleapis.com/maps/api/geocode/json?latlng="
}

export default config