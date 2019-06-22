
<?php

$login_ra = ($_POST['ra_login']);
$login_cpf = ( $_POST['cpf_login']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://186.233.148.102:8080/ConsultaAluno/$login_ra/$login_cpf");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);

 
//$string = $res;
//$array = explode(',',$string);
/*foreach($array as $valores){
    echo $valores . '<br/>';
*/



$data = $res;
list($ra, $nome, $curso, $situacao, $polo, $msg, $poloativo, $idpolo) = explode(",", $data);
//$delimiter = array("","{","}" );
//$replace = str_replace($delimiter, $delimiter[0], $ra);
//$explode = explode($delimiter[0], $replace);

//$texto = $explode[1];
//$t= preg_replace("",$texto);

//$array = str_replace('"','', $nome);
//$array1 = str_replace('"','', $nome);
//$array = explode('"', $ra);

  print_r($data);     

//echo '<pre>';
//print_r($array[1]);

//echo '</pre>';


//header("Location: index.php");



?>

