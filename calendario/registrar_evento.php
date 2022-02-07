<?php
include("../db/connect.php");
session_start();

    if(isset($_SESSION["LOG"])){

        $user = $_SESSION["LOG"]["User"];

      } else {
        header('Location: /login.php');
    }

$nome = $_POST["campo1"];
$data = $_POST["campo2"];
$desc = $_POST["campo3"];
$tipo = $_POST["campo4"];

$check_id = $conectar->query("SELECT * FROM usuarios WHERE username = '$user';");
$r = mysqli_fetch_array($check_id);
$id = $r["id"];
if($id != ""){


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conectar,"INSERT INTO eventos (id_usuario, datas, nome, descricao, tipo) VALUES ('$id', '$data', '$nome', '$desc', '$tipo')") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);

header("Location: index.php");
}