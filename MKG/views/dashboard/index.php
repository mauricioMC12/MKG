<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/dashboard_template.php');
Dashboard_template::headerDashboard('Bienvenido','../../resources/css/dashboard/index.css');
?>
<!--Index  <div> </div>-->
<div class="container">
    <!--Menu -->
  <div class="row">
    <!--Send to Users Management -->
    <div class="col s6 m6 l3">
      <div class="card" id="usuarios">
        <div class="card-image">
          <a href="usuarios.php" class="tooltipped" data-position="bottom" data-tooltip="Usuario"><img src="../../resources/img/Menu/usuarios.png"></a>
        </div>
      </div>
    </div>
     <!--Send to supplier Management -->
    <div class="col s6 m6 l3">
      <div class="card" id="proveedores">
        <div class="card-image">
          <a href="proveedores.php" class="tooltipped" data-position="bottom" data-tooltip="Proveedores"><img src="../../resources/img/Menu/proveedores.png"></a>
        </div>
      </div>
    </div>
     <!--Send to order Management -->
    <div class="col s6 m6 l3">
      <div class="card" id="pedidos">
        <div class="card-image">
          <a href="pedidos.php" class="tooltipped" data-position="bottom" data-tooltip="Pedidos"><img src="../../resources/img/Menu/pedidos.png"></a>
        </div>
      </div>
    </div>
     <!--Send to inventory  Management -->
    <div class="col s6 m6 l3">
      <div class="card" id="inventario">
        <div class="card-image">
          <a href="inventario.php" class="tooltipped" data-position="bottom" data-tooltip="Inventario"><img src="../../resources/img/Menu/inventario.png"></a>
        </div>
      </div>
    </div>
   <!----> 
    <div class="col s6 m6 l3">
      <div class="card" id="inventario">
        <div class="card-image">
          <a href="clientes.php" class="tooltipped" data-position="bottom" data-tooltip="Clientes"><img src="../../resources/img/Menu/inventario.png"></a>
        </div>
      </div>
    </div>
     <!--Send to invoice Management -->
    <div class="col s6 m6 l3 ">
      <div class="card" id="factura">
        <div class="card-image">
          <a href="categoria.php"class="tooltipped" data-position="bottom" data-tooltip="I am a tooltip"><img src="../../resources/img/Menu/factura.png"></a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
//Se incluye la plantilla del pie para la página web
Dashboard_template::footerDashboard('index_dashboard.js');
?>