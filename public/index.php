<?php
/*echo('Olá');
echo $_SERVER['REQUEST_URI']; 
-->para ter a informação do que o usuário está requisitando. 
-->Se ficar requsitando "/" é porque não está requisitando nada. Ex: "Olá/" Se colocar algo após essa barra irá dar erro porque não está configurado.
-->Para revolver este problema é necessário criar um novo arquivo chamado ".htaccess"*/
require __DIR__ . '/../config.php';
/*esse comando é para o index.php seja sempre aberto com os dados do config.php*/