<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Usuarios','../../resources/css/dashboard/usuarios.css');
?>
<div class="row " id="pro">
    <div class="col s12 l9 ">
        <h5 class="center">Usuario</h5>
        <div class="divider"></div>
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
                        <div class="input-field col s6" >
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
                        <div class="input-field btn col s8 offset-m2 l3 offset-l0" id="combobox1">                        
                            <select>
                            <option value="" disabled selected> &nbsp;&nbsp;Tipo Usuario</option>
                            <option value="" data-icon="">Administrador</option>
                            <option value="" data-icon="">Empleado</option>
                            </select>                   
                        </div>
                    </div>  
                </form>      
            </div>
        </div> 
    </div>
    <div class="col s12 l3 t">
        <div class="card-panel">       
            <div class="center ">
                <br>
            <button class="btn waves-effect waves-light" id="btn_style"  type="submit" name="action">Agregar Usuario &nbsp;&nbsp;
                <i class="material-icons left">add_circle</i>
            </button>
            <br><br>
            <button class="btn waves-effect waves-light"  id="btn_style"  type="submit" name="action">Modificar Usuario &nbsp;&nbsp;
                <i class="material-icons left">create</i>
            </button>
            <br><br>
            <button class="btn  waves-effect waves-light"  id="btn_style"  type="submit" name="action">Eliminar Usuario &nbsp;&nbsp;&nbsp;
                <i class="material-icons left ">delete_sweep</i>
            </button>
            <br><br>          
            </div>
        </div> 
        <div class="card-panel">       
            <div class="center ">            
                <br>
                <div class="input-field btn col s12 m8 l8 offset-l2  offset-m2" id="combobox2">
                    <select>
                    <option value="" disabled selected>Buscar por:</option>
                    <option value="" data-icon="">ID</option>
                    <option value="" data-icon="">Nombre</option>
                    <option value="" data-icon="">Tipo de Usuario</option>
                    </select>                   
                </div>           
                <br><br>
                <input type="text" id="search">
                <br><br>
                <button class="btn waves-effect waves-light"  id="btn_style"  type="submit" name="action">Buscar&nbsp;&nbsp;&nbsp;
                    <i class="material-icons left ">search</i>
                </button>
                <br><br>
            </div>
        </div>
    </div>
    <div class="col s12 l12">
        <div id="table">
        <table class="responsive-table striped">
            <thead id="tableEn">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Tipo de Usuario</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Katherine</td>
                <td>Gavidia</td>
                <td>Res. San Luis, pasaje 5, block E pon #2</td>
                <td>katherinegavia@gmail.com</td>
                <td>Administrador</td>
            </tr>
            <tr>
                <td>Gisselle</td>
                <td>Avelar</td>
                <td>Carretera Planes de Renderos, col. Vista Linda</td>
                <td>giss.avelar@gmail.com</td>
                <td>Empleado</td>
            </tr>
            <tr>
                <td>Maria José</td>
                <td>Castellanos</td>
                <td>Carrerta al Puerto, km 9 1/2</td>
                <td>mariaaajc@gmail.com</td>
                <td>Empleado</td>
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