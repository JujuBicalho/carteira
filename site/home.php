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
     
        <!--Card de login-->
        <div id="main">
            <div class="row justify-content-center mt-5">
                <div id="content" class="col-4 align-self-center">
        <!--Login-->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                <form action ="/admin/login" method="POST">
                    <div class="mb-3">
                        <label for="admin" class="form-label">Admin</label>
                        <input type="text" class="form-control" id="admin" name="admin">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>

                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
     
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>