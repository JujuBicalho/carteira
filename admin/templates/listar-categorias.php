
<h1> Movimentações</h1>

<style>
  h1{
  text-align:center;
  text-transform: uppercase;
  margin-bottom: 30px;
  font-weight: bold;
}
  </style>

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($dados as $categoria) {
      $id = $categoria->getId();
      $linkEditar = "<a href='/admin/categoria/$id/edicao' class='btn btn-secondary'>Editar</a>";
      $linkRemover = "<a href='/admin/categoria/$id/edicao' class='btn btn-secondary'>Remover</a>";
      echo "<tr>";
      echo "<td>" . $categoria->getId() . "</td>";
      echo "<td>" . $categoria->getNome() . "</td>";
      echo "<td>" . App\TiposCategoria::toString($categoria->getTipo()) . "</td>";
      echo "<td style='width:5px'>" .$linkEditar . "</td>";
      echo "<td style='width:5px'>" .$linkRemover . "</td>";
      echo "<tr>";
    }
    ?>
  </tbody>
</table>

<!--Button-->
<a href="/admin/categoria/cadastrar" class="btn btn-primary mt-3">Adicionar</a>
