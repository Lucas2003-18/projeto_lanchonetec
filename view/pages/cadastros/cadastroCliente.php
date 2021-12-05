<?php

include "../../header.php";
require "../../shared/navbar.php";
include "../modals/modalCliente.php";
require "../../../controller/clienteController.php";

?>
<!--nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Lanchotec</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Novo <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fechar Pedidio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Salvar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./pages/cadastros/cadastroCliente.php">Clientes</a>
          <a class="dropdown-item" href="../pages/cadastros/cadastroBebidas.php">Bebidas</a>
          <a class="dropdown-item" href="../pages/cadastros/cadastroLanches.php">Lanches</a>
          <a class="dropdown-item" href="../pages/cadastros/cadastroAdicionais.php">Adicionais</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Pedido Atual</a>
          <a class="dropdown-item" href="#">Todos Pedidos</a>
        </div>
      </li>
    </ul>
  </div>
</nav-->
<div class="container" style="margin-left:3vw; margin-right:3vw;">
  <h1> Cadastro de Cliente</h1>

  <button type="button" class="btn btn-outline-primary" 
  data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
  <div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php 
          $objCliente = Cliente();
          $dados = $objCliente->listarTodos();
          while(){   
      ?> 
      <tr>
        <th scope="row"><?php echo $objcli->codigo;?></th>
        <td><?php echo $objcli->nome;?></td>
        <td><?php echo $objcli->endereco;?></td>
        <td><?php echo $objcli->telefone;?></td>
        <td> 
        <a href="editarCliente.php?id=<?php echo $objcli->codigo?>&acao=editar">  
        <i class="bi bi-pencil-square"></i></a> 
        
        <!-- <button location.href="#">Exemplo</button> -->
        <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este cliente?'))location.href='../controller/clienteController.php?id=<?php echo $objcli->codigo ?>&acao=excluir'">
        <i class="bi bi-trash"></i> </a> 
      </td>
      </tr>
      <?php }?>
    </tbody>
  </table>


  </div>
</div>
</body>
<?php

require_once './footer.php';

?>