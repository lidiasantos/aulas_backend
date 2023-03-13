<h1>Exercicio 4</h1>

<?php 
    $produto1 = [
        "nome" => "poliana",
        "nota1" => 7,
        "nota2" => 9
    ];
    $produto2 = [
        "nome" => "murilo",
        "nota1" => 8,
        "nota2" => 5
    ];
    $produto3 = [
        "nome" => "andre",
        "nota1" => 6,
        "nota2" => 7
    ];
    $dados = [$produto1, $produto2, $produto3];

    foreach ($dados as $key => $value) {
        echo $value ["nome"]; echo "|";
        echo $value ["nota1"]; echo "|";
        echo $value ["nota2"]; echo "<br>";

    }
    ?>