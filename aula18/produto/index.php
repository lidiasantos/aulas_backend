<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";

?>


    <div class="container">
    <h1>Produtos</h1>
    <hr>
   

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Produto</a>
   </div>
   <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>

<?php foreach($produtos as $produto){ ?>

      <th scope="row"><?php echo $produto ['nome'];?></th>
      <td><?php echo $produto ['preco'];?></td>
      <td><img src="../uploads/<?php echo $produto ['foto'];?>" height="35px" alt=""></td>
      <td>
        <a href="excluir.php?id=<?php echo $produto ['idproduto']; ?>" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i>Excluir</a>
        <a href="form.php?id=<?php echo $produto ['idproduto']; ?>"  class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
 </div>
 <?php require_once "../template/rodape.php"; ?>