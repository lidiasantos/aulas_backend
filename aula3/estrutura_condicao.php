<h2>Estruturas de condições</h2>
<hr>
<p>
    A estrutura de condições é utuizada para 
    avaliar qual instrução deve ser 
    executada, dada uma condição.

    Se a condiçao for verdadeira (true) executa a 
    instrução 1, caso contrario executa a instrução 2.

<strong>Exemplo</strong>
<pre>
    if (<em>condicao</em>)
    //instrucao1
}else{
    //instrucao2
}
</pre>
</p>
<?php
    /*
        Para passar de ano é necessário 6 pontos
        em cada disciplina. Murilo tirou ... Ele 
        foi aprovado ou não?
    */
    $nota_do_murilo = 10;
    $faltas= 0;
    
    if($nota_do_murilo >= 6 && $faltas < 75){
        echo "Murilo foi aprovado!";
    }else{
        echo "Murilo foi reprovado!";
    }
?>
<strong>Exemplo 2</strong>
<p>
     O aluno para ser aprovado precisa obter
    nota superior a 6 pontos, para fazetr o exame final 
    precisa ter tirado menos que 6 e mais que 3 pontos.
    Notas menores que 3 são reprovações diretas. 
</p>
<?php
$nota = 6;
if($nota>=6){
    echo"Aprovado";
} else if($nota >3 ){
    echo"Faz exame final";
} else {
    echo "Reprovado";
}
?>