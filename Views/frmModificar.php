<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("../Controllers/cursoController.php");
    if (isset($_GET['idC'])) {
        $idC = $_GET['idC'];
        $datos = consultarCur($idC);
        if ($row = mysqli_fetch_array($datos)) {
            $id = $row['id'];
            $cod = $row['CodCur'];
            $nom = $row['NomCur'];
            $cic = $row['Ciclo'];
            $nc = $row['NumCre'];
        }
    }    
    echo "<form class='col-4 p-3' action='../Controllers/cursoController.php' method='post'>";
    echo "<h4 class='text-center alert alert-secondary'>Modificar Curso</h4>";
    echo "Id : <input type='text' class='form-control' name='id' value='".$id."'/><br>";
    echo "Codigo: <input type='text' class='form-control' name='cod' value='".$cod."'><br>";
    echo "Nombre: <input type='text' class='form-control' name='nom' value='".$nom."'><br>";
    echo "Ciclo: <input type='text' class='form-control' name='cic' value='".$cic."'><br>";
    echo "Numero de Creditos: <input type='text' class='form-control' name='numCre' value='".$nc."'><br>";
    echo "<button type='submit' class='btn btn-primary' name='btnActualizar' value='Actualizar Curso'> Modificar Curso</button>";    
    echo '<a class="btn btn-success" href="../Views/frmConsulta.php">Regresar</a>';
    echo "</form>"
    ?>
</body>

</html>