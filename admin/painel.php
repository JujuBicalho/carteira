<!doctype html>
<html lang="pt-br">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        html,body {
            height: 100%;
        }
        #header {
            width: 100%;
            background-color:#3434eb;
        }
        #content {
            padding: 35px;
        }
        #main {
            flex: 1;
        }
        #menu {
            height: 100%;
            padding-top: 30px;
        }
        #menu .nav-link.active{
            color: #fff;
            background-color:#3434eb;
        }

    </style>
    <title>Administração!</title>
  </head>

  <body>  
    <div id="header">
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Minha carteira</a>
        </div>
    </nav>
    </div> 

    <div class="container" id="main">
        <div class="row">
            <div class="col">
                <ul class="nav flex-column" id="menu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Movimentações</a>
                    </li>                 
                </ul>
            </div>

            <div class="col-10" id="content">
            <?php include __DIR__ . $content; ?>
            </div>
        </div>
    </div> 

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>