<h2>Matriz</h2>


<?php 
    $produto1 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 5000
    ];
    $produto2 = [
        "nome" => "camera",
        "marca" => "nikon",
        "preco" => 3000
    ];
    $produto3 = [
        "nome" => "smart phone",
        "marca" => "lg",
        "preco" => 1200
    ];

    $tabela = [$produto1, $produto2, $produto3];

    var_dump($tabela);

    echo $tabela[1] ["marca"];
    echo "<br>";
    //json - javascript object nocation
    echo json_encode($tabela);
?>