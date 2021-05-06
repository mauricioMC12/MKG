<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Proveedores','../../resources/css/dashboard/proveedores.css');
?>
<div class="row " id="pro">

    <h4 class="center">Proveedor</h4>
   
    <div id="modaladd" class="modal">

        <div class="modal-content">
            <h4 class="center">Modificar Proveedor</h4>
            <div class="" id="form">
                <div class="row card-panel">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <input id="first_name" type="text" class="validate" required>
                                <label for="first_name black-text">Nombre</label>
                            </div>
                            <div class="input-field col s12 m6 l6 ">
                                <input id="last_name" type="text" class="validate" required>
                                <label for="last_name">Apellido</label>
                            </div>                           
                            <div class="input-field col s12 m6 l6 ">
                                    <input id="password" type="password" class="validate" required>
                                    <label for="password">Correo</label>
                            </div>                                                       
                            <div class="input-field col s12 m6 l6 ">
                                    <input id="email" type="email" class="validate" required>
                                    <label for="email">Telefono</label>
                            </div>
                            <div class="col s12 m6 l6">
                          <p>
                              <div class="switch">
                                    <span>Estado:</span>
                                    <label >
                                        <i class="material-icons ">visibility_off</i>
                                        <input id="estado_producto" type="checkbox" name="estado_producto" checked/>
                                        <span class="lever white"></span>
                                        <i class="material-icons">visibility</i>
                                    </label>
                               </div>
                            </p>
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
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mario</td>
                        <td>Ramirez</td>
                        <td>2345-7676</td>
                        <td>mario_rmez@gmail.com</td>
                        <td>Activo</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaladd " data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete" data-position="bottom" data-tooltip="Eliminar">delete</i></td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>5476-0996</td>
                        <td>ljlly@hotmail.com</td>
                        <td>Inactivo</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaladd" data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete" data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>33456-1221</td>
                        <td>Jnapop@gmail.com</td>
                        <td>Activo</td>
                        <td><i class="material-icons modal-trigger tooltipped" href="#modaledit" data-position="bottom" data-tooltip="Editar">create</i><i
                                class="material-icons modal-trigger tooltipped" href="#modaldelete" data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>






<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('proveedores.js');
?>