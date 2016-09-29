<?php
	Init();

	public function Init(){
		switch($_GET['flag']){
			case 1:
				somar();
				break;
			case 2:
				subr();
				break;
		}
	}

	public function somar(){
		require_once 'utilitarios/lib/nusoap.php';

		$server = new soap_server;

		$server->configureWSDL('server.soma', 'urn:server.soma');
		$server->wsdl->schemaTargetNamespace = 'urn:server.soma';

		$server->register(
			'soma',
			array('num1' => 'xsd:string',
				'num2' => 'xsd:string'),
			array('return' => 'xsd:string'),
			'urn:server.soma',
			'urn:server.soma#soma',
			'rpc',
			'encoded',
			'soma.'
		);
	}

	public function subr(){
		require_once 'utilitarios/lib/nusoap.php';

		$server = new soap_server;

		$server->configureWSDL('server.sub', 'urn:server.sub');
		$server->wsdl->schemaTargetNamespace = 'urn:server.sub';

		$server->register(
			'sub',
			array('num1' => 'xsd:string',
				'num2' => 'xsd:string'),
			array('return' => 'xsd:string'),
			'urn:server.sub',
			'urn:server.sub#sub',
			'rpc',
			'encoded',
			'sub.'
		);
	}

	function soma($num1, $num2){	
		return $num1 + $num2;
	}

	function sub($num1, $num2){		
		return $num1 - $num2;
	}

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

	$server->service($HTTP_RAW_POST_DATA);
?>