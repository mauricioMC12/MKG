<?php

    class log_template{
        public static function login($title, $path){
            print('
        <!DOCTYPE html>
        <html lang="es">
        
        <head>
            <!--Se establece la codificación de caracteres para el documento-->
            <meta charset="utf-8">
            <!--Se importa la fuente de iconos de Google-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Se importan los archivos CSS locales-->
            <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css" />
            <link type="text/css" rel="stylesheet" href="../../resources/css/styles.css" />
            <link type="text/css" rel="stylesheet" href="'.$path.'" />   
            <!--Se informa al navegador que el sitio web está optimizado para dispositivos móviles-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!--Título del documento-->
            <title>Dashboard - '.$title. '</title>
        </head>
        <body  class="amber lighten-3">
                <!--Encabezado del documento-->
                
                <!--Contenido principal del documento-->
                <main>     
    ' );

        }
        public static function footerDashboard(){
            print('
               </main>
 
                   <!--Importación de archivos JavaScript al final del cuerpo para una carga optimizada-->
                   
                   <script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
               </body>
               </html>
            ');
           }

    }

?>