<?php
session_start();

if(isset($_SESSION["LOG"])){
		$user = $_SESSION["LOG"]["User"];

    } else {

        header('Location: /login.php');
    }

include ('connect.php');

if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conectar,"DELETE FROM usuarios WHERE username = '$user';") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);

header("Location: /login.php");

