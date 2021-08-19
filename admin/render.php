<?php
//essa função abaixo renderiza o que quisermos de acordo com o que o usuário vai pedindo(troca de páginas)
//criando uma pasta para colocar todos os templates, sendo o painel a página principal da admin e o conteúdo  no meio, como estrutura de menu,cabeçalho,..

function render($template, $content) {
    require __DIR__ . '/' . $template . '.php';
}

/*agora que criamos a pasta template precisamos dizer qual que iremos usar.
 Temos que preencher o conteúdo que ficará na paste templates, que neste momento é o 
 home.php. Então incluimos o $content. Aí volta no painel.php e coloca no include,
dentro da tag php que tem que ser fechada, "include $content".

No require não precisa colocar o content porque tudo o que é inserido no $template ele vai ler.

Agora no arquivo de routes do admin precisamos renderizar o conteúdo que ele tem que preencher
que no caso terá que adicionar no: render('painel' , '/templates/home.php)*/