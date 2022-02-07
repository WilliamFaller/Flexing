<?php

echo "Carregando...";
session_start();

if(isset($_SESSION["LOG"])){

		$user = $_SESSION["LOG"]["User"];
		$atv = $_GET["campo2"];

    } else {
        header('Location: /login.php');
    }


include ('connect.php');


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}


mysqli_query($conectar,"UPDATE usuarios SET avatar = '$avatar' WHERE username = '$user';") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "Avatar atualizado cadastrada!";
echo "<script>alert('Sua atv foi cadastrada');";

header("Location: /edit_perfil.php");