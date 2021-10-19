<h1> Cadastrar categorias </h1>
<style>
  h1{
  text-align:center;
  text-transform: uppercase;
  margin-bottom: 30px;
  font-weight: bold;
}
  </style>
  
<form method="POST">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" required>    
  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="tipo" required>
  </div>

  <div class="mb-3">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="valor" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


<?php
    if(isset($_POST) && isset($_POST["nome"])) {
        echo "Cadastrando categoria " . $_POST["nome"];
    }
?>