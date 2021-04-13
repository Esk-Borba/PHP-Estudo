<?php
session_id('uhbkh3nn1r738n0b0v4837uop8');
//recupera a sessão, assim sendo possivél "logar" em outra aba, como guia anonima

require_once("config.php");

session_regenerate_id();
//força a troca de ID da sessão, assim quando der F5 a sessão ganhará um novo ID

echo session_id();

var_dump($_SESSION);
