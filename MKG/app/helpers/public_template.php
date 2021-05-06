<?php

class Public_template{
//Metodo  que presenta el encabezado 
    public static function headerPublic($title,$path){
        print('
        <!DOCTYPE html>
        <html lang="es">
        
        <head>
            <!--Se establece la codificación de caracteres para el documento-->
            <meta charset="utf-8">
            <!--Se importa la fuente de iconos de Google y fuente-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">


            <!--Se importan los archivos CSS locales-->
            <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css" />
            <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />
            <link type="text/css" rel="stylesheet" href="'.$path.'" />
            <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!--Título del documento-->
            <title>Public - '.$title.'</title>
        </head>
        
        <body class="amber lighten-3">
            <!--Encabezado del documento-->
            <header>
                <!--Barra de navegación fija-->
                <div class="navbar-fixed ">
                    <nav class="teal lighten-3">
                        <div class="nav-wrapper">
                            <div class="container" id="img">
                                <a href="index.php" class="brand-logo"><img src="../../resources/img/Logo/homestyle.ico"></a>
                            </div>
                            <a href="#" data-target="mobile-navbar" class="sidenav-trigger black-text">
                                <i class="material-icons">menu</i>
                            </a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="../../views/public/index.php" class="black-text">Inicio</a></li>
                                <li>
                                    <a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">Articulos<i class="material-icons right">arrow_drop_down</i></a>
                                </li>
                                                
                                <li><a href=""><i class="Medium material-icons black-text">search</i></li></a>
                                <li><a href="profile.php"><i class="Medium material-icons black-text">account_circle</i></li></a>
                                <li><a href="favoritos.php"><i class="Medium material-icons black-text">favorite</i></li></a>
                                <li><a href="carrito.php"><i class="Medium material-icons black-text">local_grocery_store</i></li></a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Dropdown para el menú normal -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="catalogo.php">Lámparas</a></li>
                    <li><a href="catalogo.php">Cuadros</a></li>
                    <li class="divider"></li>
                    <li><a href="catalogo.php">Mesas</a></li>
                </ul>
                <!--Navegación lateral para dispositivos móviles-->
                <ul class="sidenav" id="mobile-navbar">
                    <li><a href="profile.php"><i class="medium material-icons black-text">account_circle </i><h4>&nbsp;&nbsp;Perfil</h4></li></a>
                    <li><a href=""><i class="Medium material-icons black-text">search</i></li></a> 
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="catalogo.php" class="dropdown-trigger" data-target="dropdown2">Articulos<i class="material-icons right">arrow_drop_down</i></a></li>                  
                    <li><a href="favoritos.php"><i class="Medium material-icons black-text">favorite</i></li></a>
                    <li><a href="carrito.php"><i class=" material-icons black-text">local_grocery_store</i></li></a>
                </ul>
                <!-- Dropdown para el menú responsivo -->
                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="catalogo.php">Lámparas</a></li>
                    <li><a href="catalogo.php">Cuadros</a></li>
                    <li class="divider"></li>
                    <li><a href="catalogo.php">Mesas</a></li>
                </ul>
            </header>
            <!--Contenido principal del documento-->
            <main>');
              }

public static function footer_public($controller){
 print('
    </main>

        <!--Pie del documento-->
        <footer class="page-footer teal lighten-3">
           
            <div class="container" id="cardsnosotros"> 
                <div class="row">
                    <div class="col l6 s12">
                    <!-- Colocamos un modal para mostrar un apartado sobre nosotros-->
                        <div id="modalsobrenosotros" class="modal" >
                            <div class="modal-content" id="cardGiss">
                              <h2 >Sobre Nosotros</h2>
                              <h4>¡Nuestro Equipo!</h4>
                              <p>Somos una web corporativa, creadores de MKG HOMESTYLE, una tienda en línea de artículos para decoración de interiores.</p>
                              <p>
                                  <div class="row" id="cardGiss">
                                    <div class="col l4 s12">
                                        <div class="card" >
                                            <div class="card-image waves-effect waves-block waves-light">
                                              <img class="activator" src="../../resources/img/Nosotros/Giss.jpg">
                                            </div>
                                            <div class="card-content">
                                              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                              <p><a href="#" class="grey-text text-darken-4">Gisselle Alexandra Villalta Avelar...</a></p>
                                            </div>
                                            <div class="card-reveal">
                                              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                              <p><br>Gisselle Alexandra Villalta Avelar. </br>
                                                <br>-Programador Semi Senior.</br>
                                                <br>-Programador con especilidad en Frontend y Diseño web.</br>
                                                <br> -Estudiante del Instituto Técnico Ricaldone, desde 2018; actualmente estudia 3° año Técnico de Desarrollo de Software.</br>
                                                <br>-Valores: Honestidad, amabilidad, sinceridad, paciencia. </br>
                                                <br>-Hobbies: Escuchar música, leer libros románticos, practicar natación.</br>
                                                </p>
                                            </div>
                                          </div>
                                            </div>
                                        
                                            <div class="col l4 s12">
                                              <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                              <img class="activator" src="../../resources/img/Nosotros/Monty.jpeg">
                                            </div>
                                            <div class="card-content">
                                              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                              <p><a href="#" class="grey-text text-darken-4">Mauricio Alejandro Contreras Montoya...</a></p>
                                            </div>
                                            <div class="card-reveal">
                                              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                              <p><br>Mauricio Alejandro Contreras Montoya.</br>
                                                <br>-Programador Semi Senior.</br>
                                                <br>-Programador con especialidad en Backend y Desarrollo Web.</br>
                                                <br>-Estudiante del Instituto Técnico Ricaldone, desde 2016; actualmente estudia 3° año Técnico de Desarrollo de Software.</br>
                                                <br>-Valores: Respeto, empatía, honestidad, cooperación, valentía, generosidad. </br>
                                                <br>-Hobbies: Hacer ejercicio, jardinería, ver series animadas.</br>
                                                </p>
                                            </div>
                                              </div>
                                            </div>
                                        
                                            <div class="col l4 s12">
                                              <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                              <img class="activator" src="../../resources/img/Nosotros/Kath.jpeg">
                                            </div>
                                            <div class="card-content">
                                              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                                              <p><a href="#" class="grey-text text-darken-4">Katherine Michelle Gavidia Valladares...</a></p>
                                            </div>
                                            <div class="card-reveal">
                                              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                                              <p>Katherine Michelle Gavidia Valladares</p>
                                            </div>
                                              </div>
                                            </div>
                                  </div>
                              </p>
                            </div>
                          </div>

                    <!-- Colocamos un modal para mostrar un apartado Mision y Vision-->
                          <div id="modalmision" class="modal">
                           
                              <h2 >Misión y Visión</h2>
                              <h4>Misión:</h4>
                              <p>"Ser líder en la comercialización de productos urbanos, apoyándolo con tecnología de primera, satisfaciendo las necesidades de sus clientes por encima de sus expectativas, brindándoles productos de calidad y con un excelente servicio. Asimismo, la empresa tiene como objetivo el crecimiento sostenido de la misma y el desarrollo profesional de sus colaborantes"</p>
                              <h4>Visión:</h4>
                              <p>Al año 2025 ser identificados a nivel regional por:
                                <br> -Apoyar el comercio de artículos de decoración en los países regionales con eficiencia y responsabilidad.</br>
                                <br>-Llenar las expectativas propuestas de nuestro sistema.</br>
                                <br>-Una oferta de servicios que puedan ser accesibles, pertinentes, flexibles y de calidad para todo el que quiera utilizar nuestros productos.</br>
                                </p>
                                <div class="modal-content">
                                    <div class="col l4 s12" id="logocardmision">
                                          <div class="card">
                                      <div class="card-image waves-effect waves-block waves-light" >
                                          <img class="activator" src="../../resources/img/Logo/homestyle.png">
                                      </div>
                                          </div>
                                      </div>
                            </div>
                          
                          </div>
                          

                     <!-- Colocamos un modal para mostrar un apartado Contacteno-->
                          <div id="modalcontactenos" class="modal">
                            <div class="modal-content">
                                <br><h2 >Contáctenos</h2></br>
                                <br><p>Call Center: +(503)22931219</p></br>
                                <br><p>Correo Electrónico: mkghomestyle@gmail.com</p></br>
                              <p></p>
                              <div class="modal-content">
                                <div class="col l4 s12" id="logocardmision">
                                      <div class="card">
                                  <div class="card-image waves-effect waves-block waves-light" >
                                      <img class="activator" src="../../resources/img/Logo/homestyle.png">
                                  </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                    <ul>
                    <a class="modal-trigger" href="#modalsobrenosotros"><p class="black-text text-lighten-4">Sobre Nosotros</p></a>

                    <a class="modal-trigger" href="#modalmision"><p class="black-text text-lighten-4">Misión y Visión</p></a>
                     
                    <a class="modal-trigger" href="#modalcontactenos"><p class="black-text text-lighten-4">Contáctenos</p></a>


                    </ul>
                    </div>

                     <!-- Colocamos los links para las redes sociales con logos-->
                    <div class="col l4 offset-l2 s12">
                        <h6 class="black-text">Síguenos en nuestras redes sociales</h6>
                        <ul>
                             <!-- Colocamos target para que el link se abra en otra página web-->
                       <a target="_blank" href="https://web.whatsapp.com/">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" 
                            stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                             stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M16.9936,126.12975l-0.2236,-0.38915c-7.01545,-12.14535 -10.7199,-26.0193 -10.71345,-40.119c0.01935,-44.247 36.034,-80.2466 80.281,-80.2466c21.46345,0.00645 41.6326,8.36565 56.78795,23.5339c15.1532,15.1661 23.4995,35.33095 23.4995,56.77935c-0.0215,44.25345 -36.034,80.2552 -80.281,80.2552c-13.43105,-0.00645 -26.6987,-3.3841 -38.40115,-9.76745l-0.3741,-0.2064l-41.7401,10.9478z" fill="#ffffff"></path><path d="M86.33755,6.45v0c21.1775,0.00645 41.07575,8.2517 56.02685,23.21785c14.9511,14.96615 23.1856,34.8601 23.1856,56.0204c-0.01935,43.66005 -35.5524,79.1802 -79.23825,79.1802c-13.22035,-0.00645 -26.30955,-3.33895 -37.8529,-9.6363l-0.75035,-0.4085l-0.8256,0.21715l-39.5256,10.363l10.5565,-38.55595l0.2365,-0.86645l-0.44935,-0.7783c-6.923,-11.9841 -10.578,-25.671 -10.57155,-39.5815c0.0215,-43.6536 35.5524,-79.1716 79.20815,-79.1716M86.33755,4.3c-44.83825,0 -81.33665,36.48335 -81.356,81.3216c-0.0086,14.3319 3.7367,28.3284 10.8575,40.65865l-11.53905,42.1486l43.129,-11.309c11.8809,6.48225 25.26465,9.89215 38.8806,9.8986h0.0344c44.83825,0 81.33665,-36.48335 81.356,-81.32805c0,-21.7322 -8.45595,-42.16795 -23.81555,-57.5426c-15.35745,-15.3725 -35.78245,-23.84135 -57.5469,-23.8478z" fill="#788b9c"></path><path d="M85.9785,150.5c-10.76935,-0.00645 -21.42475,-2.71545 -30.8138,-7.8389l-6.16405,-3.3626l-6.79185,1.7802l-13.9363,3.65285l3.56685,-13.03115l1.95005,-7.1208l-3.6937,-6.3941c-5.6287,-9.74595 -8.60215,-20.88725 -8.5957,-32.2156c0.01505,-35.54595 28.9476,-64.4656 64.49355,-64.4699c17.2473,0.00645 33.4497,6.7209 45.62515,18.90495c12.17545,12.1862 18.8813,28.39075 18.8813,45.6187c-0.0172,35.5524 -28.94975,64.47635 -64.5215,64.47635z" fill="#79ba7e"></path><path d="M121.60615,101.8584c-1.935,-0.96535 -11.44015,-5.6459 -13.20745,-6.2866c-1.77375,-0.64715 -3.0616,-0.96535 -4.34945,0.96535c-1.28785,1.935 -4.9923,6.2866 -6.11675,7.57445c-1.1266,1.28785 -2.2532,1.4491 -4.1882,0.4859c-1.935,-0.96535 -8.16355,-3.01 -15.5445,-9.5933c-5.7491,-5.1213 -9.6277,-11.45305 -10.75215,-13.38805c-1.1266,-1.935 -0.12255,-2.97775 0.8471,-3.9431c0.86645,-0.86645 1.935,-2.25965 2.90035,-3.38625c0.96535,-1.1266 1.28785,-1.935 1.935,-3.225c0.64715,-1.28785 0.32465,-2.4209 -0.16125,-3.38625c-0.4859,-0.96535 -4.34945,-10.48125 -5.96195,-14.34695c-1.56735,-3.7668 -3.1648,-3.25725 -4.34945,-3.3153c-1.1266,-0.05805 -2.41445,-0.0645 -3.7023,-0.0645c-1.28785,0 -3.38625,0.4859 -5.15355,2.4209c-1.7673,1.935 -6.76605,6.6091 -6.76605,16.1207c0,9.5116 6.9273,18.70285 7.89265,19.9907c0.96535,1.28785 13.6267,20.8077 33.024,29.17765c4.6096,1.9866 8.21515,3.1777 11.01875,4.0721c4.62895,1.4706 8.84295,1.26205 12.1776,0.76325c3.7152,-0.55685 11.44015,-4.6741 13.04405,-9.18695c1.6125,-4.51285 1.6125,-8.38285 1.1266,-9.18695c-0.4902,-0.81055 -1.77805,-1.29645 -3.71305,-2.2618z" fill="#ffffff"></path></g></g></svg>  
                        <i/> 
                       <a/> 

                      <a target="_blank" href="https://www.facebook.com/MKG-Homestyle-107021604801633/">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                        <i/>
                      <a/> 

                      <a target="_blank" href="https://www.instagram.com/mkghomestyle/">
                        <i>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><defs><radialGradient cx="69.445" cy="150.62542" r="160.88808" gradientUnits="userSpaceOnUse" id="color-1_Xy10Jcu1L2Su_gr1"><stop offset="0" stop-color="#ffdd55"></stop><stop offset="0.328" stop-color="#ff543f"></stop><stop offset="0.348" stop-color="#fc5245"></stop><stop offset="0.504" stop-color="#e64771"></stop><stop offset="0.643" stop-color="#d53e91"></stop><stop offset="0.761" stop-color="#cc39a4"></stop><stop offset="0.841" stop-color="#c837ab"></stop></radialGradient><radialGradient cx="42.23317" cy="19.85275" r="106.82992" gradientUnits="userSpaceOnUse" id="color-2_Xy10Jcu1L2Su_gr2"><stop offset="0" stop-color="#4168c9"></stop><stop offset="0.999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z" fill="url(#color-1_Xy10Jcu1L2Su_gr1)"></path><path d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z" fill="url(#color-2_Xy10Jcu1L2Su_gr2)"></path><path d="M86,111.08333c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333c13.82808,0 25.08333,11.25167 25.08333,25.08333c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM86,68.08333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667c0,9.87925 8.03742,17.91667 17.91667,17.91667c9.87925,0 17.91667,-8.03742 17.91667,-17.91667c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z" fill="#ffffff"></path><circle cx="31.5" cy="16.5" transform="scale(3.58333,3.58333)" r="1.5" fill="#ffffff"></circle><path d="M107.5,132.58333h-43c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333v-43c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333h43c13.82808,0 25.08333,11.25167 25.08333,25.08333v43c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM64.5,46.58333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667v43c0,9.87925 8.03742,17.91667 17.91667,17.91667h43c9.87925,0 17.91667,-8.03742 17.91667,-17.91667v-43c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z" fill="#ffffff"></path></g></g></svg>
                        <i/>
                      </a>

                      <a target="_blank" href="https://www.tiktok.com/@mkghomestyle?lang=es">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none" fill-rule="nonzero"></path><g fill-rule="evenodd"><path d="M39.07267,21.5h93.85108c9.70725,0 17.57625,7.869 17.57625,17.57267v93.85108c0,9.70725 -7.869,17.57625 -17.57267,17.57625h-93.85467c-9.70367,0 -17.57267,-7.869 -17.57267,-17.57267v-93.85467c0,-9.70367 7.869,-17.57267 17.57267,-17.57267z" fill="#212121"></path><path d="M104.662,73.84175c5.64733,4.03483 12.56675,6.407 20.038,6.407v-14.37275c-1.41542,0 -2.82367,-0.14692 -4.20683,-0.44075v11.31258c-7.47125,0 -14.38708,-2.37575 -20.038,-6.407v29.326c0,14.67017 -11.90025,26.56325 -26.57758,26.56325c-5.47533,0 -10.56725,-1.6555 -14.79558,-4.4935c4.82675,4.93067 11.55625,7.99083 19.00242,7.99083c14.67733,0 26.57758,-11.89308 26.57758,-26.56325v-29.32242zM109.85425,59.34358c-2.88458,-3.14975 -4.78017,-7.224 -5.19225,-11.72825v-1.849h-3.98825c1.00333,5.72258 4.429,10.61383 9.1805,13.57725zM68.36642,110.48133c-1.6125,-2.11417 -2.48325,-4.69775 -2.47967,-7.35658c0,-6.71158 5.44308,-12.15108 12.15825,-12.15108c1.25058,0 2.494,0.18992 3.68725,0.56975v-14.69167c-1.39392,-0.18992 -2.79858,-0.27233 -4.20683,-0.24367v11.43442c-1.19325,-0.37983 -2.43667,-0.56975 -3.69083,-0.56975c-6.71517,0 -12.15825,5.4395 -12.15825,12.15108c0.00358,4.74792 2.72333,8.858 6.69008,10.8575z" fill="#ec407a"></path><path d="M100.45517,70.34083c5.64733,4.03483 12.56675,6.407 20.038,6.407v-11.31258c-4.171,-0.88867 -7.86183,-3.06733 -10.63892,-6.09525c-4.7515,-2.96342 -8.17358,-7.85108 -9.17692,-13.57367h-10.47408v57.39783c-0.02508,6.69008 -5.45742,12.10808 -12.15825,12.10808c-3.94883,0 -7.45692,-1.88125 -9.67858,-4.7945c-3.96675,-1.9995 -6.6865,-6.10958 -6.6865,-10.85392c0,-6.71158 5.44308,-12.15108 12.15825,-12.15108c1.28642,0 2.52625,0.20067 3.69083,0.56975v-11.43083c-14.41933,0.29742 -26.015,12.07225 -26.015,26.55608c0,7.23117 2.88817,13.78508 7.57517,18.57242c4.22833,2.838 9.32025,4.4935 14.79558,4.4935c14.67733,0 26.57758,-11.89308 26.57758,-26.56325l-0.00717,-29.32958z" fill="#ffffff"></path><path d="M120.49317,65.43883v-3.06017c-3.7625,0.00717 -7.44617,-1.04633 -10.63892,-3.03867c2.82367,3.09242 6.54317,5.2245 10.63892,6.09883zM100.67375,45.76633c-0.09675,-0.54825 -0.16842,-1.0965 -0.21858,-1.65192v-1.849h-14.46233v57.40142c-0.0215,6.69008 -5.45742,12.10808 -12.15825,12.10808c-1.96725,0 -3.82342,-0.46583 -5.46817,-1.29717c2.22167,2.91325 5.72975,4.7945 9.67858,4.7945c6.70083,0 12.13317,-5.418 12.15825,-12.10808v-57.39783zM77.52542,76.61167v-3.25725c-1.20758,-0.16483 -2.42592,-0.24725 -3.64783,-0.24725c-14.68092,0 -26.57758,11.89308 -26.57758,26.56325c0,9.19842 4.67625,17.30392 11.782,22.06975c-4.687,-4.78733 -7.57517,-11.34125 -7.57517,-18.57242c0,-14.48383 11.59925,-26.25867 26.01858,-26.55608z" fill="#81d4fa"></path></g></g></svg>
                        <i/>
                      <a/>



                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2021 MKG HOMESTYLE, Todos los derechos reservados.
                    <a class="black-text text-lighten-4 right" href="#!"></a>
                </div>
            </div>
        </footer>
        <!--Importación de archivos JavaScript al final del cuerpo para una carga optimizada-->
        <script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
        <script type="text/javascript" src="../../resources/js/initialization.js"></script>
        <script type="text/javascript" src="../../app/controllers/public/'.$controller.'"></script>
    </body>
    </html>
 ');
}


}
?>