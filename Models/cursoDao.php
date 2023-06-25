<?php
include("conexion.php");
function insertar($cod, $nom, $cic, $nc)
{
    global $cn;
    $sql = "INSERT INTO tcurso(CodCur,NomCur,Ciclo,NumCre) VALUES ('" . $cod . "','" . $nom . "','" . $cic . "','" . $nc . "')";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron registrados con exito";
    } else {
        return " los datos no se registraron";
    }
}
function getCursos()
{
    global $cn;
    $sql = "SELECT * FROM tcurso";
    return mysqli_query($cn, $sql);
}
function consultarCurso($idC)
{
    global $cn;
    $sql = "SELECT * FROM tcurso WHERE id='" . $idC . "'";
    return mysqli_query($cn, $sql);
}
function modificar($id,$cod,$nom,$cic,$nc)
{
    global $cn;
    $sql = "UPDATE tcurso SET CodCur='" . $cod . "',NomCur='" . $nom . "',Ciclo='" . $cic . "',
    NumCre='" . $nc . "' WHERE id= '" . $id . "' ";
    if (mysqli_query($cn,$sql)) {
        return "Los datos fueron modicados con exito";
    } else {
        return " Los datos no se modificaron";
    }
}
function eliminar($id)
{
    global $cn;
    $sql = "DELETE FROM tcurso WHERE id= '" . $id . "'";
    if (mysqli_query($cn, $sql)) {
        return "Los datos fueron eliminados con exito";
    } else {
        return " Los datos no se eliminaron";
    }
}
?>