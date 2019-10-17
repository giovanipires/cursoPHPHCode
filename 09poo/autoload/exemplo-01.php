<?php

	function __autoload($nomeClasse) {
		require_once("$nomeClasse.php");
		var_dump($Automovel);
	}

$carro = new DelRey();
$carro->acelerar(80);

?>