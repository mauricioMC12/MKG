<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/public_template.php');
Public_template::headerPublic('Favoritos', '../../resources/css/public/favoritos.css');
?>

<!--Componente Image Card-->

<div class="row">

<div class="col l4 s12">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="../../resources/img/favoritos/lam2.png">
                </div>
                    <div class="card-content" id="lamp">
                        <p><a href="#" class="grey-text text-darken-4">Lámparas Vintage</a></p>
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                                <i class="material-icons right">add_shopping_cart</i>
                        </button> 
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Eliminar
                                <i class="material-icons right">remove_circle_outline</i>
                        </button>
                        <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                                <i class="material-icons right">favorite</i>
                        </button>        
         </div>
    </div>
</div>



<div class="col l4 s12">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="../../resources/img/favoritos/cuadro1.png">
                </div>
                    <div class="card-content" id="lamp">
                        <p><a href="#" class="grey-text text-darken-4">Cuadros de Flores</a></p>
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                                <i class="material-icons right">add_shopping_cart</i>
                        </button> 
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Eliminar
                                <i class="material-icons right">remove_circle_outline</i>
                        </button>
                        <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                                <i class="material-icons right">favorite</i>
                        </button>        
         </div>
    </div>
</div>



<div class="col l4 s12">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="../../resources/img/favoritos/mesa1.png">
                </div>
                    <div class="card-content" id="lamp">
                        <p><a href="#" class="grey-text text-darken-4">Sets de Mesas Decorativas</a></p>
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                                <i class="material-icons right">add_shopping_cart</i>
                        </button> 
                        <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Eliminar
                                <i class="material-icons right">remove_circle_outline</i>
                        </button>
                        <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                                <i class="material-icons right">favorite</i>
                        </button>        
         </div>
    </div>
</div>


<?php
//Se incluye la plantilla del pie para la página web
public_template::footer_public('favoritos.js');
?>