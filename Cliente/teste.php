<?php
	class Teste{
		public function soma($num1, $num2){
			require_once 'utilitarios/lib/nusoap.php';
			include 'utilitarios/configWebService.php';

			$wsdl = $location. 'teste.php?wsdl';
			$client = new nusoap_client($wsdl, true);

			$erro = $client->getError();
			if($erro) echo 'Erro no construtor <pre>' .$erro. '</pre>';

			try{
				$result = $client->call('soma', array(''.$num1.'', ''.$num2.''));
				return $result;
			}catch(Exception $e){
				return $e->getMessage();
			}	
		}

		public function subtracao($num1, $num2){
			require_once 'utilitarios/lib/nusoap.php';
			include 'utilitarios/configWebService.php';

			$wsdl = $location. 'teste.php?wsdl&flag=1';
			$client = new nusoap_client($wsdl, true);

			$erro = $client->getError();
			if($erro) echo 'Erro no construtor <pre>' .$erro. '</pre>';

			try{
				$result = $client->call('sub', array(''.$num1.'', ''.$num2.''));
				return $result;	
			}catch(Exception $e){
				return $e->getMessage();
			}			
		}
	}
?>