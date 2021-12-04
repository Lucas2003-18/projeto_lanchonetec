<?php

include "../../header.php";
require_once '../../shared/navbar.php';
//include "../modals/modalCliente.php";
require "../../../controller/bebidaController.php";


?>
<body class="container-fluid">

<h1> Cadastro de Bebida</h1>

<button type="button" class="btn btn-outline-primary" 
data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($objcli = $dados->fetch_object()){    
    ?> 
    <tr>
      <th scope="row"><?php echo $objcli->codigo;?></th>
      <td><?php echo $objcli->nome;?></td>
      <td><?php echo $objcli->tipo;?></td>
      <td> 
      <a href="editarBebida.php?id=<?php echo $objcli->codigo?>&acao=editar">  
      <i class="bi bi-pencil-square"></i></a> 
        
      <!-- <button location.href="#">Exemplo</button> -->
      <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir esta bebida?'))location.href='../controller/bebidaController.php?id=<?php echo $objcli->codigo ?>&acao=excluir'">
      <i class="bi bi-trash"></i> </a> 
    </td>
    </tr>
    <?php }?>
  </tbody>
</table>


</div>

</body>
<?php

require_once './footer.php';

?>