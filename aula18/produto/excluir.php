<?php
require_once "../conexao.php";

if(isset($_GET['id']))
{
//pega o valor do id que foi enviado pela IRL
$id = $_GET['id'];


$sql = "DELETE FROM `produto` WHERE  `idproduto`=?;";


$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();


}
//abre o arquivo fotm.php
header("Location: index.php");