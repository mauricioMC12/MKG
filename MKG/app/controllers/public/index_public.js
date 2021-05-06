//Método que agrega un controlador de eventos cuando el contenido del documento ha sido cargado
document.addEventListener('DOMContentLoaded', function() {
    let elements, instances;
    //Se inicializa el componente sidenav (navegación lateral)
    elements = document.querySelectorAll('.sidenav');
    instances = M.Sidenav.init(elements);
    //Se inicializa el componente slider
    elements = document.querySelectorAll('.slider');
    instances = M.Slider.init(elements);
    //Se inicializa el componente modal
    elements = document.querySelectorAll('.modal');
    instances = M.Modal.init(elements);
    //Se inicializa el componente carousel
    elements = document.querySelectorAll('.carousel');
    instances = M.Carousel.init(elements);
    //Se inicializa el componente collapsible
    elements = document.querySelectorAll('.collapsible');
    instances = M.Collapsible.init(elements);
    //Se inicaliza el componente dropdown
    elements = document.querySelectorAll('.dropdown-trigger');
    instances = M.Dropdown.init(elements);
});