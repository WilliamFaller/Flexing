
<html>
  <head>
    <meta charset="utf-8">
    <title >Flexing</title> 
    <link href="script.css" rel="stylesheet">

<style type="text/css">
  html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

</style>

<script type="text/javascript" src="tabuada.js"> </script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

  </head>
  
  <body>
                  <!--Navbar-->
<nav>
  <div class="navbar">
    <ul>
                     <!--Esquerda da Navbar-->
        <li><img src="imgs/flexing.png" width="180px" height="90px"></li>

        <li><a href="index.php"><div>
          <img src="imgs/home.png" width="45px" width="45px"></div>Home</a></li>

        <li><a href="perfil.php"><div>
          <img src="imgs/perfil2.png" width="45px" width="45px"></div>Perfil</a></li>

        <li><a href="calendario/index.php"><div>
          <img src="imgs/calendario.png" width="45px" width="45px"></div>Calendario</a></li>

            <li><a href="#" onclick="bagulho()"><div>
               <img src="imgs/add.png" width="45px" width="45px"></div>Adicionar Amigos</a></li>
          </li>

          <li style="float: right;"><a href="notificacoes.php"><div>
            <img src="imgs/noti.png" width="45px" height="45px"></div><span class="w3-badge">!</span></a>
          </li>




        <li class="dropdown" style="float: right"><a href="#" class="dropdown-btn"><div>
          <img src="imgs/seta.png" width="45px" width="45px"></div> </a>
          <div class="dropdown-menu">
            <a href="edit_perfil.php">Configurações</a>
            <a href="info.php">Info</a>
            <a href="https://www.instagram.com/flexing_projeto/">Instagram</a>
            <a href="db/logout.php">Logout</a></li>
            
          
        </ul>
        </div>                   
      </div>

      </nav>
      <script>
        function bagulho(){
        Swal.fire({
  title: 'Digite o nome de seu amigo',
  input: 'text',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'Procurar',
  cancelButtonText: 'Sair',
  showLoaderOnConfirm: true,
  preConfirm: (res) => {
    window.location.href = `amigos.php?user_search=${res}`
  }
        })
        }

   </script>
       

<?php include("footer.php")?>

</body></html>