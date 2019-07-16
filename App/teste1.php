
<?php

$ra = 1749784;
 $consumo = file_get_contents("http://186.233.148.102:8080/GetListaApostila/$ra/1");
 $consumo = utf8_encode($consumo);
 $consumo = json_decode($consumo);


 print_r($consumo);
?>