<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Pedidos','../../resources/css/dashboard/pedidos.css');
?>


<div class="row " id="pro">
<div class="row card-panel">
        <div class="card-panel">       
        <div class="center ">
        <br>
                <div class="input-field btn col s12 m8 l8 offset-l2  offset-m2" id="combobox">
                    <select  >
                    <option value="" disabled selected>Buscar por:</option>
                    <option value="" data-icon="">No. Pedido</option>
                    <option value="" data-icon="">Cliente</option>
                    <option value="" data-icon="">Estado</option>
                    </select>                   
                </div>           
                <br><br>
                <input type="text" id="searchB">
                <br><br>
                <button class="btn waves-effect waves-light"  id="btn_style"  type="submit" name="action">Buscar&nbsp;&nbsp;&nbsp;
                    <i class="material-icons left ">search</i>
                </button>
                <br><br> 
        </div>       
    </div>
    <div class="" id="form">
        <div class="row card-panel" id="Grupo">
            <h5 class="center">Pedidos</h5>
            <div class="divider"></div>
                <div class="col s12 l12">
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
        </div>
    </div>
</div>




<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('pedidos.js');
?>