
<?php
$ra_user = 1749784;
$pw_user = 41188775898;


// Podemos fazer uma requisição ao web servises atrses no cURL.
		// Inicia a biblioteca cURL.
		$ch = curl_init();

		// Passamos nosso caminho para web services. Exemplo: https://polofacil.com/api/login
		// Note que, vamos passar as variares $ra_user e $pw_user para nosso web services.
		curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/ConsultaAluno/$ra_user/$pw_user");

		// Se true, esperamos pelo retorno 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Agora, executamos nosso cURL e armazenamos a resposta na variavel $res
		$res = curl_exec($ch);

		// É muito importando fecharmos nossa conexão após a execução.
		curl_close($ch);

		// Agora, vamos decodificar nosso Json
		$datas = utf8_encode($res);
        $data = json_decode($datas);

        print_R($data);
?>