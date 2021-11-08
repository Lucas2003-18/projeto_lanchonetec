<!DOCTYPE html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap and CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css">
    <title>Página Inicial</title>
</head>
<body>

    <div class="container" style="width: 100000px; height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="img/img_exemplo.jpg" alt=="" width="30" height="24" class="d-inline-block align-text-top">
                  LanchoTec
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Novo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Fechar Pedido</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Salvar</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cadastros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Clientes</a></li>
                      <li><a class="dropdown-item" href="#">Bebidas</a></li>
                      <li><a class="dropdown-item" href="#">Lanches</a></li>
                      <li><a class="dropdown-item" href="#">Adicionais</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Relatórios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Pedido Atual</a></li>
                      <li><a class="dropdown-item" href="#">Todos Pedidos</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

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
      



    <!--Separate Popper and Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
