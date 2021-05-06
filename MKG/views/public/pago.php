<?php
//Include header template
include('../../app/helpers/public_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
Public_template::headerPublic('Bienvenido', '../../resources/css/public/pago.css');
?>

<!--Payment    <div> </div>-->
<div class="container">
    <!--Logo Image -->
    <div class="row ">
        <div class="col s12 l4 offset-l4  ">
            <div class="card col s8 l8 offset-l2 offset-s2 ">
                <div class="card-image ">
                    <img src="../../resources/img/Logo/homestyle.png" alt="" class="circle">
                </div>
            </div>
        </div>
    </div>
    <!-- Payment data form-->
    <div class="row">
        <div class="col s12 l12  card-panel ">
            <div class="col s12 l8">
                <h5>Pago</h5>
                <div class="divider"></div>
                <div class="s12  ">
                    <form action="#">
                        <p>
                            Seleccione modo de pago
                        </p>
                        <!--Dario button Credit card-->
                        <label>
                            <input class="with-gap" name="group1" type="radio" checked />
                            <span>Tarjeta de credito </span>
                           <!--Url image-icon from iconss8--> 
                            <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <defs>
                                        <linearGradient x1="73.01042" y1="39.63525" x2="103.01367" y2="146.72317"
                                            gradientUnits="userSpaceOnUse" id="color-1_jGkTn3Ow7GL2_gr1">
                                            <stop offset="0" stop-color="#32bdef"></stop>
                                            <stop offset="1" stop-color="#cccccc"></stop>
                                        </linearGradient>
                                        <linearGradient x1="7.16667" y1="57.33333" x2="164.83333" y2="57.33333"
                                            gradientUnits="userSpaceOnUse" id="color-2_jGkTn3Ow7GL2_gr2">
                                            <stop offset="0" stop-color="#333333"></stop>
                                            <stop offset="1" stop-color="#6d7479"></stop>
                                        </linearGradient>
                                        <linearGradient x1="127.3015" y1="116.45833" x2="152.38483" y2="116.45833"
                                            gradientUnits="userSpaceOnUse" id="color-3_jGkTn3Ow7GL2_gr3">
                                            <stop offset="0" stop-color="#fede00"></stop>
                                            <stop offset="1" stop-color="#ffd000"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g>
                                            <path
                                                d="M154.53125,32.25h-137.0625c-5.69033,0 -10.30208,4.61175 -10.30208,10.30208v86.89583c0,5.69033 4.61175,10.30208 10.30208,10.30208h137.0625c5.69033,0 10.30208,-4.61175 10.30208,-10.30208v-86.89583c0,-5.69033 -4.61175,-10.30208 -10.30208,-10.30208z"
                                                fill="url(#color-1_jGkTn3Ow7GL2_gr1)"></path>
                                            <rect x="2" y="14" transform="scale(3.58333,3.58333)" width="44" height="4"
                                                fill="url(#color-2_jGkTn3Ow7GL2_gr2)"></rect>
                                            <path
                                                d="M150.5,86h-129c-1.978,0 -3.58333,-1.60533 -3.58333,-3.58333v-7.16667c0,-1.978 1.60533,-3.58333 3.58333,-3.58333h129c1.978,0 3.58333,1.60533 3.58333,3.58333v7.16667c0,1.978 -1.60533,3.58333 -3.58333,3.58333z"
                                                fill="#a8e7ff"></path>
                                            <circle cx="34.5" cy="32.5" transform="scale(3.58333,3.58333)" r="3.5"
                                                fill="#cf1928"></circle>
                                            <circle cx="39.026" cy="32.5" transform="scale(3.58333,3.58333)" r="3.5"
                                                fill="url(#color-3_jGkTn3Ow7GL2_gr3)"></circle>
                                            <path
                                                d="M127.3015,116.45833c0,3.83417 1.72358,7.25983 4.43258,9.56033c2.709,-2.3005 4.43258,-5.72617 4.43258,-9.56033c0,-3.83417 -1.72358,-7.25983 -4.43258,-9.56033c-2.709,2.3005 -4.43258,5.72617 -4.43258,9.56033z"
                                                fill="#d97218"></path>
                                        </g>
                                    </g>
                                </svg></span>
                        </label>
                        <!--Radio button Paypal-->
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Paypal</span>
                            <!--Url image-icon from iconss8--> 
                            <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g>
                                            <path
                                                d="M67.00833,49.33175l0.01792,0.00717c0.37267,-1.58742 1.72717,-2.75558 3.42208,-2.75558h48.27467c0.06092,0 0.12183,-0.02508 0.18275,-0.0215c-1.02842,-17.12475 -15.394,-25.06183 -28.06825,-25.06183h-48.27467c-1.6985,0 -3.053,1.20042 -3.42208,2.78425l-0.01792,-0.00717l-21.10225,96.88617l0.04658,0.00358c-0.05017,0.22933 -0.13975,0.44792 -0.13975,0.69517c0,1.98158 1.60175,3.55108 3.58333,3.55108h28.92108z"
                                                fill="#1565c0"></path>
                                            <path
                                                d="M118.90575,46.56183c0.18992,3.139 -0.01792,6.55392 -0.82058,10.32717c-4.59025,21.48208 -21.18467,32.66208 -41.69208,32.66208c0,0 -12.43417,0 -15.45492,0c-1.86692,0 -2.74842,1.0965 -3.15333,1.935l-6.235,28.84225l-1.09292,5.12058h-0.0215l-4.52575,20.769l0.04658,0.00358c-0.05017,0.22933 -0.13975,0.44792 -0.13975,0.69517c0,1.98158 1.60175,3.58333 3.58333,3.58333h26.27658l0.04658,-0.03583c1.69133,-0.02508 3.03508,-1.23267 3.38625,-2.82367l0.0645,-0.05375l6.493,-30.15733c0,0 0.4515,-2.87742 3.47583,-2.87742c3.02433,0 14.97117,0 14.97117,0c20.50742,0 37.27025,-11.12983 41.86408,-32.6155c5.16717,-24.22333 -12.11167,-35.28508 -27.07208,-35.37467z"
                                                fill="#039be5"></path>
                                            <path
                                                d="M70.44833,46.58333c-1.6985,0 -3.053,1.16817 -3.42208,2.75558l-0.01792,-0.00717l-9.22708,42.15792c0.40492,-0.8385 1.28642,-1.935 3.15333,-1.935c3.02433,0 15.17542,0 15.17542,0c20.50742,0 37.38133,-11.18 41.97158,-32.66208c0.80625,-3.77325 1.0105,-7.18817 0.82058,-10.32717c-0.05733,-0.00717 -0.12183,0.01792 -0.17917,0.01792z"
                                                fill="#283593"></path>
                                        </g>
                                    </g>
                                </svg> </span>
                        </label>
                    </form> 
                    <!--Data credit card form-->
                    <div class="row">
                        <div class="input-field col s12 l4">
                            <input id="first_name2" type="text">
                            <label class="active" for="first_name2">Numero de Tarjeta</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l4">
                            <input id="first_name2" type="text">
                            <label class="active" for="first_name2">Fecha caducidad MM/YY</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l4">
                            <input id="first_name2" type="text">
                            <label class="active" for="first_name2">Codigo de seguridad</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col s12 l4">
            <!--cart listing-->
                <div class="col s12 l12 ">
                    <h5 class="header"></h5>
                    <hr>
                    <div class="card horizontal">
                        <div class="card-image" id="articulo">
                            <img src="../../resources/img/cards/articulo2.jfif">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <strong>
                                    <p>Lamp. mesa niquel satinado 1l e27 40w</p>
                                </strong>
                                <p>Cantidad:2</p>
                                <hr>
                                <p>Precio:$30.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card horizontal">
                        <div class="card-image" id="articulo">
                            <img src="../../resources/img/cards/articulo1.jfif">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <strong>
                                    <p>Africana decor 11x12x41cm</p>
                                </strong>
                                <p>Cantidad:1</p>
                                <hr>
                                <p>Precio:$26.99</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--Label total purchase sample-->
                <label class="gray-text flow-text">Total: $86.99 </label>
            </div>
            <div class="col s12 l12 offset-l5 offset-s4" id="Pago">
                <!--Button execute  transaction-->
                <button class="btn waves-effect waves-light" id="btn_style" type="submit" name="action">&nbsp;&nbsp;
                    Pagar &nbsp;&nbsp;
                </button>
            </div>
        </div>

    </div>
</div>


<?php
//Iclude footer template
public_template::footer_public('pago.js');
?>