<?php
//Include header template
include('../../app/helpers/log_template.php');
//Se especifica el nombre que tendra el titulo y  la ruta del documento css de la pagina
log_template::login('Login', '../../resources/css/public/recuperar_contraseña.css');
?>

<!--Recover password   <div> </div>-->
<div class="container">
    <div class="row">
        <div class="col s12 l12" id="lcard">
            <div class="card col 14 offset-l4" id="cardlogin">
                <div class="card-action" id="IS">
                    <h3>Recuperar Contraseña</h3>

                </div>
                <!--input for  email -->
                <div class="input-field">
                    <i class="material-icons prefix">perm_contact_calendar</i>
                    <input id="icon_prefix" type="text" class="validate" placeholder="Direccion de Correo Electronico">
                </div>

                <div class="form-field center">
                    <a class="waves-effect waves-light btn-large" href="" id="btnIS"><i class="material-icons left">
                            check_circle </i>Comenzar</a>
                </div><br>
                <!--Send to login-->
                <div class="registrarme center">
                    <a href="login.php" id="register">Regresar a Iniciar Sesión</a>
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