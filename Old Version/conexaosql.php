
<?php

	$login_ra = ($_POST['ra_login']);
	$login_cpf = ( $_POST['cpf_login']);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/ConsultaAluno/$login_ra/$login_cpf");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$res = curl_exec($ch);
	curl_close($ch);
 	echo "<br><br>";
	print_r($res);
 	echo "<br><br>";
	$_retorno = json_decode($res);
 	print_r($_retorno);
 	echo "<br><br>";

	echo "antes do var_dump";
 	var_dump($_retorno, true);
  	echo "depois do var_dump";
	echo "<br><br>";

	


	echo $_retorno->idPolo;
	echo "<br><br>";
	echo $_retorno->Nome;
	echo "<br><br>";
	echo $_retorno->Polo;


//$string = $res;
//$array = explode(',',$string);
/*foreach($array as $valores){
    echo $valores . '<br/>';
*/




//$delimiter = array("","{","}" );
//$replace = str_replace($delimiter, $delimiter[0], $ra);
//$explode = explode($delimiter[0], $replace);

//$texto = $explode[1];
//$t= preg_replace("",$texto);

//$array = str_replace('"','', $nome);
//$array1 = str_replace('"','', $nome);
//$array = explode('"', $ra);
  
//echo '<pre>';
//print_r($array[1]);

//echo '</pre>';


//header("Location: index.php");



?>

