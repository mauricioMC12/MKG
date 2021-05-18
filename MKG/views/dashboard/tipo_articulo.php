<?php

include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('categoria','../../resources/css/dashboard/index.css');
?>
<div class="row " id="pro">

<h4 class="center">Categorias</h4>
<div id="modaladd" class="modal">

    <div class="modal-content">
        <h4 class="center">Agregar categoria</h4>
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
                           <!-- cambiar estos  nombres-->
                            <input id="icon_prefix" type="text" class="validate" required>
                            <label for="last_name">Descripción</label>
                        </div>
                        <div class="input-field col s12 m12 l12 ">
                            <form action="#">
                                 <div class="file-field input-field">
                                     <div class="btn">
                                        <span>Foto categoria</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                 </div>
                            </form>
                        </div>
                        <div class="col s12 m6 l6">
                          <p>
                              <div class="switch">
                                    <span>Estado:</span>
                                    <label >
                                        <i class="material-icons ">visibility_off</i>
                                        <input id="estado_producto" type="checkbox" name="estado_producto" checked/>
                                        <span class="lever "></span>
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
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>foto</th>
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
                    <td><i class="material-icons modal-trigger tooltipped" href="#modaladds"  data-position="bottom" data-tooltip="Editar">create</i><i
                            class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>
                </tr>
                <tr>
                    <td>Gisselle</td>
                    <td>Avelar</td>
                    <td>Carretera Planes de Renderos, col. Vista Linda</td>
                    <td>giss.avelar@gmail.com</td>
                    <td>Empleado</td>
                    <td><i class="material-icons modal-trigger tooltipped" href="#modaladd"  data-position="bottom" data-tooltip="Editar">create</i><i
                            class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                </tr>
                <tr>
                    <td>Maria José</td>
                    <td>Castellanos</td>
                    <td>Carrerta al Puerto, km 9 1/2</td>
                    <td>mariaaajc@gmail.com</td>
                    <td>Empleado</td>
                    <td><i class="material-icons modal-trigger tooltipped" href="#modaladd"  data-position="bottom" data-tooltip="Editar">create</i><i
                            class="material-icons modal-trigger tooltipped" href="#modaldelete"  data-position="bottom" data-tooltip="Eliminar">delete</i></td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php

Dashboard_template::footerDashboard('categoria.js');
?>