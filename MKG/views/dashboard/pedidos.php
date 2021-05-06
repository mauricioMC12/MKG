<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Pedidos','../../resources/css/dashboard/pedidos.css');
?>

<div class="row " id="pro">

    <h4 class="center">Pedidos</h4>
    <div id="modaladd" class="modal">

        <div class="modal-content">
            <h4 class="center">Agregar Pedidos</h4>
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
    <div class="col s12">
        <a class="waves-effect waves-light btn"><i class="material-icons right">search</i>Buscar</a>
        <div class="col s2">
            <input type="text">
        </div>
        <div id="table">
            <table class="responsive-table striped">
                <thead id="tableEn">
                    <tr>
                        <th>No. Pedido</th>
                        <th>Fecha Pedido</th>
                        <th>Fecha Entrega</th>
                        <th>Hora</th>
                        <th>Cliente</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>08/01/2021</td>
                        <td>10/01/2021</td>
                        <td>03:38 pm</td>
                        <td>Nicolle Abarca</td>
                        <td>Col. Las Margaritas</td>
                        <td>Entregado</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>25/02/2021</td>
                        <td>---</td>
                        <td>05:42 pm</td>
                        <td>Moises Valladares</td>
                        <td>Res. Linda Vista, pasj 4, #14</td>
                        <td>Pendiente</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>14/03/2021</td>
                        <td>16/03/2021</td>
                        <td>11:16 am</td>
                        <td>Jhansi Aguilar</td>
                        <td>Calle El Cantarito, 2do bloque, #3</td>
                        <td>Entregado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>







<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('pedidos.js');
?>