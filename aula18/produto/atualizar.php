  <?php
require_once "../conexao.php";

if(isset ($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{

  require_once "salvar_foto.php";
$id = $_POST ["id"];
$nome = $_POST ["nome"];
$descricao =$_POST ["descricao"];
$preco =$_POST ["preco"];
$foto = $nome_arquivo;


$sql = "UPDATE produto SET
 `nome`=?, `descricao`=?, `preco`=?, `foto`=? WHERE  `idproduto`=?";
echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssdsi", $nome,$descricao, $preco,$foto, $id);

$comando->execute();
}
//abre o arquivo fotm.php
header("Location: index.php");