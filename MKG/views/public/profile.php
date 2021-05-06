<?php
//Include header template 
include('../../app/helpers/public_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
Public_template::headerPublic('Bienvenido', '../../resources/css/public/profile.css');
?>

<!--Profile  <div> </div>-->
<div class="container">
    <div class="row">

        <div class="col s12 l12" id="lcard">

            <div class="card" id="cardProfile">

                <div class="card-action" id="IS">
                    <h3>Mi perfil</h3>
                </div>
               <!--Profile image --> 
                <img id="giss" src="../../resources/img/Nosotros/Giss.jpg">
                <div class="card-content row">
                    <div class="row">
                        <!--Profile data form-->
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_nombres" type="text" class="validate" value="Publico"
                                        placeholder="Nombres">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_apellidos" type="text" class="validate" value="Villalta"
                                        placeholder="Apellidos">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input id="icon_nombreuser" type="text" class="validate" value="gissavelar_"
                                        placeholder="Nombre Usuario">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">perm_contact_calendar</i>
                                    <input id="icon_fecha" type="date" class="validate" placeholder="Fecha Nacimiento">
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_correo" type="text" class="validate" value="avelar.giss03@gmail.com"
                                        placeholder="E-mail">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone_iphone</i>
                                    <input id="icon_telephone" type="text" class="validate" value="74828154"
                                        placeholder="Telefono">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contacts</i>
                                    <input id="icon_DUI" type="text" class="validate" value="001959533-9"
                                        placeholder="DUI">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_contra" type="password" class="validate" value="itr123456"
                                        placeholder="Contraseña">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_confirmarcontra" type="password" class="validate" value="itr123456"
                                        placeholder="Confirmar contraseña">
                                </div>
                            </div>
                        </form>
                    </div>
                     <!-- <a> save changes  action-->
                    <div class="form-field center">
                        <a class="waves-effect waves-light btn-large" href="" id="btnIS"><i class="material-icons left">
                                check_circle </i>Guardar Cambios</a>
                    </div><br>

                </div>

            </div>

        </div>

    </div>
</div>


<?php
//Include footer template 
public_template::footer_public('index_public.js');
?>