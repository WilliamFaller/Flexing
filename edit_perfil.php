<?php
echo'<link rel="stylesheet" href="./style2.css">';

    include('db/connect.php');
    include("footer.php");

    session_start();
    if(isset($_SESSION["LOG"])){

        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];
        
    } else {
        header('Location: login.php');
    }

$q = $conectar->query("SELECT * FROM usuarios WHERE username = '$user'");
$info = mysqli_fetch_array($q);

   $user = $info["username"];
   $atv = $info["atv"];
   $metas = $info["metas"];
   $foto = $info["avatar"];

   if($metas == null or $metas == "" or $metas == " ") $metas = "cadastre sua meta";
   if($atv == null or $atv == "" or $atv == " ") $atv = "cadastre sua atividade favorita";

echo'
<!doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
                <link href="" rel="stylesheet">
            <style>
                .profile-head {
                    transform: translateY(5rem)
                 }

                .cover {
                    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
                    background-size: cover;
                    background-repeat: no-repeat
                   }

                body {
                    background: #654ea3;
                    background: linear-gradient(to right, #000069, #4f4fff);
                    min-height: 100vh
                   }

                html{

                    overflow-x:hidden;
                    }

            </style>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript"></script>
                            </head>
                    <body oncontextmenu="return false" class="snippet-body"><br>
                            <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar pro menu</a></div>
                                <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">

                    <div class="profile mr-3"><img src="'.$foto.'" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" onclick="deletar()" class="btn btn-outline-dark btn-sm btn-block">Deletar Perfil</a></div>
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$user.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Desde: '.$info ["data_inscri"].'</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$info["num_follows"].'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Seguidores</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Metas: '.$metas.'</p>
                    <p class="font- mb-0">Atividades Favoritas: '.$atv.'</p>

                    <form action="db/metas.php">
                    <p class="font- mb-0">Metas:<input name="campo1">&nbsp<button class="btn-signin"> Salvar</button></p>
                    </form>
                    <form action="db/atv.php">
                    <p class="font- mb-0">Atividades Favoritas:<input name="campo2">&nbsp<button class="btn-signin"> Salvar</button></p>
                    </form>
                    <form action="db/nome.php">
                        <p class="font- mb-0">Nome de usuario: <input name="campo3">&nbsp<button class="btn-signin"> Salvar</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br>


<script type="text/javascript">
    function deletar(){
Swal.fire({
  title: "Tem certeza que deseja deletar ?",
  text: "Não é possivel reverter isto",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Sim, deletar",
  cancelButtonText: "Cancelar!"
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = `db/delete.php`
        Swal.fire(
          "Deletado!",
          "Sua conta foi deletada com sucesso"
    )
  }
})
}
</script>
                            </body>
                        </html>';

            
        include("footer.php");


?>

