<?php 

$onde_esta = $_FILES['foto']['tmp_name'];
$nome_arquivo = time() . $_FILES['foto']['nome'];
$para_onde_vai = "../uploads/$nome_arquivo";

move_uploaded_file($onde_esta, $para_onde_vai);
