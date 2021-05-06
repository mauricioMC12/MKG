<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Usuarios','../../resources/css/dashboard/usuarios.css');
?>
<div class="row " id="pro">

    <h4 class="center">Usuario</h4>
    <div id="modaladd" class="modal">

        <div class="modal-content">
            <h4 class="center">Agregar Usuarios</h4>
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
                                <input id="icon_drafts" type="text" class="validate">
                                <label for="textarea1">Dirección</label>
                                <br>
                            </div>
                            <div class=" input-field col s6 ">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_drafts" type="text" class="validate">
                                <label for="textarea1">Contraseña</label>
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
        <a class="waves-effect waves-light btn modal-trigger" href="#modaladd"><i
                class="material-icons right">add</i>Agregar</a>
        <div class="col s2">
            <input type="text">
        </div>
        <div id="table">
            <table class="responsive-table striped">
                <thead id="tableEn">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                        <th>Tipo de Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Katherine</td>
                        <td>Gavidia</td>
                        <td>Res. San Luis, pasaje 5, block E pon #2</td>
                        <td>katherinegavia@gmail.com</td>
                        <td>Administrador</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaledit"  data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>
                    </tr>
                    <tr>
                        <td>Gisselle</td>
                        <td>Avelar</td>
                        <td>Carretera Planes de Renderos, col. Vista Linda</td>
                        <td>giss.avelar@gmail.com</td>
                        <td>Empleado</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaledit"  data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                    </tr>
                    <tr>
                        <td>Maria José</td>
                        <td>Castellanos</td>
                        <td>Carrerta al Puerto, km 9 1/2</td>
                        <td>mariaaajc@gmail.com</td>
                        <td>Empleado</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaledit"  data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>






<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('usuarios.js');
?>