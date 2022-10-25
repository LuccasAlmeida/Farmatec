<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Link para o plugin de máscara JQuery -->
 			
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/ui-lightness/jquery-ui.css" /> 
		<script src="http://code.jquery.com/jquery-1.8.3.js"></script> 
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
        
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <!---Fontawesome CDN Link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!----Custom CSS Filw Link--->
        
    <link rel="stylesheet" type="text/css" href="../css/styleCad.css">
    <script type="text/javascript" src="../js/ValidaForm.js"></script>


    <title>FarmaTec</title>
    <style>
      h7 {
        color: white;
      }
    </style>
</head>
<body>
<nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
             </label>
            <label class="logo"><a class="aa" href="index.php">FarmaTec</a></label>
            <ul>  
            <li>
            
            </li>
            </ul>
        </nav>
    
      <div id="formulario"> 

      <section class="container">

      <form class="" action="/farmatec/controllers/testTrocasenha.php" method="POST">
        <h1>Trocar Senha</h1>
        <input class="input1" type="text" id="txtnome" name="txtnome" placeholder="Nome">
        <br><br>
        <input class="input1" type="email" id="txtemail" name="txtemail" placeholder="E-mail cadastrado">
        <br><br>
        <input class="input1" type="password" id="txtsenha" name="txtsenha" placeholder="Digite sua Senha">
        <br><br>
        <input class="input1" type="password" id="txtsenhanova" name="txtsenhanova" placeholder="Nova Senha">
        <br><br>
        <input class="registerbtn" type="submit" name="submit"></input>
        <br>
        </p>
        </form>

      <span id="Resultado" class="pop"></span>
        <div id="dialog" title="Atenção">
        <p id="Mensagem"></p>
        </div>
    </section>

</div>

</body>
</html>