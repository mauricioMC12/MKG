<?php
//Se incluye la plantilla del encabezado para la página web
include('../../app/helpers/log_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
log_template::login('Login', '../../resources/css/public/register.css');
?>

<!--Creat account   <div> </div>-->

<div class="container">
    <div class="row">

        <div class="col s12 l12" id="lcard">
            <div class="card col 14 offset-l4" id="cardlogin">
                <div class="card-action" id="IS">
                    <h3>Crear Cuenta</h3>

                </div>
                  <!--Data input form -->
                <div class="card-content row">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate" placeholder="Nombres">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_telephone" type="text" class="validate" placeholder="Apellidos">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">person_outline</i>
                                    <input id="icon_telephone" type="text" class="validate"
                                        placeholder="Nombre Usuario">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">perm_contact_calendar</i>
                                    <input id="icon_telephone" type="date" class="validate"
                                        placeholder="Fecha Nacimiento">
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_telephone" type="text" class="validate" placeholder="E-mail">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone_iphone</i>
                                    <input id="icon_telephone" type="text" class="validate" placeholder="Telefono">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contacts</i>
                                    <input id="icon_telephone" type="text" class="validate" placeholder="DUI">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_telephone" type="password" class="validate"
                                        placeholder="Contraseña">
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_telephone" type="password" class="validate"
                                        placeholder="Confirmar contraseña">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Button register user -->
                    <div class="form-field center">
                        <a class="waves-effect waves-light btn-large" href="" id="btnIS"><i class="material-icons left">
                                check_circle </i>Registrarse</a>
                    </div><br>
                     <!--Button send to login -->
                    <div class="registrarme center">
                        <a href="login.php" id="register">¿Ya tienes una cuenta? Inicia Sesión</a>
                    </div><br>

                </div>

            </div>

        </div>

    </div>
</div>

<?php
//Include footer template 
log_template::footerDashboard();
?>