<?php

// Parámetros de la conexión
$serverName = "127.0.0.1";
$userName = "cief";
$password = "123456";
$dbName = "colores";

$link = "mysql:host=$serverName;port=3306;dbname=$dbName";

try {
$conn = new PDO($link, $userName, $password);

// echo "Connection established"; // Mensaje de conexión establecida

} catch (PDOException $e) {
    print "Error: " . $e->getMessage(); // Mensaje de fallo en la conexión PDO
} catch (Exception $e) {
    print "Error: " . $e->getMessage(); // Mensaje de fallo en la conexión
}
?>





