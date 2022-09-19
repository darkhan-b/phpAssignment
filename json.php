<?php require_once "db_connection.php";


echo "<b>clients</b><p>";
$sql_function = "SELECT * FROM client";
$results = mysqli_query($connection, $sql_function);
$row_client = mysqli_fetch_all($results);
$json_clients = json_encode($row_client, JSON_PRETTY_PRINT);
echo $json_clients;

echo "<p><b>tariff</b><p>";
$sql_function = "SELECT * FROM tariff";
$results = mysqli_query($connection, $sql_function);
$row_client = mysqli_fetch_all($results);
$json_tariff = json_encode($row_client, JSON_PRETTY_PRINT);
echo $json_tariff;


echo "<p><b>Services</b><p>";
$sql_function = "SELECT * FROM services";
$results = mysqli_query($connection, $sql_function);
$row_client = mysqli_fetch_all($results);
$json_service = json_encode($row_client, JSON_PRETTY_PRINT);
echo $json_service;


echo "<p><b>Service transactions</b><p>";
$sql_function = "SELECT * FROM service_transactions";
$results = mysqli_query($connection, $sql_function);
$row_client = mysqli_fetch_all($results);
$json_trans1 = json_encode($row_client, JSON_PRETTY_PRINT);
echo $json_trans1;


echo "<p><b>Tariff transactions</b><p>";
$sql_function = "SELECT * FROM tariff_transactions";
$results = mysqli_query($connection, $sql_function);
$row_client = mysqli_fetch_all($results);
$json_trans2 = json_encode($row_client, JSON_PRETTY_PRINT);
echo $json_trans2;

?>
