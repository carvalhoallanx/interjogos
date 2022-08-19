<?php
$cod = rand(1,4);
    if ($cod == 1){
        header('Location: JogosMemoria/JogoDaMemoriaAnimais1/jogo1/indexJogo.php');
    }if ($cod == 2){
        header('Location: JogosMemoria/JogoDaMemoriaAnimais2/jogo1/indexJogo.php');
    }if ($cod == 3){
        header('Location: JogosMemoria/JogoDaMemoriaFrutasAnimais/jogo1/indexJogo.php');
    }if ($cod == 4){
        header('Location: JogosMemoria/JogoDaMemoriaMaterial/jogo1/indexJogo.php');
    }
?>