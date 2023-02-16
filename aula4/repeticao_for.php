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

<?php 
    for($contador = 0; $contador <= 10; $contador++){
        echo "2 x $contador = " . $contador * 2 . "<br>";
    }
    ?>