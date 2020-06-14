<?php
//Ejemplo de PHP asort() y arsort() para ordenar un array por sus valores
$arrayasociativo = array("Juan"=>"29","Pedro"=>"18","Eduardo"=>"26");
 
//orden ascendente
asort($arrayasociativo);
var_export($arrayasociativo);
 
//orden descendente
arsort($arrayasociativo);
var_export($arrayasociativo);

?>
