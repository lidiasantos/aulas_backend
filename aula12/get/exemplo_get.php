<?php
//Para realizar requisitos utilizamos o "$_GET" (obrigatóriamente usando letra maiuscula),
//para peegar arquivos, no navegador devemos colocar o endereço do php, adicionar um ponto de iterrogação "?"
// para separarmos, colocar a variavel desejada e o valor que queremos na variável.
//ex.:http://localhost/3infoA/Lidia/aula12/get/exemplo_get.php?numero1=10&numero2=200
// e no arqu8ivo php colocar os seguintes códigos para a consulta de soma desejada: 
//$resultado = $_GET['numero1'] + $_GET['numero2'];
//echo "O resultado da soma é $resultado";

   $resultado = $_GET['numero1'] + $_GET['numero2'];
   echo "O resultado da soma é $resultado";

?>

