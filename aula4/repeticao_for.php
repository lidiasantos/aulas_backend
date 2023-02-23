<h2>Estrutura de repetição</h2>
<p>
    Utilizada para repetir uma sequência de 
    instrução por um número predeterminado 
    de vezes.
</p>

<p>
    <pre>
        for(inicio; condição;passo){
            //instruçãpo a serem repetidas
        }
    </pre>
</p>
<div class="container">
<?php 
for ($tabuada = 1; $tabuada <=10; $tabuada ++){
    for($contador = 0; $contador <= 10; $contador++){
        $resultado =  $tabuada * $contador;
        echo "$tabuada x $contador = " . $contador * $tabuada . "<br>";
    }
    }
    ?>
    </div>