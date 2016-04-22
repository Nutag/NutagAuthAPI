<?php

class IFRN_User {
	public $matricula;
	public $nome;
	public $email;
	
	function __construct($matricula, $nome, $email)
	{
		$this->matricula = $matricula;
		$this->nome = $nome;
		$this->email = $email;
	}
}
?>