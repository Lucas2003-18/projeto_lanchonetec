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
        <label for="nome">tipo</label>
        <input type="text" class="form-control" id="tipo" name="tipo" value=<?php echo $tipo;?>>

        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>
</div>
</body>

</html>