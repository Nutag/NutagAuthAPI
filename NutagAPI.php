<?php
	require __DIR__.'/lib/IFRN_User.php';

	class NutagAPI
	{
		public function authUser($matricula, $senha) {
			$data = array("matricula"=> $matricula, "senha"=>$senha);

			$url = "https://nutag.websiteseguro.com/api/auth/";
			$options = array(
			    'http' => array(
			        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			        'method'  => 'POST',
			        'content' => http_build_query($data)
			    )
			);

			$context  = stream_context_create($options);

			$result = file_get_contents($url, false, $context);

			$result = json_decode($result);
			if (isset($result->type) && $result->type=="error") {
				return false;
			} else {
				$user = new IFRN_User($matricula, $result->nome, $result->sobrenome, $result->email);
				return array("type"=>"success", "msg"=>"user_ok", "user"=>$user);
			}

		}
	}
?>