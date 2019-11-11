<<?php 

	$file = fopen("teste.txt", "w+");

	fclose($file);

	// unlink($file);
	unlink("teste.txt");

	echo "Arquivo excluído com sucesso.";

 ?>