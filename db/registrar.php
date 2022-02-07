<?php
include("connect.php");
session_start();

$nome = $_POST["campo1"];
$email = $_POST["campo2"];
$senha = $_POST["campo3"];
$hoje = date('d/m/Y');

$cript = password_hash($senha, PASSWORD_BCRYPT);

$check_user = mysqli_num_rows($conectar->query("SELECT username FROM usuarios WHERE username = '$nome';"));
$check_mail = mysqli_num_rows($conectar->query("SELECT email FROM usuarios WHERE email = '$email';"));
$id = mysqli_num_rows($conectar->query("SELECT id FROM usuarios WHERE email = '$email';"));

$hoje = date('d/m/Y');

if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}

if($check_user != 0){
    echo "<script>alert('Esse nome de usuario ja e usado.');";
    echo "location.href='/flexing/registro.php'</script>";
    return;
}
if(strlen($nome) < 3){
    echo "<script>alert('O nome de usuario deve conter ao menos 3 caracters.');";
    echo "location.href='/flexing/registro.php'</script>";
    return;
}
if($check_mail != 0){
    echo "<script>alert('Esse email ja esta sendo usado.');";
    echo "location.href='/flexing/registro.php'</script>";
    return;
}
if(strlen($senha) < 8){
    echo "<script>alert('A senha precisa conter no minimo 8 digitos.');";
    echo "location.href='/flexing/registro.php'</script>";
    return;
}
if(is_numeric($senha)){
    echo "<script>alert('A senha precisa conter letras.');";
    echo "location.href='/flexing/registro.php'</script>";
    return;
}
    $senha_real = null;
    $user = null;

mysqli_query($conectar,"INSERT INTO usuarios (username, email, senha, avatar, metas, num_follows, data_inscri) VALUES ('$nome', '$email', '$cript','imgs/perfil.jpg', 'Defina uma meta', '0', '$hoje')") or die ("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "Cliente cadastrado com sucesso!";
echo "<script>alert('Você foi cadastrado com sucesso');";
header("Location: /login2.php");