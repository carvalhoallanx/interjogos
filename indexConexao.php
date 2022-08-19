<?php 
/* Apos clicar em jogar, insere as informações no banco */

    include_once("indexBanco.php");
    $nome = filter_input(INPUT_GET,'username',FILTER_SANITIZE_STRING);
    $nomeTutor = filter_input(INPUT_GET,'tutor',FILTER_SANITIZE_STRING);
    echo "Nome: $nome<br>"; 
    echo "Nome: $nomeTutor<br>"; 
    if ($nome == null & $nomeTutor == null){    
        $nome = 'Jogador 1';          
        $nomeTutor = 'Tutor 1';          
    }
    if($nome != null){
        $result_nome = "INSERT INTO usuarios (nome) VALUES('$nome')";
        $result_tutor = "INSERT INTO tutor (tutor) VALUES('$nomeTutor')";
        $resultado = mysqli_query($mysqli,$result_nome);
        $resultado = mysqli_query($mysqli,$result_tutor);
    }
    //$cod = rand(1,3);
    //$cod = 4;
    header('Location: indexLoading.php');        
       
       