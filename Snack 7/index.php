<?php
    /*Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

    
    $classeArray =  [
                        [
                            'alunno' => 'Matteo Gialli',
                            'voti' => [10, 8, 5],
                        ],
                        [
                            'alunno' => 'Carlo Rossi',
                            'voti' => [2, 8, 6],
                        ],
                        [
                            'alunno' => 'Francesca Verdi',
                            'voti' => [10, 8, 5],
                        ],
                    ];

    for($i = 0; $i < count($classeArray); $i++){
        $alunni = $classeArray[$i];

        $somma = 0;
        $voti = $alunni['voti'];
        for($n = 0; $n < count($voti); $n++){  
            $somma = $somma + $voti[$n];
        }
        
        $media = $somma / count($voti);


        echo $alunni['alunno'] . '|La media è|' . floor($media) . '<br>';
        
    }

?>