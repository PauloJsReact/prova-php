<?php
 
 $numero_inicial =$_GET["inicial"];
 $numero_final =$_GET["final"];

 $calcular = [];

for ($i=0; $i <$numero_final ; $i++) { 
        $calcular[$i] = $numero_inicial++;
}
$resultado = [];

for ($i=0; $i <$numero_final ; $i++) { 
        if ( $calcular[$i] != $calcular[0]) {
            for ($a=2; $a <$calcular[$i]-1 ; $a++) { 
               if ($calcular[$i] % $a != 0) {
                $resultado[$i]= $calcular[$i];
               }
            }
        }
}



echo json_encode(array(
   $resultado
));




?>