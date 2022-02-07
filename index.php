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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" href="script.css"/>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="template.css" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
        <link rel="stylesheet" type="text/css" href="demo.css" />
        <style>

        body{
          background-color: #0005a1;
          display: block;
          margin-left: auto;
          margin-right: auto }

        </style>

        </head>

        <body id="markers-on-the-map">

<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work" style="color: #fff;background-color: #0005a1;">


      <div class="w3-container" style="border-radius: 12px;margin-left: auto; margin-right: auto;background-color: #000367; width:70%; "><img src="imgs/flexing.png" style="margin-left: auto; margin-right: auto; display: block;" width="180px" height="90px">
         <div id="map" style="height:55%; width:100%; margin-left: auto; margin-right: auto; margin-top: 15px;"></div>
            <script type="text/javascript">var apikey = 'H6XyiCT0w1t9GgTjqhRXxDMrVj9h78ya3NuxlwM7XUs';</script>
    <script type="text/javascript" src='demo.js'></script><a><img src="imgs/info.png" onclick="info()" style="margin: 5px 3px 5px;" width="50px" height="50px"></a>
  </div>
  </div>
</div>
</div>


<?php  include("footer.php")?>
        </body>
</html>



