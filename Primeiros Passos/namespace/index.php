<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Vinicius");
$cad->setEmail("vinicius_fuhr-borba@estudante.sc.senai.br");
$cad->setSenha("123456");

$cad->registrarVenda();
echo "<br>";
echo $cad;