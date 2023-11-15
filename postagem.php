<?php
$texto_postagem=["aaaa","bbbbbb","cccc","ddddd","eeeeee","ffffffff"];

include_once("conexao.php");
$counter=0;
$select=$conexao->query("SELECT cliente.cliente_id, cliente.nome, cliente.idade, cliente.profissao, cliente.contato, cliente.email, postagem.texto FROM cliente left join postagem on postagem.postagem_id=cliente.postagem_id;");
while($linha=$select -> fetch(PDO::FETCH_ASSOC)) {
    if($counter==0){
        echo "<div class='duas_postagens'>";
    }
echo '

<div class="postagem borda_padrao">
     <div class="postagem_superior borda_padrao">
         <img src="formei.jpg" class="foto_perfil circulo borda_padrao">
         <div class="info_perfil">
             <h2 class="fonte_padrao fonte_cor_padrao">Eduardo Kenji</h2>
             <h3 class="oficio fonte_padrao fonte_cor_padrao">engenheiro nuclear na Nasa</h3>
         </div>
     </div>
 <h2 class="texto_postagem">'.$linha['texto'].'</h2>
 <div class="interagir_postagem">
     <img class="interagir" src="like.png">
     <img class="interagir deslike" src="like.png">
     <img class="interagir" src="comentarios.png">
     <img class="interagir" src="estrela.png">
     <img class="interagir" src="compartilhar.png">
 </div>
</div>
';
if($counter==1){
    echo "</div><br>";
}

$counter++;
if($counter ==2) {
    $counter=0;
}
}
?>