<?php
//include header log template
include('../../app/helpers/log_template.php');

log_template::login('Login', '../../resources/css/public/login.css');
?>

<!--Login   <div> </div>-->
<div class="container">
    <div class="row">
        <div class="col s12 l12" id="lcard">
            <div class="card col 14 offset-l4" id="cardlogin">
                <div class="card-action" id="IS">
                    <h3>Iniciar sesión</h3>

                </div>
                <div class="card-content">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" placeholder="Nombre de usuario">
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_prefix" type="password" class="validate" placeholder="Contraseña de usuario">
                    </div>

                    <div class="form-field center">
                        <a class="waves-effect waves-light btn-large" href="index.php" id="btnIS"><i
                                class="material-icons left">
                                check_circle </i>Iniciar sesión</a>
                    </div><br>

                    <div class="contraseña center">
                    <!--cambiar nombre del archivo sin la Ñ -->
                        <a href="recuperar_contraseña.php" id="contra">¿Olvidaste tu contraseña?</a>
                    </div><br>

                    <div class="registrarme center">
                        <a href="register.php" id="register">¿No tienes una cuenta? Regístrate</a>
                    </div><br>

                </div>

            </div>

        </div>

    </div>
</div>
<?php
//Include footer log template
log_template::footerDashboard();
?>