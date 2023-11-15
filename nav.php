<?php
echo ' <nav>';
    $nav_button=function ($i){
        $areas=['feed','menu','seguidores','opções'];
        $href=['index.php','index.php','index.php','index.php'];
        return '<a href="'.$href[$i].'"><button class="botao_nav">
    <div class="meio_botao">
        <div class="circulo margem_padrao botao_circular2"></div><h1 class="nav_botao_area">'.$areas[$i].'</h1>
    </div>
</button></a>';
};

echo $nav_button(0);
echo $nav_button(1);
echo '<div class="divisoria"></div>';
echo $nav_button(2);
echo $nav_button(3);
echo '
<div class="caixa_dazzle">
<h1>criado por Dazzle</h1>
<img src="dazzle.png" id="logo_dazzle">
<h3>Dazzle.ltda</h3>
</div>
</nav>
';

?>