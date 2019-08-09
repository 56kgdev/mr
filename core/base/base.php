<?php
    const idComp='company=141';
    //Funcion que decodifica los json
        function getJsons($urlJson){
            $json = file_get_contents($urlJson);
            $array = json_decode($json,true);
            
            return $array;
        }

    //////////////////////////////////
  
    /**** Recuperacion de datos json y envio ****/

    function getMetaData($dataUrl){
        $url ='http://www.immosystem.com.mx/api/metatags.php?'.$dataUrl;
        print_r($url);
        $res = getJsons($url);              
        return $res['metatags'];
    }

    function getFooter(){
        $url='http://www.immosystem.com.mx/api/footer.php?'.idComp;
        $res=getJsons($url);
        return $res['footer'][0];
    }

    function getPropsHome(){
        $url='http://www.immosystem.com.mx/api/properties.php?'.idComp.'&home=true&limit=6';
        $res=getJsons($url);
        return $res['propiedades'];
    }

    function getPropsAll(){
        $url='http://www.immosystem.com.mx/api/properties.php?'.idComp;
        $res=getJsons($url);
        return $res['propiedades'];
    }

    function getDevsAll(){
        $url='http://www.immosystem.com.mx/api/developments.php?'.idComp;
        $res=getJsons($url);
        return $res['developments'];
    }

    function getDataProperty($idProp){
        $url='http://www.immosystem.com.mx/api/properties.php?property='.$idProp;
        $res=getJsons($url);
        /*if($res['property']['company']==143){
            return $res['property'];
        }else{
            return "error 404";
        }*/
        return $res['property'];
    }
    
?>