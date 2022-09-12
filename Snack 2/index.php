<?php
$risposta = "";

if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['eta'])){
    $nome = $_GET['nome'];
    $mail  = $_GET['mail'];
    $eta = $_GET['eta'];


    if(strlen($_GET['nome']) >= 3 && strpos($_GET['mail'], '@') !== false && strpos($_GET['mail'], '.') !== false && is_numeric($_GET['eta'])){
        
        $risposta = 'Valida';
    }else{
        $risposta = 'Non valida';
    }
}else{
    $risposta = 'Devi inserire Nome Mail e Età';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Nome - Mail - Età</title>
</head>
<body>

    <h2><?php echo $risposta;?></h2>

</body>
</html>