O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:82:"C:\Users\alopa\OneDrive\Escritorio\xampp2\htdocs\Symfony\TFG\assets\styles\app.css";s:10:"publicPath";s:55:"/assets/styles/app-c6a4c7cc5c012f8e571248db2fe8af18.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:4109:"@font-face {
    font-family: fuente1;
    src: url("../Fuentes/AlteHaasGroteskRegular-0b631a811e41c664679da924c6bfe676.ttf");
  }


*{
    margin: 0px;
    padding: 0px;
    text-decoration:none;
    box-sizing: border-box;
    font-family: fuente1;
}


header{
    width: 100%;
    height: 60px;
    background-color: rgb(209, 33, 33);
    display: flex;
    position: sticky;
    top:0px;
    align-items:center;
    justify-content:center;
}
header .menu li{
    color: white;
}
.menu li{
    display: inline;
    width: 30%;
    padding: 5px;
    margin: auto;
    border: 0px;
    padding-left: 15px;
    padding-right: 15px;
    font-size: 22px;
}

.grid-clase{
    
    display:grid;
    grid-template-areas:"V1 N N V2"
                        "H H I I"
                        "C C I I"
                        "E E I I"
                        "P P I I"
                        "S S I I"
                        "R R I I";


    grid-template-columns:0.2fr 0.3fr 0.3fr 0.2fr;
    grid-template-rows: 0.1fr repeat(6,0.2fr);
    
}

.grid-clase .N{
    margin-top: 20px;
    margin-bottom: 20px;
}

.grid-rasgos{
    
    display:grid;
    grid-template-areas:"N N V1 L"
                        "D D D D";
                       
    grid-template-columns:0.2fr 0.3fr 0.3fr 0.2fr;
    grid-template-rows: 25px auto;
    padding:20px;
}

.Progreso{
    padding:20px;
    width:100%;
}

.Progreso td{
    text-align: center;
    padding-top: 2.5px;
    padding-bottom: 2.5px;
}





/*  grid-area:ME; */
.N{
    grid-area:N;

}

.D{
    grid-area:D;
}

.I{
    grid-area:I;
}

.I img{
    width:100%;
    height:100%;
    border-radius: 100%;
}
.R{
    grid-area:R;
}

.P{
    grid-area:P;
}

.E{
    grid-area:E;
}

.V1{
    grid-area:V1;
}

.V2{
    grid-area:V2;
}

.C{
    grid-area:C;
}

.S{
    grid-area:S;
}

.L{
    grid-area:L;
}

h1{
    text-align:center;
}


.listado{
    margin-left:150px;
    margin-right:150px;
    margin-top:50px;
    margin-bottom:50px;
    
}

.elemento img{
    width:55px;
    height:55px;
    border-radius: 100%;
    padding:2.5px;
    box-shadow: 0px 0px 10px black;
}

.elemento{
    display:grid;
    grid-template-areas:"I I N N E S S S"
                        "I I A A E C C C";
                       
    grid-template-columns:0.025fr 0.025fr 0.1fr 0.1fr 0.1fr 0.25fr 0.2fr 0.2fr;
    grid-template-rows: auto;
    padding:20px;
    border-radius:5px;
    border-bottom: 1px solid gray;
    background-color:white;
}

.A{
    grid-area:A;
}

body{
    background-color:rgb(187, 210, 218);
}

.elemento:hover{
    background-color: lightgray;
}

a:link {
    color: black;
  }
  
  a:visited {
    color: black;
  }
  
  a:hover {
    color: black;
  }
  
  a:active {
    color: black;
  }

  .titulo{
    margin-top: 10px;
    text-align:left;
    padding:10px;

  }

  .row{
    display:grid;
    grid-template-areas:"C E A";
                       
    grid-template-columns:0.45fr 0.1fr 0.45fr;
    grid-template-rows: auto;
    padding:10px;
    
  }

  .formulario{
    display:flex;
    
    width:100%;
  }

  .formulario2{
    border-radius:5px;
    background-color:white;
    margin-left:150px;
    margin-right:150px;
    margin-top:50px;
    margin-bottom:50px;
    width:40%;
    box-shadow: 0px 0px 10px gray;
  }

  .center-h {
    justify-content: center;
  }
  .center-v {
    align-items: center;
  }

  

  input, select,button{
    width:90%;
    border-radius:5px;
    height:2.5rem;
    padding:0.5rem;
    font-size:medium;
    border-color:lightgray;
    box-shadow: 0px 0px 0px black;
  }

  label{
    font-size:large;
  }

.flex{
    display:flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0.5rem;
    margin-top: 0.5rem;
    
}

button{
    background-color: rgb(209, 33, 33);
    color:white;
    cursor:pointer;
}


  ";s:6:"digest";s:32:"c6a4c7cc5c012f8e571248db2fe8af18";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"C:\Users\alopa\OneDrive\Escritorio\xampp2\htdocs\Symfony\TFG\assets\Fuentes\AlteHaasGroteskRegular.ttf";s:10:"publicPath";s:75:"/assets/Fuentes/AlteHaasGroteskRegular-0b631a811e41c664679da924c6bfe676.ttf";s:23:"publicPathWithoutDigest";s:42:"/assets/Fuentes/AlteHaasGroteskRegular.ttf";s:15:"publicExtension";s:3:"ttf";s:7:"content";N;s:6:"digest";s:32:"0b631a811e41c664679da924c6bfe676";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:34:"Fuentes/AlteHaasGroteskRegular.ttf";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"styles/app.css";}