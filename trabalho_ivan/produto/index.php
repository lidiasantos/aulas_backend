<?php require_once "../produto/consultar_todos.php";
 require_once "../template/cabecalho.php";

?>


    <div class="container">
    <h1>Filmes</h1>
    <hr>
   

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Filme</a>
   </div>
   <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Título</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Ano Lançamento</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>

<?php foreach($filmes as $filme){ ?>

      <th scope="row"><?php echo $filme ['codigo'];?></th>
      <td><?php echo $filme ['titulo'];?></td>
      <td><?php echo $filme ['sinopse'];?></td>
      <td><?php echo $filme ['ano_lancamento'];?></td>
      <td><?php echo $filme ['diretor'];?></td>
      <td>
        <a href="excluir.php?id=<?php echo $filme ['codigo']; ?>" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i>Excluir</a>
        <a href="form.php?id=<?php echo $filme ['codigo']; ?>"  class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
 </div>
 <?php require_once "../template/rodape.php"; ?>