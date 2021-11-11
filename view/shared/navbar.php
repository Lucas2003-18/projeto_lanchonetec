<div class="container" style="width: 100000px; height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="../img/img_exemplo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
            <?php
            if(isset($_SESSION['logged']) != true){
                ?>
                <form action="?action=signin" method="post">
                    <button class="btn btn-outline-success mx-1" type="submit">Sign In</button>
                </form>
                <form action="?action=signup" method="post">
                    <button class="btn btn-outline-primary mx-1" type="submit">Sign Up</button>
                </form>
                <?php
            }
            if(isset($_SESSION['logged']) == true){
                ?>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="?page=profile" class="dropdown-item">Profile</a>
                            <a href="?action=quit" class="dropdown-item">Log out</a>    
                        </div>
                    </li>
                </ul>
                
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<?php
    if(isset($_SESSION['logged']) == true){
?>
<nav class="navbar-expand-lg navbar-primary bg-primary text-white">
    <div class="container">
        <div class="d-flex wrap justify-content-around">
                <ul class="navbar-nav d-flex">
                    <li class="nav-item">
                        <a href="?action=create_board" class="nav-link text-white">Create a Board</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="toolbarDropdownT" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Teams
                        </a>
                        <div class="dropdown-menu" aria-labelledby="toolbarDropdownT">
                            <a href="?action=create_team" class="dropdown-item">Create</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-item disabled">Your teams</div>
                            <div class="dropdown-divider"></div>
                            <?php
                                $teams = call_user_func(array('TeamController','listTeamsUser'),$_SESSION['id']);
                                if(isset($teams) && !empty($teams)){
                                    foreach($teams as $team){
                            ?>
                            <a href="?page=team&team_id=<?php echo $team->getId(); ?>" class="dropdown-item"><?php echo $team->getName(); ?></a>   
                            <?php
                                    }
                                }
                            ?> 
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</nav>
<?php
}
    

?>