<?php
    session_start();
    if(isset($_SESSION["LOG"])){
        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];
        
    } else {
        header('Location: login.php');
    }

    include('db/connect.php');
?>
<br>
<?php 
$id = $_GET['id'];

        $sql = "SELECT * FROM parques WHERE id = '$id';";

        $result = $conectar->query($sql);

        if($result->num_rows < 0){
            echo "<h2> Nenhum resultado para este nome</h2>";
        }
        
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

$nome = $row["parque_name"];
$foto = $row["foto"];
$horario = $row["horario"];
$rua = $row["rua"];
$atv = $row["atv_parques"];

   if($foto == null or $foto == "" or $foto == " " or $foto == "imgs/") $foto = "imgs/parque.jpg";

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
                    overflow-x: hidden;
                    overflow-y: hidden;
                   }
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">

                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar pro menu</a></div>

                            <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$nome.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i> </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$row["horario"].'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Horario</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Rua: '.$rua.'</p>
                    <p class="font- mb-0">Sobre o parque: '.$atv.'</p>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Fotos</h5><a href="#" class="btn btn-link text-muted"></a>
                </div>
                <div class="row">
                    <div class="col-lg-6 pl-lg-1"><img src="'.$foto.'" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>

                            </body>
                        </html>';



        
            }
        }
        else {
           echo "<h4>Ocorreu um erro ao acessar este parque, tente novamente e se não for possivel entre em contato conosco!</h4>";
        }
    
    

?>