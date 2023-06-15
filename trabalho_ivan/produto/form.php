
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>  
    <h1> Cadastro de Filme</h1>
    <hr> 
    <form action="<?php echo isset($filme) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >
    
    <label for="titulo">Título</label><br>
    <input type="text" name="titulo" id="titulo"> <?php echo $filme ['titulo'] ?? ""; ?><br><br>

    <input type="hidden" name="codigo" id="codigo" value="<?php echo $filme ['codigo'] ?? ""; ?>"><br>

    <label for="sinopse">Sinopse</label><br>
    <textarea type="text" name="sinopse" id="sinopse" value="<?php echo $filme ['sinopse'] ?? ""; ?>"></textarea> <br><br>

    <label for="ano_lancamento">Ano Lançamento</label><br>
    <input type="text" name="ano_lancamento" id="ano_lancamento" value="<?php echo $filme ['ano_lancamento'] ?? ""; ?>"> <br>
    <br>

    <label for="diretor">Diretor</label><br>
    <input type="text" name="diretor" id="diretor" value="<?php echo $filme ['diretor'] ?? ""; ?>"> <br>

    <br>

    <button type="submit"  class="btn btn-danger" >Cadastrar</button>

    </form>
    <?php require_once "../template/rodape.php"; ?>