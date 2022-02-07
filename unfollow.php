	<?php

	echo "Carregando...";
	session_start();

		if(isset($_SESSION["LOG"])){

    	$user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];
        $username = $_SESSION["Search"];

        $lista = null; 
$lista2 = null; 

        echo $username;

	    } else {
        header('Location: login.php');
    }

    include_once("base.php");
    include('db/connect.php');


    $q = $conectar->query("SELECT * FROM usuarios WHERE username = '$username'");
while($info = mysqli_fetch_array($q)):
    $seguidores = $info["seguidores"];
endwhile;   

$lista = explode(",", $seguidores);

if($lista != null){

$search = array_search($user, $lista);
if($search !== null){
 unset($lista[$search]);


 $lista = implode(",", $lista);
}

	$q2 = $conectar->query("SELECT * FROM usuarios WHERE username = '$user'");
while($info2 = mysqli_fetch_array($q2)):
    $seguindo = $info2["seguindo"];
endwhile;

$lista2 = explode(",", $seguindo);


$search2 = array_search($username, $lista2);
if($search !== null){
 unset($lista2[$search2]);
 $lista2 = implode(",", $lista2);
}

if($lista == "" or $lista == " "){
 $lista = null;
}

if($lista2 == "" or $lista2 == " "){
 $lista2 = null;
}

echo $lista;
echo $lista2;


if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}

}


mysqli_query($conectar,"UPDATE usuarios SET seguidores = '$lista' WHERE (`username` = '$username');") or die ("Erro ao tentar cadastrar registro");

mysqli_query($conectar,"UPDATE usuarios SET seguindo = '$lista2' WHERE (`username` = '$user');") or die ("Erro ao tentar cadastrar registro");

mysqli_query($conectar,"UPDATE usuarios SET num_follows = num_follows - 1 WHERE (`username` = '$username');") or die ("Erro ao tentar cadastrar registro");

header('Location: amigos.php?user_search='.$username.'');


?>