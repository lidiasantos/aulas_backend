<?php 
    $produto1 = [
        "nome" => "Poliana Silveira",
        "nota1" => 7,
        "nota2" => 9
    ];
    $produto2 = [
        "nome" => "Murilo Alexandre",
        "nota1" => 8,
        "nota2" => 5
    ];
    $produto3 = [
        "nome" => "Andre Felipe",
        "nota1" => 6,
        "nota2" => 7
    ];
    $produto4 = [
        "nome" => "Lavinia Sandy",
        "nota1" => 6,
        "nota2" => 7
    ];
    $dados = [
      $produto1,
      $produto2,
      $produto3,
      $produto4
    ];
    echo json_encode($dados);
    ?>


    