<?php

echo "Carregando...";
session_start();

if(isset($_SESSION["LOG"])){

		$user = $_SESSION["LOG"]["User"];
		$nome = $_GET["campo3"];

    } else {
        header('Location: /login.php');
    }


include ('connect.php');


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}


mysqli_query($conectar,"UPDATE usuarios SET username = '$nome' WHERE username = '$user';") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "Atv cadastrada!";
echo $atv;
echo $user;
echo "<script>alert('Sua atv foi cadastrada');";

header('Location: logout.php');