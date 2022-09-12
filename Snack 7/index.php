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

        echo "<h3>" . $alunni['alunno'] . "</h3>" . '| La media è |' . "<h3>" .floor($media) . "</h3>" . '<br>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Media Alunni</title>
</head>
<body>
    
</body>
</html>
