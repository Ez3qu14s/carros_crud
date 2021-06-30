<?php

$host = "localhost";
$db = "carros";
$user = "root";
$senha = "";

$mysqli = new mysqli($host, $user, $senha, $db);

if($mysqli -> connect_error) {
    die("conexão falhou". $mysqli -> connect_error);
} else {
    
}

if(isset($_POST['salvar'])) {
    $proprietario = $_POST['proprietario'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];

    $mysqli -> query("INSERT INTO motorista (proprietario, cpf, rg, marca, modelo, placa) VALUES ('$proprietario', '$cpf', '$rg', '$marca', '$modelo', '$placa')");

    header('location: ../index.php');
    exit;
}

if(isset($_POST['salvarAlteracoes'])) {
    $id = $_POST['id'];
    $proprietario = $_POST['proprietario'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];

    $mysqli -> query("UPDATE motorista SET proprietario = '$proprietario', cpf = '$cpf', rg = '$rg', marca = '$marca', modelo = '$modelo', placa = '$placa' WHERE id = '$id'") or die($mysqli -> error);

    header('location: ../index.php');
    exit;
}

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $mysqli -> query("DELETE FROM motorista WHERE id = $id") or die($mysqli -> error());

    if($mysqli -> error) {
        echo 'Erro '.$mysqli -> error;
    }
    header('location: ../index.php');
    exit;
}

?>