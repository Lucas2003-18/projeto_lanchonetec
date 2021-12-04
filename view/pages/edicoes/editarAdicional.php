<?php
require "../controller/clienteController.php";
require_once "./header.php";
?>

<body>
    <div class="container-fluid">
    <form action="../controller/ClienteController.php" method="post">
        <input type="hidden" name="edicao" value=<?php echo $edicao;?>>
        <label for="codigo">Código</label>
        <input type="number" class="form-control" id="codigo" name="codigo" value=<?php echo $codigo;?>>
        <label for="nome">Lanche</label>
        <input type="text" class="form-control" id="lanche" name="lanche" value=<?php echo $lanche;?>>
        <label for="endereco">Bebida</label>
        <input type="text" class="form-control" id="bebida" name="bebida" value=<?php echo $bebida;?>>
        <label for="telefone">Adicional</label>
        <input type="text" class="form-control" id="adicional" name="adicional" value=<?php echo $adicional;?>>
    
        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>
</div>
</body>

</html>