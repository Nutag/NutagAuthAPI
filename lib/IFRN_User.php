<?php

class IFRN_User {
	public $matricula;
	public $nome;
	public $sobrenome;
	public $email;
	
	function __construct($matricula, $nome, $sobrenome, $email)
	{
		$this->matricula = $matricula;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
	}
}
?>