
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>  
    <h1> Cadastro de Filme</h1>
    <hr> 
    <form action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

    <label for="codigo">Código</label><br>
    <input type="text" name="codigo" id="codigo" value="<?php echo $produto ['codigo'] ?? ""; ?>"><br>
    <input type="hidden" name="id" id="id" value="<?php echo $produto ['idproduto'] ?? ""; ?>"><br>
    
    <label for="titulo">Título</label><br>
    <input type="text" name="titulo" id="titulo"> <?php echo $produto ['titulo'] ?? ""; ?><br><br>

    <label for="sinopse">Sinopse</label><br>
    <textarea type="text" name="sinopse" id="sinopse" value="<?php echo $produto ['sinopse'] ?? ""; ?>"></textarea> <br><br>

    <label for="anolacamento">Ano Lançamento</label><br>
    <input type="text" name="anolacamento" id="anolacamento" value="<?php echo $produto ['anolacamento'] ?? ""; ?>"> <br>
    <br>

    <label for="diretor">Diretor</label><br>
    <input type="text" name="diretor" id="diretor" value="<?php echo $produto ['diretor'] ?? ""; ?>"> <br>

    <br>

    <button type="submit"  class="btn btn-danger" >Cadastrar</button>

    </form>
    <?php require_once "../template/rodape.php"; ?>