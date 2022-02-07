<?php
    session_start();
    if(isset($_SESSION["LOG"])){
        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];

    

        
    } else {
        header('Location: login.php');
    }

    include_once("base.php");
?>

<html>
  <head>
    <meta charset="utf-8">
    <title >Flexing</title> 
    <link href="script.css" rel="stylesheet">

<style>
  .att{

    text-align: center;

  }
  
.info {
  background-color: white;
  width: 600px;
  border:  10px solid royalblue;
  border-radius: 10px;
  margin: 0;
  background: white;
  position: relative;
  top: 15%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%)

  }
h3{
  padding: 10px;
}
h4{
  padding:10px;
}


</style>
</head>
<body>

  <div class="att">
  <h3>Atualizações</h3></div>
<div class="info">
<h3>Versão 1.0</h3> <h4> - Ajustes finais</h4></div><br>
<div class="info">
<h3>Versão 0.9</h3> <h4> - Botões de Follow e Unfollow funcionando</h4></div><br>
<div class="info">
<h3>Versão 0.8</h3> <h4> - Adição dos parques ao mapa</h4></div><br>
<div class="info">
<h3>Versão 0.7</h3> <h4> - Botões de Follow e Unfollow funcionando</h4></div><br>
<div class="info">
<h3>Versão 0.6</h3> <h4> - Criação do perfil de usuario e pesquisa</h4></div><br>
<div class="info">
<h3>Versão 0.5</h3> <h4> - Importação do mapa</h4></div><br>
<div class="info">
<h3>Versão 0.4</h3> <h4> - Criação da Navbar</h4></div><br>
<div class="info">
<h3>Versão 0.3</h3> <h4> - Css do login</h4></div><br>
<div class="info">
<h3>Versão 0.2</h3> <h4> - Senhas Criptografadas e sistema de login</h4></div><br>
<div class="info">
<h3>Versão 0.1</h3> <h4> - Criação de Cadastro e link com banco de dados</h4></div><br>

<?php include("footer.php") ?>

</body>
</html>