<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4 p-3" action="../Controllers/cursoController.php" method="post">
    <h4 class="text-center alert alert-secondary">Registro de Curso</h4>
        <div class="mb-3">
        Codigo: <input type="text" class="form-control" name="cod">
        </div>
        <div class="mb-3">
        Nombre: <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
        Ciclo: <input type="text" class="form-control" name="cic">
        </div>
        <div class="mb-3">
        Numero de Creditos: <input type="text" class="form-control" name="numCre">
        </div>
        <button type="submit" class="btn btn-primary" name="btnRegistrar" value="Registrar Curso"><i class="bi bi-person-add"></i> Registrar Curso</button>
    </form>
</body>

</html>