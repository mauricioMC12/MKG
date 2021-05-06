<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Inventario','../../resources/css/dashboard/inventario.css');
?>
<!--Inventario   <div> </div> -->
<div class="row " id="pro">
    <h4 class="center">Inventario</h4>
    <div id="modaladd" class="modal">
        <div class="modal-content">
            <h4 class="center">Agregar Inventario</h4>
            <div class="" id="form">
                <div class="row card-panel">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" required>
                                <label for="first_name black-text">Cantidad</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" required>
                                <label for="last_name">Costo Unitario</label>
                            </div>
                            <div class="input-field col s12 l6  m6">
                                <input type="text" class="datepicker">                               
                            </div>
                            <div class="input-field btn col s12  l4 offset-l1" id="combobox">
                                <select>
                                    <option value="" disabled selected> &nbsp;&nbsp;Nombre Articulo</option>
                                    <option value="" data-icon="">Activo</option>
                                    <option value="" data-icon="">Inactivo</option>
                                    <option value="" data-icon="">Suspendido</option>
                                </select>
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
                        <th>Nombre del Artículo</th>
                        <th>Costo Unitario</th>
                        <th>Cantidad</th>
                        <th>Fecha</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lampara Led</td>
                        <td>20.50</td>
                        <td>50</td>
                        <td>Katherine Gavidia</td>
                        <td>Lámpara</td>
                        <td>Lámparas del de 10 colores</td>
                        <td><i class="material-icons modal-trigger" href="#modaladd">create</i><i
                                class="material-icons modal-trigger" href="#modaldelete">delete</i></td>
                    </tr>
                    <tr>
                        <td>Cuadros de Flores</td>
                        <td>30</td>
                        <td>100</td>
                        <td>María José Castellanos</td>
                        <td>Cuadro decorativo</td>
                        <td>Cuadro para decorar una pared de casa</td>
                        <td><i class="material-icons modal-trigger" href="#modaladd">create</i><i
                                class="material-icons modal-trigger" href="#modaldelete">delete</i></td>

                    </tr>
                    <tr>
                        <td>Mesas Minimalistas</td>
                        <td>50</td>
                        <td>15</td>
                        <td>Katherine Gavidia</td>
                        <td>Mesa</td>
                        <td>Mesa de decoracion, con formas de figuras</td>
                        <td><i class="material-icons modal-trigger" href="#modaladd">create</i><i
                                class="material-icons modal-trigger" href="#modaldelete">delete</i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('inventario.js');
?>