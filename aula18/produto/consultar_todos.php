<?php
require_once "../conexao.php";


$sql = "SELECT * FROM `produto` where categoria like %?% ";

$comando = $conexao->prepare($sql);

$categoria = $_GET['categoria'] ??"";
$comando->bind_param("s", $categoria);

$comando->execute();

//pergar o resultado a consuçlta
$resultado = $comando->get_result();

//cria um vetor vazio
$produto = [];

//pegar a primeira linha de resultado
while($produto = $resultado->fetch_assoc()){
    //adiciona o produto (linha do vetor) no vetor
    $produtos[] = $produto;
}



