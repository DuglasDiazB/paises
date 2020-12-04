<?php require_once('../app/views/inc/header.php')?>
    <div class="container">
    <form action="<?php echo ROUTE_URL?>/index/update/<?php echo $parameters['pais']->idpais?>" method = "post">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nombre_pais" class="form-control"  placeholder="Ingrese el Pais" value="<?php echo $parameters['pais']->nombre_pais?>" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="continente" class="form-control"  placeholder="Ingrese el Cont" value="<?php echo $parameters['pais']->continente?>" required>
                </div>
             </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="numero_habitantes" class="form-control"  placeholder="Ingrese Num de Hab" value="<?php echo $parameters['pais']->numero_habitantes?>" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="ave_nacional" class="form-control"  placeholder="Ingrese el Ave" value="<?php echo $parameters['pais']->ave_nacional?>" required>
                </div>
             </div>
        </div>

        ...
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>

   


<?php require_once('../app/views/inc/footer.php')?>