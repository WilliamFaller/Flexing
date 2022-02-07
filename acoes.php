	<?php
    include('db/connect.php');
	session_start();

		if(isset($_SESSION["LOG"])){

    	$user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];
        $username = $_SESSION["Search"];        

    } else {
        header('Location: login.php');
    }



        $check_id = $conectar->query("SELECT * FROM usuarios WHERE username = '$user';");
        $r = mysqli_fetch_array($check_id);
        $id_usuario = $r["id"];
        if($id_usuario != ""){


        if (!$conectar) {
              die("Connection failed: " . mysqli_connect_error());
        }

    }

        $check_id2 = $conectar->query("SELECT * FROM usuarios WHERE username = '$username';");
        $r = mysqli_fetch_array($check_id2);
        $id_seguidor = $r["id"];
        if($id_seguidor != ""){


        if (!$conectar) {
              die("Connection failed: " . mysqli_connect_error());
        }

    }


        $titulo = "$user seguiu você!";
        $desc = "O usuario $user começou a seguir você!";
        $lido = "nao";

        echo $titulo;
        echo $id_usuario;
        echo $id_seguidor;





    $q = $conectar->query("SELECT * FROM usuarios WHERE username = '$username'");
while($info = mysqli_fetch_array($q)):
    $seguidores = $info["seguidores"];
endwhile;    

	$q2 = $conectar->query("SELECT * FROM usuarios WHERE username = '$user'");
while($info2 = mysqli_fetch_array($q2)):
    $seguindo = $info2["seguindo"];
endwhile;

if($seguidores === null){
  $seguidores = $user;
}else{
 $seguidores .= ",".$user;
}

if($seguindo === null){
  $seguindo = $username;
}else{
 $seguindo .= ",".$username;
}

if (!$conectar) {
      die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conectar,"UPDATE usuarios SET seguidores = '$seguidores' WHERE (`username` = '$username');") or die ("Erro ao tentar cadastrar registro");

mysqli_query($conectar,"UPDATE usuarios SET seguindo = '$seguindo' WHERE (`username` = '$user');") or die ("Erro ao tentar cadastrar registro");

mysqli_query($conectar,"UPDATE usuarios SET num_follows = num_follows + 1 WHERE (`username` = '$username');") or die ("Erro ao tentar cadastrar registro");

mysqli_query($conectar,"INSERT INTO noti (id_usuario, id_seguidor, titulo, descricao) VALUES ('$id_usuario', '$id_seguidor', '$titulo', '$desc')") or die ("Erro ao tentar cadastrar registro");

header('Location: amigos.php?user_search='.$username.'');



