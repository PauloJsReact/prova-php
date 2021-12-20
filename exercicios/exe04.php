<?php

$valores = $_GET["valores"];
$retira = $_GET["retira"];

$array_valores = explode(",",$valores);
$comprimento = count($array_valores);
//$ordem = sort($array_valores);


$resultado = [];
echo "[";
for ($i=0; $i < $comprimento ; $i++) { 
    if (condition) {
        # code...
    }
    if ($array_valores[$i]!= $retira ) {

    }

}
echo "]";

?>