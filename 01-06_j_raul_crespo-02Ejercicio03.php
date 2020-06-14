<?php
//Ejemplo de PHP ksort() y krsort() para ordenar un array por sus claves
$arrayasociativo = array("Juan"=>"29","Pedro"=>"18","Eduardo"=>"26");
 
//orden ascendente
ksort($arrayasociativo);
var_export($arrayasociativo);
 
//orden descendente
krsort($arrayasociativo);
var_export($arrayasociativo);
?>
