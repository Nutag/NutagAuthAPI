<?php
	require 'NutagAPI.php';
	$auth = new NutagAPI();

	$aut = $auth->authUser("Usuario", "Senha");

	if ($aut->type=="error") {
		echo "Problemas no processo de autenticação";
	} else {
		echo $aut['user']->nome;
	}

?>