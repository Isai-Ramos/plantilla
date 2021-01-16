
<?php 

$idNombre = $datos[0]['id_nombre'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno'];
$materno = $datos[0]['materno']; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
  </head>
  <body>
    
  <div class="container">
        <h1>CRUD con Codeigniter 4</h1>
       
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                <input type="text" id="idNombre" name="idNombre" hidden="" value="<?php echo $idNombre?>">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre?>">
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno?>">
                    <label for="materno">Apellido materno</label>
                    <input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>