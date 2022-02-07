<?php
include ("db/connect.php");
    session_start();
    if(isset($_SESSION["LOG"])){
        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];

    } else {
        header('Location: login.php');
    }

    include_once("base.php");

            $check_id = $conectar->query("SELECT * FROM usuarios WHERE username = '$user';");
        $r = mysqli_fetch_array($check_id);
        $id_usuario = $r["id"];



                    $check_id = $conectar->query("SELECT * FROM noti WHERE id_seguidor = '$id_usuario';");
        $r = mysqli_fetch_array($check_id);
        $titulo = $r["titulo"];
        $desc = $r["descricao"];

echo'
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
<body>';
echo'
  <div class="att">
  <h3>Notificações</h3></div>
<div class="info">
<h3>'.$titulo.'</h3><h4> - '.$desc.'</h4></div><br>
<?php include("footer.php") ?>
</body>
</html>';
?>