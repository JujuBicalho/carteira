<?php

use App\TiposCategoria;

$entrada = TiposCategoria::ENTRADA;
$saida = TiposCategoria::SAIDA;
?>

<h1> Cadastrar categorias </h1>
<style>
  h1{
  text-align:center;
  text-transform: uppercase;
  margin-bottom: 30px;
  font-weight: bold;
}
  </style>
  
<form method="POST" action="/admin/categoria/novo">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" required>    
  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <select id="tipo" name="tipo">
      <option value="<?= $entrada ?>"><?=TiposCategoria::toString($entrada)?></option>
      <option value="<?= $saida ?>"><?=TiposCategoria::toString($saida)?></option>
    </select>
  </div>

  <div class="mb-3">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="valor" >
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
