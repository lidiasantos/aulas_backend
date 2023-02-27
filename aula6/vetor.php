<h2>Vetores</h2>
<p>
    São estruturas de armazenamento composta heterogênas, 
    que podem ser indexadas númericamente ou textualmente.
</p>
<?php
    //exemplo variavel simples
    $nota = 6;
    $nota =3;
    echo $nota . "<br>";

    //exemplo vetor indexado numeramente
    $notas = []; //outra forma $notas = array ();
    $notas[] = 6;
    $notas[] = 3;
    //var_dump($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2;

    //vetores com indice textual
    $notas = []; //cria um vetor vazio
    $notas["debora"] = 7;
    $notas["murilo"]= 7.8;
    $notas["poliana"]= 9;
    echo "<p></p>";
    echo"A Poliana tirou nota" .$notas["poliana"];

    //imprimindo o conteudo de um vetor numerico
    $valores = [];
    $valores[0]= 2;
    $valores[1]= 4;
    $valores[2]= 8;
    $valores[3]= 10;
    $valores[4]= 12;
    $valores[5]= 14;
    $valores[6]= 16;

    //ou $valores=[2, 4, 6, 8, 10, 12, 14, 16];

    //imprimindo o conteudo de um valor numerico
   
    echo "<br>";
    for($i = 0; $i <= 6; $i++){
        echo $valores[$i] . "<br>";
        }

    //somar os valores de um vetor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i];
    }
    echo "<br> A soma dos valores é $acumulador";

?>