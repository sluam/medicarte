<?php



require_once(__DIR__ . '/../../modelo/DAO/DataSource.php');
$cedula = $_GET['cedula'];
$resultado = mysqli_query($conexion, "DELETE FROM usuario WHERE cedula = $cedula");

header("Location: ../../vista/dashboardAdmin.php");
?>