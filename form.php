<?php
 require ("class/clases.php");
 $congreso = "CPSG2020";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>

    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="validar.js"></script>
    
    <title>Registro Expositor</title>
</head>
<body>
<div class="container-fluid">

  <h1 class="text-center mt-3">Formulario Expositor</h1>


<form class="row g-3 form" action="class/datosExpositor.php" method="post" >
  <div class="d-flex justify-content-around">

  <div class="col-md-11 col-sm-10 mt-3">
    <label for="inputEmail4" class="form-label">Nombre de la empresa:</label>
    <input type="text" class="form-control" id="empresa" name="nombre_emp">
  </div>
</div>

<div class="d-flex justify-content-around">

<div class="col-md-5 col-sm-4">
  <label for="inputPassword4" class="form-label">Representante:</label>
  <input type="text" class="form-control campos" id="nom_rep" name="rep">
</div>
<div class="col-md-5 col-sm-4">
  <label for="inputPassword4" class="form-label">Email:</label>
  <input type="text" class="form-control campos" id="corre_e" name="correo_exp">
</div>
</div>
    </div>
  <div class="col-12">
    <div class="d-flex justify-content-center align-items-center">
    <input type="hidden" name="congreso" value="<?php echo $congreso ?>">
    <button type="submit" class="btn btn-success mt-5">Guardar</button>
  </div>
  </div>
</form>
</div>

</body>
</html>