<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	echo 'Você está utilizando o Internet Explorer.<br />';
}
$ip = $_SERVER["REMOTE_ADDR"];

//Lista de calculo de manifestações e %:
$baseEstatisticas = array(
    'Solicitação' => 5,
    'Sugestões' => 8,
    'Denúncias' => 5, 
    'Reclamações' => 3, 
    'Elogios' => 2
);

$soma = array_sum($baseEstatisticas);
 
$valorTotal = array(
    '0' => $soma,
    '1' => $soma,
    '2' => $soma,
    '3' => $soma,
    '4' => $soma
);
 
//Função para reajustes salárial:
function calculoPorCento($valueBase, $TotalValue) {
 
    return number_format(($valueBase / $TotalValue) * 100, 2) . "%";
 
}
 
$listaValor = array_map('calculoPorCento', $baseEstatisticas, $valorTotal);
 
//print_r($listaValor);


?>