<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_primordial.css" />
    <title>Document</title>
</head>
<body>
    <header>
        <form action="">
            <div id="pesquisa">
                <div class="circulo primario botao_circular">
                </div>
               
                    <input type="text" id="procurar">
             
            </div>
        </form>

        <button class="circulo botao_circular margem_padrao sombra"></button>
    
        <button class="circulo botao_circular margem_padrao sombra"></button>
    
        <button class="circulo botao_circular margem_padrao sombra"></button>
    
        <button class="botao_tipo2 margem_padrao sombra" >sobre</button>
    
        <button class=" botao_tipo2 margem_padrao sombra" >sobre</button>
    
        <button class="botao_tipo2 margem_padrao sombra" >sobre</button>
    
        <img src="formei.jpg" id="logo" alt="">
    </header>

    <nav>
        <?php
        include('nav.php');
        ?>
        </button>
       
       

    <main>
    <div class="todas_postagens">
    <?php
            include("postagem.php");
    ?>
    </div>

    


    </main>
</body>
</html>