<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/public_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
Public_template::headerPublic('Catalogo','../../resources/css/public/catalogo.css');
?>

<!--Catalogue items-->
<div class="row">

    <div class="col l4 s12">
        <div class="card">
            <!--Image item-->
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/lam1.jpg"></a>
            </div>
            <div class="card-content" id="lamp">
                <!--Name  item-->
                <p><a class="grey-text text-darken-4">Lámparas Colgantes </a></p>
                <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                   <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown0'>+1</a>
                <ul id='dropdown0' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/lam2.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Lámparas Vintage</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                    <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown00'>+1</a>
                <ul id='dropdown00' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/lam3.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Lámparas Colgantes de Figuras</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                   <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown3'>+1</a>
                <ul id='dropdown3' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator"
                        src="../../resources/img/favoritos/cuadro1.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Cuadros de Flores</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                   <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown4'>+1</a>
                <ul id='dropdown4' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"> <img class="activator"
                        src="../../resources/img/favoritos/cuadro2.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Cuadros Safari</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                  <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown5'>+1</a>
                <ul id='dropdown5' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator"
                        src="../../resources/img/favoritos/cuadro3.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Cuadros Decorativos de Flores</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                 <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown6'>+1</a>
                <ul id='dropdown6' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/mesa1.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Sets de Mesas Decorativas</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                  <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown7'>+1</a>
                <ul id='dropdown7' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/mesa2.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Set de 3 Mesas Decorativas</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                 <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown8'>+1</a>
                <ul id='dropdown8' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>


    <div class="col l4 s12">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="detalle_articulo.php"><img class="activator" src="../../resources/img/favoritos/mesa3.png"></a>
            </div>
            <div class="card-content" id="lamp">
                 <!--Name  item-->
                <p><a href="#" class="grey-text text-darken-4">Sets de Mesas Decorativas</a></p>
                   <!--Button add shopping cart-->
                <button class="btn waves-effect waves-light" type="add_shopping_cart" name="action">Agregar al Carrito
                    <i class="material-icons right">add_shopping_cart</i>
                </button>
                     <!--Button add Favorites-->
                <button class="btn waves-effect waves-light pink darken-3" type="add_shopping_cart" name="action">
                    <i class="material-icons right">favorite_border</i>
                </button>
                <a class='dropdown-trigger btn' href='#' data-target='dropdown9'>+1</a>
                <ul id='dropdown9' class='dropdown-content'>
                    <li><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                </ul>
                <div id="CARD12"> <i class="material-icons right">star_half</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                    <i class="material-icons right">star</i>
                </div>
            </div>
        </div>
    </div>
    <?php
//Se incluye la plantilla del pie para la página web
public_template::footer_public('catalogo_public.js');
?>