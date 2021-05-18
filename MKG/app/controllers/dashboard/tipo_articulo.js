//Método que agrega un controlador de eventos cuando el contenido del documento ha sido cargado
document.addEventListener('DOMContentLoaded', function() {
    //Se inicializa el componente sidenav (navegación lateral)
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    //Se inicializa el componente slider
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
    //Se inicializa el componente modal
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    //Se inicializa el componente carousel
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);
    //Se inicializa el componente collapsible
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
    //Se inicaliza el componente dropdown
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems,);
    // Se inicializa el componente tooltip 
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems,);
});

// Constante para establecer la ruta y parámetros de comunicación con la API.
const API_TIPO_ARTICULO = '../../app/api/dashboard/tipo_articulo.php?action=';

// Método manejador de eventos que se ejecuta cuando el documento ha cargado.
document.addEventListener('DOMContentLoaded', function () {
    // Se llama a la función que obtiene los registros para llenar la tabla. Se encuentra en el archivo components.js
    readRows(API_TIPO_ARTICULO);
});

// Función para llenar la tabla con los datos de los registros. Se manda a llamar en la función readRows().
function fillTable(dataset) {
    let content = '';
    // Se recorre el conjunto de registros (dataset) fila por fila a través del objeto row.
    dataset.map(function (row) {
        // Se crean y concatenan las filas de la tabla con los datos de cada registro.
        content += `
            <tr>
                <td><img src="../../resources/img/tipo_articulo/${row.foto_tipo_articulo}" class="materialboxed" height="100"></td>
                <td>${row.tipo_articulo}</td>
                <td>${row.descripcion_tipo_articulo}</td>
                <td>
                    <a href="#" onclick="openUpdateDialog(${row.id_tipo_articulo})" class="btn waves-effect blue tooltipped" data-tooltip="Actualizar"><i class="material-icons">mode_edit</i></a>
                    <a href="#" onclick="openDeleteDialog(${row.id_tipo_articulo})" class="btn waves-effect red tooltipped" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                    <a href="../../app/reports/dashboard/productos_categoria.php?id=${row.id_tipo_articulo}" target="_blank" class="btn waves-effect amber tooltipped" data-tooltip="Reporte de productos"><i class="material-icons">assignment</i></a>
                </td>
            </tr>
        `;
    });
    // Se agregan las filas al cuerpo de la tabla mediante su id para mostrar los registros.
    document.getElementById('tbody-rows').innerHTML = content;
    // Se inicializa el componente Material Box asignado a las imagenes para que funcione el efecto Lightbox.
    M.Materialbox.init(document.querySelectorAll('.materialboxed'));
    // Se inicializa el componente Tooltip asignado a los enlaces para que funcionen las sugerencias textuales.
    M.Tooltip.init(document.querySelectorAll('.tooltipped'));
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de buscar.
document.getElementById('search-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se llama a la función que realiza la búsqueda. Se encuentra en el archivo components.js
    searchRows(API_TIPO_ARTICULO, 'search-form');
});

// Función para preparar el formulario al momento de insertar un registro.
function openCreateDialog() {
    // Se restauran los elementos del formulario.
    document.getElementById('save-form').reset();
    // Se abre la caja de dialogo (modal) que contiene el formulario.
    let instance = M.Modal.getInstance(document.getElementById('save-modal'));
    instance.open();
    // Se asigna el título para la caja de dialogo (modal).
    document.getElementById('modal-title').textContent = 'Crear tipo de artículo';
    // Se establece el campo de archivo como obligatorio.
    // El nombre a poner acá será cómo se llame el ID del campo foto en la vista 
    document.getElementById('archivo_categoria').required = true;
}

// Función para preparar el formulario al momento de modificar un registro.
function openUpdateDialog(id) {
    // Se restauran los elementos del formulario.
    document.getElementById('save-form').reset();
    // Se abre la caja de dialogo (modal) que contiene el formulario.
    let instance = M.Modal.getInstance(document.getElementById('save-modal'));
    instance.open();
    // Se asigna el título para la caja de dialogo (modal).
    document.getElementById('modal-title').textContent = 'Actualizar tipo de artículo';
    // Se establece el campo de archivo como opcional.
    // El nombre a poner acá será cómo se llame el ID del campo foto en la vista 
    document.getElementById('archivo_categoria').required = false;

    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_tipo_articulo', id);

    fetch(API_TIPO_ARTICULO + 'readOne', {
        method: 'post',
        body: data
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    // Se inicializan los campos del formulario con los datos del registro seleccionado.
                    document.getElementById('id_tipo_articulo').value = response.dataset.id_tipo_articulo;
                    document.getElementById('tipo_articulo').value = response.dataset.tipo_articulo;
                    document.getElementById('descripcion_tipo_articulo').value = response.dataset.descripcion_tipo_articulo;
                    // Se actualizan los campos para que las etiquetas (labels) no queden sobre los datos.
                    M.updateTextFields();
                } else {
                    sweetAlert(2, response.exception, null);
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
}

// Método manejador de eventos que se ejecuta cuando se envía el formulario de guardar.
document.getElementById('save-form').addEventListener('submit', function (event) {
    // Se evita recargar la página web después de enviar el formulario.
    event.preventDefault();
    // Se define una variable para establecer la acción a realizar en la API.
    let action = '';
    // Se comprueba si el campo oculto del formulario esta seteado para actualizar, de lo contrario será para crear.
    if (document.getElementById('id_tipo_articulo').value) {
        action = 'update';
    } else {
        action = 'create';
    }
    saveRow(API_TIPO_ARTICULO, action, 'save-form', 'save-modal');
});

// Función para establecer el registro a eliminar y abrir una caja de dialogo de confirmación.
function openDeleteDialog(id) {
    // Se define un objeto con los datos del registro seleccionado.
    const data = new FormData();
    data.append('id_tipo_articulo', id);
    // Se llama a la función que elimina un registro. Se encuentra en el archivo components.js
    confirmDelete(API_TIPO_ARTICULO, data);
}