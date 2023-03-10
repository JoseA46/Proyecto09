<!--hola a todos --> 
<!-- otra ves-->
<?php

use  PHPMailer \ PHPMailer \ PHPMailer ;


$ connect = mysqli_connect( 'localhost' , 'usb' , 'usb2022' , 'formulatio' );

$ correo electrónico = isset ( $ _POST [ 'correo electrónico' ]) ? $ _POST [ 'correo' ] : '' ;
$ mensaje = isset ( $ _POST [ 'mensaje' ]) ? $ _POST [ 'mensaje' ]: '' ;

$ correo_error = '' ;
$ mensaje_error = '' ;

si (cuenta ( $ _POST ))
{
    $ errores = 0 ;

    si ( $ _POST [ 'correo' ] == '' )
    {
        $ email_error = 'Ingrese una dirección de correo electrónico' ;
        $ errores ++;
    }

    if ( $ _POST [ 'mensaje' ] == '' )
    {
        $ message_error = 'Por favor ingrese un mensaje' ;
        $ errores ++;
    }

    si ( $ errores == 0 )
    {

        $ consulta = 'INSERTAR EN contacto (
                correo electrónico,
                mensaje
            ) VALORES (
                "' .addslashes ( $ _POST [ 'correo electrónico' ]). '",
                "' .addslashes ( $ _POST [ 'mensaje' ]). '"
            )' ;
        mysqli_query ( $ conectar , $ consulta );

        $ mensaje = 'Ha recibido un envío de formulario de contacto:
            
Correo electrónico: ' . $ _POST [ 'correo electrónico' ]. '
Mensaje: ' . $ _POST [ 'correo' ];

        mail( 'poveda.geovanny@hotmail.com' ,
            'Formulario de contacto Cubmission' ,
            $ mensaje );

        header( 'Ubicación: gracias.html' );
        morir();

    }
}

?>
<!doctype html >
<html> _ _
    < cabeza >
        < título > Formulario de contacto de PHP </ título >
    </ cabeza >
    < cuerpo >
    
        < h1 > Formulario de contacto de PHP </ h1 >

        < método de formulario  =" publicación " acción ="" >
        
            Dirección de correo electrónico:
            < br >
            < tipo de entrada  =" texto " nombre =" correo electrónico " valor =" <?php echo $ correo electrónico ; ?> " >  
            <?php  echo  $ correo_error ; ?>

            < br > < br >

            Mensaje:
            < br >
            < textarea  name =" mensaje " > <?php  echo  $ mensaje ; ?> </ área de texto >
            <?php  echo  $ mensaje_error ; ?>

            < br > < br >

            < tipo de entrada  =" enviar " valor =" Enviar " >
        
        </ formulario >
    
    </ cuerpo >
</html> _ _
