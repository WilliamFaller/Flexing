<?php
include("connect.php");
session_start();
$email = $_POST["mail"];
$senha = $_POST["senha"];
$check_mail = mysqli_num_rows($conectar->query("SELECT email FROM usuarios WHERE email = '$email';"));

if($check_mail == 0){
    echo "<script>alert('Nao ha nenhum registro com esse email.');";
    echo "location.href='/login.php'</script>";
    return;
}

$senha_real = null;
$user = null;
$q = $conectar->query("SELECT * FROM usuarios WHERE email = '$email'");
while($info = mysqli_fetch_array($q)):
    $senha_real = $info["senha"];
    $user = $info["username"];
endwhile;
if($senha_real == null or $user == null){
    echo "<script>alert('Ocorreu um erro ao obter sua senha.');";
    echo "location.href='/index.php'</script>";
    return;
}
if(password_verify($senha, $senha_real)) {
    $_SESSION["LOG"]["Login"] = $email;
    $_SESSION["LOG"]["User"] = $user;
    $_SESSION["LOG"]["Senha"] = $senha_real;
    echo "<script>alert('Voce foi logado com sucesso.');";
    sleep(1);
    header("Location: /index.php");
    return;
}else{
    echo "<script>alert('A senha esta incorreta.');";
    echo "location.href='/index.php'</script>";
    return;
}