<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    

    
  <div class="container">
        <h1>CRUD</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control">
                    <label for="materno">Apellido materno</label>
                    <input type="text" name="materno" id="materno" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>

        <h2>Listado de personas</h2>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->nombre ?></td>
                            <td><?php echo $key->paterno ?></td>
                            <td><?php echo $key->materno ?></td>
                            <td>
                                <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        
        <a class="btn btn-danger btn-sm" href="<?php echo base_url('/inicio') ?>">INICIO </a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            swal(':D','Agregado con exito!','success');
        } else if (mensaje == '0'){
            swal(':(','Fallo al agregar!','error');
        } else if (mensaje == '2'){
            swal(':D','Actualizado con exito!','success');
        } else if (mensaje == '3'){
            swal(':(','Fallo al Actualizar!','error');
        } else if (mensaje == '4'){
            swal(':D','Eliminado con exito!','success');
        } else if (mensaje == '5'){
            swal(':(','Fallo al eliminar!','error');
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>