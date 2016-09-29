<?php
	include_once 'teste.php';

	$teste = new Teste();

	try{
		print_r("Soma: " .$teste->soma(12,3));
		print_r("Sub: " .$teste->subtracao(12,3));
	}
	catch(Excetion $ex){
		echo $ex;
	}
?>