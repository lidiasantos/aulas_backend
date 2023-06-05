<?php
 session_start();

 if(!isset($_SESSION['usuario'])){
    header("Location: ../controla_sessao/form_login.php");
 }
?>