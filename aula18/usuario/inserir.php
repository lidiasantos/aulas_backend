<?php require_once "../controla_sessao/controla.php"; ?>
<?php
require_once "../conexao.php";

if(isset ($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"]))
{

    //SALVAR O ARWUIVO FOTO
    require_once "salvar_foto.php";

$nome = $_POST ["nome"];
$login =$_POST ["login"];
$senha = password_hash($_POST ["senha"],PASSWORD_DEFAULT);
$foto = $nome_arquivo;


$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`)
 VALUES (?, ?, ?, ?);";
echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssss", $nome,$login,$senha,$foto );

$comando->execute();
}
//abre o arquivo fotm.php
header("Location: index.php");