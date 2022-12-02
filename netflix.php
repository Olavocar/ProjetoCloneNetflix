<?php


//Calculadora simples em PHP

$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

if(isset($_GET['num1'],$_GET['num2'],$_GET['calcular'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET['calcular'];

    switch($calcular){
        case 'drama';
            $resultado = $num1 + $num2;
            break;
        case 'terror';
            $resultado = $num1 - $num2;
            break;    
        case 'romnce';
            $resultado = $num1 * $num2;
            break;
        case 'ação';
            $resultado = $num1 / $num2;
            break;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre dois números</title>
</head>
<style>
    .form{
        border-radius: 30px;
        background-color: #5CAAE6;
        margin-left: 350px;
        margin-right: 350px;
        text-align: center;
        justify-content: center;
        align-items:center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 30px;
        color: #DAF2E3;
    }

    .inputs {
        padding: 10px;
        border-radius: 10px;
    }
    .body{
        background-image: url("./filme nada de novo.jpg");
    }

</style>

<body class="body">
    <div class="form">
    <h3>Entrar</h3>
        
    <form>
        <input type="text" id="email ou num telefone" class="inputs" name="email ou num telefone" required/>
<br/>
<br/>
        <input type="number" id="num1" class="inputs" name="num2" required/>
        <br/>
<br/>
       <br />
            <br />
        <input type="submit" value="ENTRAR"/>
            <br />
            <br />
   
</form>
</div>
</body>
</html>