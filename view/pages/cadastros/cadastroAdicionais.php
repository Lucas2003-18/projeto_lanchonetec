<?php

include "../../header.php";
require_once '../../shared/navbar.php';
//include "../modals/modalCliente.php";
require "../../../controller/adicionalController.php";


?>
<body class="container-fluid">

<h1> Cadastro de Adicionais</h1>

<button type="button" class="btn btn-outline-primary" 
data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Lanche</th>
      <th scope="col">Bebida</th>
      <th scope="col">Adicional</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($objcli = $dados->fetch_object()){    
    ?> 
    <tr>
      <th scope="row"><?php echo $objcli->codigo;?></th>
      <td><?php echo $objcli->lanche;?></td>
      <td><?php echo $objcli->bebida;?></td>
      <td><?php echo $objcli->adicional;?></td>
      <td> 
      <a href="editarAdicional.php?id=<?php echo $objcli->codigo?>&acao=editar">  
      <i class="bi bi-pencil-square"></i></a> 
        
      <!-- <button location.href="#">Exemplo</button> -->
      <a href="#" onclick="javascript: if (confirm('Você realmente deseja excluir este adicional?'))location.href='../controller/adicionalController.php?id=<?php echo $objcli->codigo ?>&acao=excluir'">
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