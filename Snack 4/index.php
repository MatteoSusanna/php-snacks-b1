<?php
    $numeriCasuali = [];

    while(count($numeriCasuali) < 15){
        $numeroGenerato = rand(1,15);

        if(in_array($numeroGenerato, $numeriCasuali)){
        }else{
            $numeriCasuali[] = $numeroGenerato;
        }
    }
    
    var_dump($numeriCasuali);

?>