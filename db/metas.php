<?php

echo "Carregando...";
session_start();

if(isset($_SESSION["LOG"])){

		$user = $_SESSION["LOG"]["User"];
        $meta = $_GET["campo1"];

    } else {
        header('Location: /login.php');
    }


include ('connect.php');


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}


mysqli_query($conectar,"UPDATE usuarios SET metas = '$meta' WHERE username = '$user';") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "Meta cadastrada!";
echo "<script>alert('Sua meta foi cadastrada');";

header("Location: /edit_perfil.php");