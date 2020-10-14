<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, DB) or die ('Não possível conectar a base da dados');

?>