  <?php
require_once "../conexao.php";

if(isset ($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"]))
{

    //SALVAR O ARWUIVO FOTO
    require_once "salvar_foto.php";
$id = $_POST["id"];
$nome = $_POST ["nome"];
$login =$_POST ["login"];
$senha = password_hash($_POST ["senha"],PASSWORD_DEFAULT);
$foto = $nome_arquivo;


$sql = "UPDATE usuario SET
 `nome`=?, `login`=?, `senha`=?, `foto`=? WHERE  `idusuario`=?";
echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssssi", $nome,$login, $senha,$foto, $id);

$comando->execute();
}
//abre o arquivo fotm.php
header("Location: usuario.php");