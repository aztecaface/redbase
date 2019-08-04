ini_set ( ' error_reporting ' , 0 );
if ( isset ( $ _SESSION [ ' usuario ' ]))
{
  encabezado ( " Ubicación: index.php " );
}
? >
<! DOCTYPE html>
< html >
< cabeza >
  < meta  charset = " utf-8 " >
  < Meta  http-equiv = " X-UA-Compatible "  contenido = " IE = borde " >
  < title > <? php // nombre red social ? > Registro </ título > 
  <! - Indica al navegador que responda al ancho de la pantalla ->
  < meta  contenido = " ancho = ancho del dispositivo, escala inicial = 1, escala máxima = 1, escalable por el usuario = no "  nombre = " ventana gráfica " >
  <! - Bootstrap 3.3.6 ->
  < link  rel = " hoja de estilo "  href = " bootstrap / css / bootstrap.min.css " >
  <! - Fuente impresionante ->
  < link  rel = " hoja de estilo "  href = " https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css " >
  <! - Ionicons ->
  < link  rel = " hoja de estilo "  href = " https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css " >
  <! - Estilo del tema ->
  < link  rel = " hoja de estilo "  href = " dist / css / AdminLTE.min.css " >
  <! - iCheck ->
  < link  rel = " hoja de estilo "  href = " plugins / iCheck / square / blue.css " >

  <! - Compatibilidad con HTML5 Shim y Respond.js IE8 de elementos HTML5 y consultas de medios ->
  <! - ADVERTENCIA: Respond.js no funciona si ve la página a través del archivo: // ->
  <! - [si lt IE 9]>
  <script src = "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"> </script>
  <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"> </script>
  <! [endif] ->
