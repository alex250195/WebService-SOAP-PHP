<?php
	class Excecao{
		private $erro01 = "CNPJ Invalido";
		private $erro02 = "CPF Invalido";
		private $erro03 = "Data Fundacao Invalida";
		private $erro04 = "Email Invalido";
		private $erro05 = "Telefone Celular Invalido";
		private $erro06 = "Telefone Fixo Invalido";
		private $erro07 = "Telefone Comercial Invalido";
		private $erro08 = "Data Prova Invalida";
		private $erro09 = "Data Incricao Invalida";
		private $erro10 = "Data Encerramento Invalida";
		private $erro11 = "Data Gabarito Invalida";
		private $erro12 = "Data Resultado Invalida";
		private $erro13 = "Favor Selecionar Algum Curso";
		private $erro14 = "Numero Endereco Invalido";
		private $erro15 = "CEP Invalido";
		private $erro16 = "Senha Invalida";
		private $erro17; 
		private $erro18; 
		private $erro19; 
		private $erro20; 
		
		public function getErro($id){
			if($id == 1) return $this->erro01;
			if($id == 2) return $this->erro02;
			if($id == 3) return $this->erro03;
			if($id == 4) return $this->erro04;
			if($id == 5) return $this->erro05;
			if($id == 6) return $this->erro06;
			if($id == 7) return $this->erro07;
			if($id == 8) return $this->erro08;
			if($id == 9) return $this->erro09;
			if($id == 10) return $this->erro10;
			if($id == 11) return $this->erro11;
			if($id == 12) return $this->erro12;
			if($id == 13) return $this->erro13;
			if($id == 14) return $this->erro14;
			if($id == 15) return $this->erro15;
			if($id == 16) return $this->erro16;
		}
	}
?>