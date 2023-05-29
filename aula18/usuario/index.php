
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
    <div class="container">
    <h1>Usuarios</h1>
    <hr>
   

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Usuarios</a>
   </div>
   <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Foto</th>
      <th scope="col" width="20%">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>

<?php foreach($usuarios as $usuario){ ?>

      <th scope="row"><?php echo $usuario ['nome'];?></th>
      <td><?php echo $usuario ['login'];?></td>
      <td><img src="../uploads/<?php echo $usuario ['foto'];?>" height="35px" alt=""></td>
      <td class="text-end">
        <a href="excluir.php?id=<?php echo $usuario ['idusuario']; ?>" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i>Excluir</a>
        <a href="form.php?id=<?php echo $usuario ['idusuario']; ?>"  class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
 </div>


 <?php require_once "../template/rodape.php"; ?>