</ cabeza >
< body  class = " espera-registro registro-página " >
< div  class = " register-box " >
  < div  class = " register-logo " >
    < Un  href = " " > < b > RED </ b > SOCIAL </ una >
  </ div >

  < div  class = " register-box-body " >
    < p  class = " login-box-msg " > Regístrate en REDSOCIAL </ p >

    < form  action = " "  method = " post " >
      < div  class = " form-group has-feedback " >
        < input  type = " text "  name = " nombre "  class = " form-control "  placeholder = " Nombre completo "  value = " <? php echo $ _POST [ ' nombre ' ]; ? > "    required >
        < span  class = " glyphicon glyphicon-star form-control-feedback " > </ span >
      </ div >
      < div  class = " form-group has-feedback " >
        < input  type = " email "  name = " email "  class = " form-control "  placeholder = " Email "  value = " <? php echo $ _POST [ ' email ' ]; ? > "    required >  
        < span  class = " glyphicon glyphicon-envolvente-control-feedback " > </ span >
      </ div >
      < div  class = " form-group has-feedback " >
        < input  type = " text "  name = " usuario "  class = " form-control "  placeholder = " Usuario "  value = " <? php echo $ _POST [ ' usuario ' ]; ? > "    required >
        < span  class = " glyphicon glyphicon-user form-control-feedback " > </ span >
      </ div >
      < div  class = " form-group has-feedback " >
        < input  type = " password "  name = " contrasena "  class = " form-control "  placeholder = " Contraseña "  required >
        < span  class = " glyphicon glyphicon-lock form-control-feedback " > </ span >
      </ div >
      < div  class = " form-group has-feedback " >
        < input  type = " password "  name = " repcontrasena "  class = " form-control "  placeholder = " Repita la contraseña "  requerido >
        < span  class = " glyphicon glyphicon-log-in form-control-feedback " > </ span >
      </ div >
      < div  class = " row " >
        < div  class = " col-xs-10 " >
          < div  class = " checkbox icheck " >
            < etiqueta >
              < Entrada  tipo = " casilla de verificación "  nombre = " comprobar "  requerido > Acepto los < un  href = " # " > Términos Condiciones Y </ una >
            </ label >
          </ div >
        </ div >
        <! - /.col ->
        < div  class = " col-xs-12 " >
          < button  type = " submit "  name = " registrar "  class = " btn btn-primary btn-block btn-flat " > Registrarme </ button >
        </ div >
        <! - /.col ->
      </ div >
    </ form >


    <? php
    si ( isset ( $ _POST [ ' registro ' ])) {
      $ nombre  =  mysql_real_escape_string ( $ _POST [ ' nombre ' ]);
      $ email  =  mysql_real_escape_string ( $ _POST [ ' email ' ]);
      $ usuario  =  mysql_real_escape_string ( $ _POST [ ' usuario ' ]);
      $ contrasena  =  mysql_real_escape_string ( md5 ( $ _POST [ ' contrasena ' ]));
      $ repcontrasena  =  mysql_real_escape_string ( md5 ( $ _POST [ ' repcontrasena ' ]));
      $ verificarusuario  =  mysql_num_rows ( mysql_query ( " SELECCIONAR usuario DE LOS usuarios DONDE usuario =  ' $ usuario ' " ));
      $ enviaremail  =  mysql_num_rows ( mysql_query ( " SELECCIONE correo electrónico DE los usuarios DONDE correo electrónico =  ' $ correo electrónico ' " ));
      si ( $ verificarusuario  > =  1 ) { ? >

      < Br >
      < div  class = " alerta alerta-peligro alerta-descartable " >
        < button  type = " button "  class = " close "  data-dismiss = " alert "  aria-hidden = " true " > & times ; </ botón >
        El nombre de usuario está en uso, por favor escoja otro
     </ div >

     <? php } else {
        si ( $ enviaremail  > =  1 ) { ? >

        < Br >
        < div  class = " alerta alerta-peligro alerta-descartable " >
          < button  type = " button "  class = " close "  data-dismiss = " alert "  aria-hidden = " true " > & times ; </ botón >
          El correo electrónico ya está en uso por favor escoja otro o verifique si tiene una cuenta
        </ div >

        <? php } else {
          if ( $ contrasena  ! =  $ repcontrasena ) { ? >

          < Br >
          < div  class = " alerta alerta-peligro alerta-descartable " >
            < button  type = " button "  class = " close "  data-dismiss = " alert "  aria-hidden = " true " > & times ; </ botón >
            Las contraseñas no coinciden.
          </ div >

          <? php } else {
            $ insertar  =  mysql_query ( " INSERT INTO usuarios (nombre, correo electrónico, usuario, contrasena, fecha_reg) valores ( ' $ nombre ' , ' $ correo electrónico ' , ' $ usuario ' , ' $ contrasena ' , ahora ()) " );
            if ( $ insertar ) { ? >

            < Br >
            < div  class = " alerta alerta-éxito alerta-descartable " >
              < button  type = " button "  class = " close "  data-dismiss = " alert "  aria-hidden = " true " > & times ; </ botón >
              Felicidades se ha registrado correctamente
            </ div >

            <? php
            encabezado ( " Actualizar: 2; url = login.php " );
            }
          }
        }
      }
    }
    ? >

    < Br >
    < Un  href = " login.php "  clase = " text-centro " > Tengo ACTUALMENTE Una Cuenta </ una >
  </ div >
  <! - /.form-box ->
</ div >
<! - /.register-box ->

<! - jQuery 2.2.3 ->
< script  src = " plugins / jQuery / jquery-2.2.3.min.js " > </ script >
<! - Bootstrap 3.3.6 ->
< script  src = " bootstrap / js / bootstrap.min.js " > </ script >
<! - iCheck ->
< script  src = " plugins / iCheck / icheck.min.js " > </ script >
< script >
  $ ( function () {
    $ ( ' entrada ' ). iCheck ({
      checkboxClass :  ' icheckbox_square-blue ' ,
      radioClase :  ' iradio_square-blue ' ,
      increaseArea :  ' 20% '  // opcional
    });
  });
</ script >
</ cuerpo >
</ html >
