<?php
	require 'NutagAPI.php';
	$auth = new NutagAPI();

	$user = $auth->authUser("Usuario", "Senha");

	if ($user->type=="error") {
		echo "Problemas no processo de autenticação";
	} else {
		echo $user->nome;
	}

?>