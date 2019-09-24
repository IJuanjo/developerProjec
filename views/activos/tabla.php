<div class="container mt-5">
  <a href="<?=base_url?>activos/guardar" class="btn btn-outline-primary mb-4">Agregar nuevo activo</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion Tecnica</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row=mysqli_fetch_object($datos)): ?>
  <tr>
      <th scope="row"><?=$row->cod_maq?></th>
      <td><?=$row->nombre?></td>
      <td><?=$row->des_tecnica?></td>
      <td>
        <a href="#" class="btn btn-primary">ver</a >
        <a  href="#" class="btn btn-danger">Eliminar</a >
      </td>
    </tr>   
    <?php endwhile; ?>
  </tbody>
</table>


</div>