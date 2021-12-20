<?php

$sorteio = rand(0,20);
$tabela = new SplFixedArray(20);

for ($i=0; $i <20; $i++) { 
    $tabela[$i] = random_int(0,20);
}

$result = [];


for ($i=0; $i<20 ; $i++) { 
    if ($tabela[$i] !== empty($result)) {  
        $result[$i] = $tabela[$i]; 
    }
}

echo json_encode (array(
    $result
));


?>