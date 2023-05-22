<?php
require_once "../conexao.php";


$sql = "SELECT * FROM `usuario` ";

$comando = $conexao->prepare($sql);

$comando->execute();

//pergar o resultado a consuçlta
$resultado = $comando->get_result();

//cria um vetor vazio
$usuarios = [];

//pegar a primeira linha de resultado
while($usuario = $resultado->fetch_assoc()){
    //adiciona o produto (linha do vetor) no vetor
    $usuarios[] = $usuario;
}



