<?php
   include 'cabecalho.php'
?>
<body>
    <div class="container ">
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do Produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3 form-check">
                <input type="text"name="estoque" placeholder="Digite a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
       </form>
    </div>     


<?php
   include 'pontape.php'
?>
</html>