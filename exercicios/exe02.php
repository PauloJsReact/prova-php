<?php
 
 $numero_inicial =$_GET["inicial"];
 $numero_final =$_GET["final"];

 $calcular = [];

for ($i=$numero_inicia; $i <$numero_final ; $i++) { 
        $calcular[$i] = $numero_inicial++;
}
$resultado = $calcular;



echo json_encode(array(
   $resultado
));




?>