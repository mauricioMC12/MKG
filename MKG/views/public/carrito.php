<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/public_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
Public_template::headerPublic('Carrito', '../../resources/css/public/carrito.css');
?>
<!--Shopping cart  <div> </div>-->
<div class="row " id="pro">
    <h4 class="center">Carrito de Compras</h4>
    <div id="modaladd" class="modal">

        <div class="modal-content">
            <h4 class="center">Agregar Artículo</h4>
            <div class="" id="form">
                <div class="row card-panel">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="validate" required>
                                <label for="first_name black-text">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate" required>
                                <label for="last_name">Apellido</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telefono</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">drafts</i>
                                <input id="icon_drafts" type="text" class="validate">
                                <label for="email_inline">Correo</label>
                            </div>
                            <div class=" input-field col s6 ">
                                <i class="material-icons prefix">edit_location</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Dirección</label>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agregar</a>
        </div>
    </div>
    <div id="modaledit" class="modal">

        <div class="modal-content">
            <h4 class="center">Modificar Usuarios</h4>
            <div class="" id="form">
                <div class="row card-panel">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" type="text" class="validate" required>
                                <label for="first_name black-text">Artículo</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate" required>
                                <label for="last_name">Cantidad</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Precio</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">drafts</i>
                                <input id="icon_drafts" type="text" class="validate">
                                <label for="email_inline">Subtotal</label>
                            </div>
                            <div class=" input-field col s6 ">
                                <i class="material-icons prefix">edit_location</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Total</label>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Modificar</a>
        </div>
    </div>
    <div id="modaldelete" class="modal">
        <div class="modal-content">
            <h4 class="center">¿Desea eliminar este campo?</h4>
        </div>
        <div class="modal-footer center">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat center">Cerrar</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
        </div>
    </div>

   <!--Data items add to shopping cart--> 
    <div class="col s12">


        <div id="table">
            <table class="responsive-table striped">
                <thead id="tableEn">
                    <tr>
                        <th></th>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../../resources/img/favoritos/lam2.png" id="articulo1"></td>
                        <td>Lámpara Led</td>
                        <td>8</td>
                        <td>10.50</td>
                        <td>84</td>

                    </tr>
                    <tr>
                        <td><img src="../../resources/img/favoritos/mesa2.png" id="articulo2"></td>
                        <td>Mesa Decorativa</td>
                        <td>15</td>
                        <td>25</td>
                        <td>375</td>
                    </tr>
                    <tr>
                        <td><img src="../../resources/img/favoritos/cuadro2.png" id="articulo3"></td>
                        <td>Cuadro Safari</td>
                        <td>30</td>
                        <td>12</td>
                        <td>360</td>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>819</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th> <a class="waves-effect waves-light btn" href="pago.php"><i
                                    class="material-icons right">check_circle</i>Continuar compra</a></th>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
//Se incluye la plantilla del pie para la página web
public_template::footer_public('carrito.js');
?>