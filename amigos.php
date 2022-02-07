<?php 

include_once("db/connect.php");

session_start();

    if(isset($_SESSION["LOG"])){

        $user = $_SESSION["LOG"]["User"];
        $pass = $_SESSION["LOG"]["Senha"];
        $mail = $_SESSION["LOG"]["Login"];

      } else {
        header('Location: login.php');
    }





if(isset($_GET['user_search'])){

$user_search = $_GET['user_search'];

                 $_SESSION["Search"] = $user_search;
        
        $sql = "SELECT * FROM usuarios WHERE username ='$user_search';";
        
        $result = $conectar->query($sql);

        if($result->num_rows < 0){
            echo "<h2> Nenhum resultado para este nome</h2>";
        }
        
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 $q = $conectar->query("SELECT * FROM usuarios WHERE username = '$user_search'");
while($info = mysqli_fetch_array($q)):
    $seguidores = $info["seguidores"];
    $atv = $info["atv"];
    $metas = $info["metas"];
    $foto = $info["avatar"];
    $data = $info["data_inscri"];
    $follows = $info["num_follows"];
  endwhile;



$lista = explode(",", $seguidores);

if(in_array($user, $lista)){
                      



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
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">
<br>
                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar para o menu</a></div>

                            <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="'.$foto.'" alt="..." width="130" class="rounded mb-2 img-thumbnail"><br>
            <form class="form-signin" action="unfollow.php" method="post">
             <button class="btn btn-outline-dark btn-sm btn-block "name="campo1" value="Seguir">Deixar de seguir</button>
</div>
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$user_search.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Desde: '.$data.'</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$follows.'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Seguidores</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Metas: '.$metas.'</p>
                    <p class="font- mb-0">Atividades Favoritas: '.$atv.'</p>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>';

            
    

} else {

 echo' <!doctype html>
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
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">
<br>
                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar para o menu</a></div>

                            <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="'.$foto.'" alt="..." width="130" class="rounded mb-2 img-thumbnail"><br>
            <form class="form-signin" action="acoes.php" method="post">
             <button class="btn btn-outline-dark btn-sm btn-block "name="campo1" value="Seguir">Seguir</button>
</div>
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$user_search.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Desde: '.$data.'</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$follows.'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Seguidores</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Metas: '.$metas.'</p>
                    <p class="font- mb-0">Atividades Favoritas: '.$atv.'</p>
                </div>
            </div>
            <!--
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>';
                        

                      }
                      
 
}

}



                      











} else {










    if (isset($_POST['username']))
    {
        $user_search = $_POST['username'];
        $_SESSION["Search"] = $user_search;
        
        $sql = "SELECT * FROM usuarios WHERE username ='$user_search';";
        
        $result = $conectar->query($sql);

        if($result->num_rows < 0){
            echo "<h2> Nenhum resultado para este nome</h2>";
        }
        
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {

                 $q = $conectar->query("SELECT * FROM usuarios WHERE username = '$user_search'");
while($info = mysqli_fetch_array($q)):
    $seguidores = $info["seguidores"];
    $atv = $info["atv"];
    $metas = $info["metas"];
    $foto = $info["avatar"];
    $data = $info["data_inscri"];
    $follows = $info["num_follows"];
  endwhile;



$lista = explode(",", $seguidores);

if(in_array($user, $lista)){
                      



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
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">
<br>
                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar para o menu</a></div>

                            <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="'.$foto.'" alt="..." width="130" class="rounded mb-2 img-thumbnail"><br>
            <form class="form-signin" action="unfollow.php" method="post">
             <button class="btn btn-outline-dark btn-sm btn-block "name="campo1" value="Seguir">Deixar de seguir</button>
</div>
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$user_search.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Desde: '.$data.'</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$follows.'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Seguidores</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Metas: '.$metas.'</p>
                    <p class="font- mb-0">Atividades Favoritas: '.$atv.'</p>
                </div>
            </div>
            <!--
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>';

            
    

} else {

 echo' <!doctype html>
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
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">
                              <br>
                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar para o menu</a></div>

                            <div class="row py-5 px-4">

    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="'.$foto.'" alt="..." width="130" class="rounded mb-2 img-thumbnail"><br>
            <form class="form-signin" action="acoes.php" method="post">
             <button class="btn btn-outline-dark btn-sm btn-block "name="campo1" value="Seguir">Seguir</button>
</div>
                    
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">'.$user_search.'</h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Desde: '.$data.'</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">'.$follows.'</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Seguidores</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Sobre</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font- mb-0">Metas: '.$metas.'</p>
                    <p class="font- mb-0">Atividades Favoritas: '.$atv.'</p>
                </div>
            </div>
            <!--
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>';
                        

                      }
                      
 
}

}

} else {
echo'<!doctype html>
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
            </style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>

                            <body oncontextmenu="return false" class="snippet-body">

                                     <div class="mr-3" style="background-color: #fff; width: 180px; margin-left: -10px";><a href="index.php" class="btn btn-outline-dark btn-sm btn-block">Voltar para o menu</a></div>

                            <div class="row py-5 px-4">

<h1> Algo deu errado </h1>';
}

} 

?>