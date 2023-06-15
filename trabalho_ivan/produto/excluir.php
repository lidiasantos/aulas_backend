
<?php
require_once "../conexao.php";

if(isset($_GET['codigo']))
{
//pega o valor do id que foi enviado pela IRL
$id = $_GET['codigo'];


$sql = "DELETE FROM `filmes` WHERE  `codigo`=?;";


$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();

}
//abre o arquivo fotm.php
header("Location: index.php");