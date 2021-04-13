<?php

require_once("config.php");

unset($_SESSION['nome']);
//apaga a variável noma da sessão

echo $_SESSION['nome'];


session_destroy();
//destrói todos os dados registrados em uma sessão

