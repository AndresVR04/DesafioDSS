<!DOCTYPE html>
<html>
<head>
	<title>Formulario de ingreso</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require 'mod.php';
$cod = $_GET['codigo'];
echo $index;
?>
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Bienvenido</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="php/insertar.php">Ingresar Productos</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
	<div class="container mt-5">


		<h1>Formulario de Modicacion</h1>
		<?php
		
                  if(count($errores)>0&&isset($_POST['enviar'])){
                    echo "<div class='alert alert-danger'><ul>";
                    foreach($errores as $error){
                      echo "<li>$error</li>";
                    }
                    echo "</ul></div>";

                  }

        ?>
		<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
			<div class="form-group">
				<label for="codigo">Codigo:</label>
				<input type="hidden" class="form-control" id="codigo" name="codigo" value="<?= $cod ?>">
				  <h2><?= $cod ?></h2>
			</div>

			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" name="nombre" value="<?= (isset($nombre))?$nombre:''?>">
			</div>

			<div class="form-group">
				<label for="categoria">Categoria:</label>
				<select name="categoria" id="" >
                    <option value="">Seleeccione un dato</option>
                    <option value="Textil">Textil</option>
                    <option value="Promocional">Promocional</option>
                </select>
			</div>

            <div class="form-group">
				<label for="precio">Precio:</label>
				<input type="text" class="form-control" id="precio" name="precio" value="<?= (isset($precio))?$precio:''?>">
			</div>

			<div class="form-group">
				<label for="desc">Existencia:</label>
				<input type="text" class="form-control" id="exis" name="exist" value="<?= (isset($exist))?$exist:''?>">
			</div>

			<div class="form-group">
				<label for="desc">Descripción:</label>
				<textarea class="form-control" id="desc" name="desc"><?= (isset($desc))?$desc:''?></textarea>
			</div>

			<button type="submit" class="btn btn-primary" name="enviar">Modificar</button>
		</form>
	</div>

</body>
</html>