<?php
include_once "connection.php";
include_once "colores.php";

echo $_GET['id']."<br />";
echo $_GET['usuario']."<br />";

echo $_GET['color'];
echo $colores[$_GET['color']];


$update = "UPDATE info_colores SET color = ?, usuario = ?, color_user = ? WHERE id = ?";
$update_prepare = $conn->prepare($update);
$update_prepare->execute([$_GET['color'], $_GET['usuario'], $colores[$_GET['color']], $_GET['id'] ]);

$update_prepare = null;
$conn = null;

header('location:index.php');
