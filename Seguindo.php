<?php 

session_start();

    if(isset($_SESSION["LOG"])){

        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];

      } else {
        header('Location: login.php');
    }

include ('base.php');
include ('db/connect.php');


$sql = "SELECT * FROM usuarios WHERE username ='$user';";
        
        $q = $conectar->query($sql);

        if($q->num_rows < 0){
            echo '  <ul class="w3-ul w3-card-4" style="background-color: #fff">
    <li class="w3-bar">
      <span onclick="this.parentElement.style.display="none" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
      <img src="imgs/perfil.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large">Mike</span><br>
        <span>Web Designer</span>
      </div>
    </li>';
        }
        
        if ($q->num_rows > 0) {

          

                 $q = $conectar->query("SELECT * FROM usuarios WHERE username = '$user'");

while($info = mysqli_fetch_array($q)):

    $seg_sql = $info["seguindo"];

  endwhile;

  echo'<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  h4 {
    color: #0707ab;
  }

  li a, .dropdown-btn {
  display: inline-block;
  color: #fff;
  text-align: center;
  padding: 18px 22px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropdown-btn {
  background-color: #f5f5f5;
  color: #2727db;
}

</style>

  </head>
  

<body><br>

 <div class="w3-container">
  <h2>SEGUINDO</h2>';

$seg = explode(",", $seg_sql);
foreach($seg as $s){

$info_friends = $conectar->query("SELECT * FROM usuarios WHERE username = '$s'");

if(isset($s)){
  if($s == null or $s == "") {

     echo '

   <ul class="w3-ul w3-card-4" style="background-color: #fff">
    <li class="w3-bar">
      <span onclick="this.parentElement.style.display="none" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
   
            <img src="imgs/perfil.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">      
      <div class="w3-bar-item">
          <span class="w3-large"><h4>Você nao segue ninguem!</h4></span>
        <span></span>
      </div>
    </li>

    
</body>
</html>

 ';

  }else{


while($info = mysqli_fetch_array($info_friends)):

    $metas = $info["metas"];

  endwhile;


 echo '

   <ul class="w3-ul w3-card-4" style="background-color: #fff">
 <a href="amigos.php?user_search='.$s.'" style=" display: flex; color: #0707ab; text-align: center; padding: 1px 1px; text-decoration: none">
    <li class="w3-bar">

      <span onclick="this.parentElement.style.display="none" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
   
            <img src="imgs/perfil.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">      
      <div class="w3-bar-item">
          <span class="w3-large"><h4>'.$s.'</h4></span>
        <span>'.$metas.'</span>
      </div>

    </li>

    </a>
</body>
</html>

 ';

}

}

}

}
?>