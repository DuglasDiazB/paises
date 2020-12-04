<?php require_once('../app/views/inc/header.php') ?>

<div class="card card-stats mb-4 mb-lg-0">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">LISTA DE USUARIOS</h5>
                
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-chart-bar"></i>
              </div>
            </div>
        </div>
        <br>
       <!-- tabla -->



<div class="table-responsive">
    <table class="table align-items-center">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Continente</th>
            <th scope="col">Num Habitantes</th>
            <th scope="col">Ave Nacional</th>
            
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($parameters['paises'] as $key => $pais):?>
        <tr>
            <td><?php echo $pais->idpais ?></td>
            <td><?php echo $pais->nombre_pais ?></td>
            <td><?php echo $pais->continente?></td>
            <td><?php echo $pais->numero_habitantes?></td>
            <td><?php echo $pais->ave_nacional?></td>
            <td>
                <a href="<?php echo ROUTE_URL?>/index/update/<?php echo $pais->idpais ?>">Editar</a>
                <a href="<?php echo ROUTE_URL?>/index/delete/<?php echo $pais->idpais ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

  

</table>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo">
  Nuevo Usuario
</button>







    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Pais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="<?php echo ROUTE_URL?>/index/guardar" method = "post">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nombre_pais" class="form-control"  placeholder="Ingrese el Pais" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="continente" class="form-control"  placeholder="Ingrese el Continente" required>
                </div>
             </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="numero_habitantes" class="form-control"  placeholder="Numero de Habitantes" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="ave_nacional" class="form-control"  placeholder="Ingrese el Ave" required>
                </div>
             </div>
        </div>

        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>



    </div>
  </div>
</div>

<?php require_once('../app/views/inc/footer.php') ?>

