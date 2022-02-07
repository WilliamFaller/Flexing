<?php
include("db/connect.php");
session_start();

    if(isset($_SESSION["LOG"])){

        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];

      } else {

        header('Location: /login.php');
    }

$nome = $_POST["campo1"];
$rua = $_POST["campo2"];
$horario = $_POST["campo3"];
$atv = $_POST["campo4"];


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}

if($check_name != 0){
    echo "<script>alert('Esse nome de usuario ja e usado.');";
    echo "location.href='/flexing/registro_parque.php'</script>";
    return;
}

    $senha_real = null;
    $user = null;


mysqli_query($conectar,"INSERT INTO parques (parque_name, horario, rua, foto, atv_parques) VALUES ('$nome',  '$horario', '$rua', 'imgs/', '$atv')") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "O parque foi cadastrado com sucesso!";
echo "<script>alert('O parque foi cadastrado com sucesso!');";
header("Location: /registro_parques.php");