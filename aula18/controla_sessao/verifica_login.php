<?php

if (isset($_POST['usuario']) and isset($_POST['senha'])){

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


require_once "../conexao.php";

$sql = "SELECT * FROM `usuario` WHERE  `login`= ? ;";

$comando = $conexao->prepare($sql);

$comando->bind_param("s", $usuario);

$comando->execute();

//pergar o resultado a consuçlta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$usuario = $resultado->fetch_assoc();

if($usuario){
    if(password_verify($senha, $usuario['senha'])){
    session_start();
    $_SESSION['usuario']= $usuario;
    header("Location: ../produto/index.php");
    }
    else{
       $erro_login = "Senha incorreta";

    }
}else{
   $erro_login = "Não existe usuario com esse login informado";
}
}



