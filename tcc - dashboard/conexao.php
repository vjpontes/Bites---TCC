<?php
define('HOST', '127.0.0.1:49887');
define('USUARIO', 'azure');
define('SENHA', '6#vWHD_$');
define('DB', 'tcc');
/*
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'tcc');*/

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>