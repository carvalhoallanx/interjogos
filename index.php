<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERJOGOS</title>
    <link rel="stylesheet" href="styleHome_.css">

</head>

<body onmousemove="startTimer()">
    
    <nav>        
        <!-- Navbar do ambiente-->
        <div class="navbar">
            <div id="nomeSite"> 
            <img src="bancoImagens/home/arquivos629f4e13e7b54.svg" id="logo"alt=""> 
                <!-- SOBRE -->
            </div>
            <p class="sobre" id="sobreJogo"> Sobre o Jogo </p>            
        </div>
    </nav>
    
    <!-- section do ambiente-->
    <section>
        <!-- fundo/background do ambiente-->
        <div class="background">
            <!-- itens para jogar no ambiente-->
            <div class="itens">
                <div class="game" id="i">
                    <img src="bancoImagens/home/arquivos629f4db49b63e.png" alt="" id="seta" onclick="trocarJogo()">
                    <img src="bancoImagens/home/arquivos629f4db49abdc.png" class="img1" id="imagensJogos" alt=""
                        onmousemove=" explicaaorJogo()" onmouseleave="fecharExplicacao() " onclick="definirJogo()" >
                    <img src="bancoImagens/home/arquivos629f4db49c178.png" alt="" id="seta" onclick="trocarJogo()"
                        class="pointRight">
                     <p id="descricao"> </p>
                     <div class="tracado">

                    </div>
                </div>
                <div id="i" class="text">
                    <form action="indexConexao.php" method="get">
                    <input class="field" type="text" id="textNome" name="username" alt="Digite seu nome" placeholder="Digite seu nome">
                    <input class="field" type="text" id="textTutor" name="tutor" alt="Nome do Tutor" placeholder="Nome do Tutor">
                </div>
                <input action="" type="submit" value="Jogar" id="jogar" onclick="jogar()">
                

            </div>

        </div>
    </section>
    <script src="scriptHome3_.js"></script>    
    
</body>

</html>