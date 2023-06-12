<?php require_once "../conexao.php";



$sql = "SELECT * FROM `filmes`";

$comando = $conexao->prepare($sql);

$comando->execute();

//pergar o resultado a consuçlta
$resultado = $comando->get_result();

//cria um vetor vazio
$filme = [];

//pegar a primeira linha de resultado
while($filme = $resultado->fetch_assoc()){
    //adiciona o produto (linha do vetor) no vetor
    $filmes[] = $filme;
}



