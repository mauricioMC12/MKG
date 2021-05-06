<?php
//Include header template
include('../../app/helpers/public_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
Public_template::headerPublic('Articulo', '../../resources/css/public/detalle_articulo.css');
?>

<!--Data item <div> </div>-->
<div class="" id="form">
  <div class="row card-panel" id="cardback">
    <div class="row">
      <div class="col s4">
        <div class="card" id="card">
          <!--Image item-->
          <div class="card-image" id="imagen">
            <img src="../../resources/img/products/lamparademesa.png">
          </div>
        </div>
      </div>
      <div class="card-panel">
        <!--Name item-->
        <div class="card-content">
          <span class="card-title">Lámpara de mesa Hale Coastal</span>
        </div>
         <!--Price item -->
        <div class="card-content" id="precio">
          <p>Precio: $195.00</p>
        </div>
        <!--Description item -->
        <div class="card-content" id="descripcion">
          <p>Descripción del artículo: <br> Ilumina tu hogar con esta lámpara de vidrio ideal para los espacios amplios
            de tu sala.</p>
        </div>
        <!--Button add shopping cart-->
        <a class="waves-effect waves-light btn black-text" id="carrito"><i
            class="material-icons right">add_shopping_cart</i>Agregar al carrito</a>
            <!--Button add to Favorites -->
        <a class="waves-effect waves-light btn " id="fav"><i class="material-icons center">favorite</i></a>
      </div>
    </div>
  </div>
</div>
</div>
 <!--Show suggested products-->
<div class="" id="form">
  <div class="row card-panel" id="cardback">
    <h5 class="center">Otros productos que pueden interesarte...</h5>
    <div class="divider deep-orange darken-3"></div>
    <div class="row">
      <div class="col s4">
        <div class="card" id="card1">
          <div class="card-image">
            <img src="../../resources/img/products/cuadro.png" id="img1">
          </div>
          <div class="card-content">
            <h5>Pintura al óleo enmarcada de Delaney.</h5>
            <p>Precio: $23.95</p>
            <br>
            <a href="#" class="">Ver más...</a>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card" id="card2">
          <div class="card-image">
            <img src="../../resources/img/products/mesa.jpg" id="img2">
          </div>
          <div class="card-content">
            <h5>Mesa para sala con acabado de marmol</h5>
            <p>Precio: $68.00</p>
            <br>
            <a href="#" class="">Ver más...</a>
          </div>
        </div>
      </div>

      <div class="col s4">
        <div class="card" id="card3">
          <div class="card-image">
            <img src="../../resources/img/products/alfombraQuatro.jpg" id="img3">
          </div>
          <div class="card-content">
            <h5>Alfombra Quatro</h5>
            <p>Precio: $39.45</p>
            <br>
            <a href="#" class="">Ver más...</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php
//Include footer template
public_template::footer_public('detalle_articulo.js');
?>