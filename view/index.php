<?php 
session_start();
//head da página
require_once 'header.php';

$navbar = require_once './view/shared/navbar.php';
?>

 

        <div class="row">
            <div class="col-md-8" style="background-color:blue;">
                <div class="row">dados</div>
                <div class="row">
                    <div class="col-md-8" style="background-color:blueviolet;">tipos de lanches</div>
                    <div class="col" style="background-color: aqua;">adicionais</div>
                </div>
                <div class="row">
                    <div class="col-md-8" style="background-color:blueviolet;">
                        <div class="row">
                            <div class="col" style="background-color:blue;">bebida</div>
                            <div class="col" style="background-color: red;">bebida gelada</div>
                        </div>
                        <div class="row" style="background-color: brown;">tipos de bebidas</div>
                        <div class="row" style="background-color: blue;">Data do pedido</div>  
                    </div>
                    <div class="col" style="background-color: purple;">adicionais</div>
                </div>
                <div class="row" style="background-color: blueviolet;">Observaçoes</div>
            </div>



            <div class="col" style="background-color: red;">pedido</div>
        </div>
    </div>
      
<?php //footer da página
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $url_atual;
require_once 'footer.php';
?>