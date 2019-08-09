const config = {
  /*Url's para propiedades
    apiUrl: Informacion para homePage
    singleUrl: Informacion para descripcion de propiedad
    allPropUrl:  Informacion de todas las propiedades
  */
  apiUrl: 'http://www.immosystem.com.mx/api/properties.php?company=141&home=true',
  singleUrl: 'http://www.immosystem.com.mx/api/properties.php?property=',
  allPropUrl: 'http://www.immosystem.com.mx/api/properties.php?company=141',

  /*url's para desarrollos
    allDevsUrl: lista de todos los desarrollos (para tarjetas)
    devsInfoUrl: Informacion para descripcion de desarrollo
  */
  allDevsUrl:'http://www.immosystem.com.mx/api/developments.php?company=141&developments=true',
  devsInfoUrl:'http://www.immosystem.com.mx/api/developments.php?folio=',
  propsListDevsAdd:'&p=true',

  
  /*  

    NUEVOS JSON 

  */
    //ciudades
    selectCities:'http://www.immosystem.com.mx/api/inputs.php?company=141',

    //Compañia Info

    infoCompany: 'http://www.immosystem.com.mx/api/footer.php?company=154',

    //Propiedades Info
      //todas las propiedades
        allProps:'http://www.immosystem.com.mx/api/properties.php?company=141',
      // Descripcion de la propiedad
        detailProps: 'http://www.immosystem.com.mx/api/properties.php?property=',
      //Metadatos por propiedad
        metaDatProps:'http://www.immosystem.com.mx/api/metatags.php?folio=',

    //Desarrollos Info
      //todos los desarrollos
        allDevs:'http://www.immosystem.com.mx/api/developments.php?company=141&developments=true',
      //Descripcion del desarrollo
        detailDevs:'http://www.immosystem.com.mx/api/developments.php?folio=',

    //HomePage Info
      //Propiedades destacadas
        destProps:'http://www.immosystem.com.mx/api/destacadas.php?company=141',
      //Propiedades de slider
        sliderProps:'http://www.immosystem.com.mx/api/slider.php?company=141&home=true',
      //Propiedades aleatorias
        randomProps:'http://www.immosystem.com.mx/api/properties.php?company=141&home=true'
}

export default config