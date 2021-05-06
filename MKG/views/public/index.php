<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/public_template.php');
Public_template::headerPublic('Bienvenido', '../../resources/css/public/indexP.css');
?>

<!--Componente slider con una altura de 400 píxeles e imágenes de 1600x400 píxeles-->
<div class="slider" id="slide"> 
    <ul class="slides">
        <li>
            <img src="../../resources/img/index/4C.png">
            <div class="caption center-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <li>
            <img src="../../resources/img/index/3C.png">
            <div class="caption left-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <li>
            <img src="../../resources/img/index/5C.png">
            <div class="caption right-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <li>
            <img src="../../resources/img/index/6C.png">
            <div class="caption center-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <li>
            <img src="../../resources/img/index/1C.png">
            <div class="caption center-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <li>
            <img src="../../resources/img/index/2C.png">
            <div class="caption center-align">
                <h3></h3>
                <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
    </ul>
</div>

<!--Componente Image Card-->



<div class="row">

<div class="col l4 s12">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../resources/img/cards/Card4.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
      <p><a href="#" class="grey-text text-darken-4">La decoración se torna imprescindible para transmitir gratas...</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>La decoración se torna imprescindible para transmitir gratas 
        sensaciones a sus ocupantes. El estilo, iluminación, colores y muebles son determinantes para una confortable estancia.</p>
    </div>
  </div>
    </div>


    <div class="col l4 s12">
      
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../resources/img/cards/Card3.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
      <p><a href="#" class="grey-text text-darken-4">Los ambientes desordenados suelen conllevar mentes desordenadas...</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>Los ambientes desordenados suelen conllevar mentes desordenadas. Y se sabe que el orden externo ayuda a crear 
               un mayor equilibrio interior.</p>
    </div>
      </div>
    </div>



    <div class="col l4 s12">
     
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../resources/img/cards/Card5.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
      <p><a href="#" class="grey-text text-darken-4">A través de la decoración se pueden enviar mensajes al cerebro ...</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>A través de la decoración se pueden enviar mensajes al cerebro que hacen que sintamos algunos tipos de sensaciones, ya sea de comodidad, tranquilidad o disgusto, de mal humor o tensionados.</p>
    </div>
      </div>
    </div>

  




 
<?php
//Se incluye la plantilla del pie para la página web
public_template::footer_public('index_public.js');
?>