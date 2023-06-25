<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body bgcolor="#FFFFCC" text="#FF0000">
    <?php
    include("../Controllers/cursoController.php");
    echo "<h1 class='text-center alert alert-secondary'>Datos del Curso</h1>";
    echo " <table class='table'>";
    echo "   <tbody> ";
    echo "       <tr class='center'> ";
    echo "           <th> ID </th> ";
    echo "           <th> CODIGO </th> ";
    echo "           <th> NOMBRE</th> ";
    echo "           <th>CICLO</th> ";
    echo "          <th>NUM. CREDITOS</th> ";
    echo "          <th>Accion Modificar</th> ";
    echo "          <th>Accion Eliminar</th> ";
    echo "      </tr> ";
    $sql = listarCurso();
    while ($row = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td> ";
        echo "<td>" . $row['CodCur'] . "</td> ";
        echo "<td>" . $row['NomCur'] . "</td> ";
        echo "<td>" . $row['Ciclo'] . "</td> ";
        echo "<td>" . $row['NumCre'] . "</td> ";
        echo '<td><a href="frmModificar.php?idC='.$row['id'].'" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i> Modificar </a></td>';
        echo '<td><a href="../Controllers/cursoController.php?id=' . $row['id'] . '" class="btn btn-small btn-danger"><i class="bi bi-person-fill-x"></i> Eliminar </a></td> ';
        echo "</tr> ";
    }
    echo  "  </tbody> ";
    echo " </table>";
    ?>
</body>

</html>