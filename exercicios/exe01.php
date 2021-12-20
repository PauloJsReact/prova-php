<?php

$ano = $_GET["ano"];
$separador_inicial=$ano[0].$ano[1];
$separador_final=  $ano[2].$ano[3];

if ($ano != "" && $separador_final == 0) {

    $result = $separador_inicial;
    echo json_encode(array(
            "Seculo"=> $separador_inicial,
    ));
}else{
    $result= $separador_inicial+1;
    echo json_encode(array(
        "Seculo"=>$result,
    ));
}


?>