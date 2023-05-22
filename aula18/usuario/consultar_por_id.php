<?php
require_once "../conexao.php";

if(isset($_GET['id']))
{
//pega o valor do id que foi enviado pela IRL
$id = $_GET['id'];

$sql = "SELECT * FROM `usuario` WHERE  `idusuario`=?;";

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();

//pergar o resultado a consuçlta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$usuario = $resultado->fetch_assoc();

}
