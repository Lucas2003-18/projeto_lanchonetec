<?php

include "../../header.php";
require "../../shared/navbar.php";
include "../modals/modalCliente.php";
require_once "../../../controller/ClienteController.php";

?>
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
          $objCliente = ClienteController();
          $dados = call_user_func(array('ClienteController','listarClientes'));
          if(isset($dados) && !empty($dados)){
            foreach($dados as $dado){
              ?>
              <tr>
                <th scope="row"><?php echo $dado->codigo;?></th>
                <td><?php echo $dado->nome;?></td>
                <td><?php echo $dado->endereco;?></td>
                <td><?php echo $dado->telefone;?></td>
                <td> 
                <a href="editarCliente.php?id=<?php echo $dado->codigo?>&acao=editar">  
                <i class="bi bi-pencil-square"></i></a> 
                
                <!-- <button location.href="#">Exemplo</button> -->
                <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este cliente?'))location.href='../controller/clienteController.php?id=<?php echo $dado->codigo; ?>&acao=excluir'">
                <i class="bi bi-trash"></i> </a> 
              </td>
              </tr>
              <?php
            }
          } 
      ?>
    </tbody>
  </table>
</div>
</body>

<?php

require_once './footer.php';

?>