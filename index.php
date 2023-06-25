<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if (isset($_GET['m'])) {
        $m = $_GET['m'];
        echo '<script language="javascript"> alert(" ' . $m . ' ")</script>';
    }
    echo '<br>';
    echo '<div class="container">';
    echo '<a class="btn btn-primary" href="Views/frmInsertar.php">Registrar Curso</a><br>';
    echo '<br>';
    echo '<a class="btn btn-success" href="Views/frmConsulta.php">Lista de Cursos</a>';
    echo '</div>'
    ?>

</body>
</html>