<?php

?>

<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


     <style type="text/css">

.frame {
  height: 575px;
  width: 430px;
  background:
    linear-gradient(
    rgba(35,43,85,0.75),
    rgba(35,43,85,0.95)),
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/clouds-cloudy-forest-mountain.jpg) no-repeat center center;
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
  border-top: solid 1px rgba(255,255,255,.5);
  border-radius: 5px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
  overflow: hidden;
  transition: all .5s ease;
}


.frame-short {
  height:600px;
  width: 350px;
  margin-top: 50px;
  box-shadow: 0px 2px 7px rgba(0,0,0,0.1);

}

.nav {
  width: auto;
  height: auto;
  padding-top: 40px;
  opacity: 1;
  transition: all .5s ease;
}

.nav-up {
  transform: translateY(-100px);
  opacity: 0;
}

li {
  padding-left: 10px;
  font-size: 18px;
  display: inline;
  text-align: left;
  text-transform: uppercase;
  padding-right: 10px;
  color: #ffffff;
}

.signin-active a {
  padding-bottom: 10px;
  color: #ffffff;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
  transition: all .25s ease;
  cursor: pointer;
}

.signin-inactive a {
  padding-bottom: 0;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  border-bottom: none;
  cursor: pointer;
}

.signup-active a {
  cursor: pointer;
  color: #ffffff;
  text-decoration: none;
  border-bottom: solid 2px #1059FF;
  padding-bottom: 10px;
}

.signup-inactive a {
  cursor: pointer;
  color: rgba(255,255,255,.3);
  text-decoration: none;
  transition: all .25s ease;
}

.form-signin {
  width: 280px;
  height: 250px;
  font-size: 16px;
  font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 40px;
  transition: opacity .5s ease, transform .5s ease;
}

.form-signin-left {
  transform: translateX(-400px);
  opacity: .0;
}

.form-signup {
  width: 50px;
  height: 375px;
  font-size: 16px;
  font-weight: 300;
  padding-left: 37px;
  padding-right: 37px;
  padding-top: 55px;
  position: relative;
  top: -375px;
  left: 400px;
  opacity: 0;
  transition: all .5s ease;
}

.form-signup-left {
  transform: translateX(-399px);
  opacity: 1;
}

.form-signup-down {
  top: 0px;
  opacity: 0;
}

.success {
  width: 80%;
  height: 150px;
  text-align: center;
  position: relative;
  top: -890px;
  left: 450px;
  opacity: .0;
  transition: all .8s .4s ease;
}

.success-left {
  transform: translateX(-406px);
  opacity: 1;
}

.successtext {
  color: #ffffff;
  font-size: 16px;
  font-weight: 300;
  margin-top: -35px;
  padding-left: 37px;
  padding-right: 37px;
}

#check path {
    stroke: #ffffff;
    stroke-linecap:round;
    stroke-linejoin:round;
    stroke-width: .85px;
    stroke-dasharray: 60px 300px;
    stroke-dashoffset: -166px;
    fill: rgba(255,255,255,.0);
    transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s;
}

#check.checked path {
    stroke-dashoffset: 33px;
    fill: rgba(255,255,255,.03);
}

.form-signin input, .form-signup input {
  color: #ffffff;
  font-size: 13px;
}

.form-styling {
  width: 100%;
  height: 35px;
  padding-left: 15px;
  border: none;
  border-radius: 20px;
  margin-bottom: 20px;
  background: rgba(255,255,255,.2);
}

label {
  font-weight: 400;
  text-transform: uppercase;
  font-size: 13px;
  padding-left: 15px;
  padding-bottom: 10px;
  color: rgba(255,255,255,.7);
  display: block;
}

:focus {outline: none;
}

.form-signin input:focus, textarea:focus, .form-signup input:focus, textarea:focus {
    background: rgba(255,255,255,.3);
    border: none; 
    padding-right: 40px;
    transition: background .5s ease;
 }

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  display: none;
}

[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 85px;
  padding-top: 2px;
  cursor: pointer;
  margin-top: 8px;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}

[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  width: 65px; 
  height: 30px;
  background: rgba(255,255,255,.2);
  border-radius: 15px;
  left: 0; 
  top: -3px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 10px; 
  height: 10px;
  background: rgba(255,255,255,.7);
  border-radius: 50%;
  top: 7px; 
  left: 10px;
  transition: all .2s ease;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background: #0F4FE6; 
}

[type="checkbox"]:checked + label:after {
  background: #ffffff;
  top: 7px; 
  left: 45px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s ease;
}

[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px;
  color: rgba(255,255,255,.7);
}

[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #ffffff;
}

[type="checkbox"]:focus + label:before {
  box-sizing: border-box;
  margin-top: -1px;
}

.btn-signup {
  float: left;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: #ffffff;
  padding-top: 8px;
  width: 100%;
  height: 35px;
  border: none;
  border-radius: 20px;
  margin-top: 23px;
  background-color: #1059FF;
}

.btn-signin {
  float: left;
  padding-top: 8px;
  width: 100%;
  height: 35px;
  border: none;
  border-radius: 20px;
  margin-top: -8px;
}

.btn-animate {
  float: left;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: rgba(255,255,255, 1);
  padding-top: 8px;
  width: 100%;
  height: 35px;
  border: none;
  border-radius: 20px;
  margin-top: 23px;
  background-color: rgba(16,89,255, 1);
  left: 0px;
  top: 0px;
  transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s; 
}



button.btn-signup:hover, button.btn-signin:hover {
    cursor: pointer; 
    background-color: #0F4FE6;
    transition: background-color .5s; 
}

.forgot {
  height: 100px;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  padding-top: 24px;
  margin-top: -535px;
  border-top: solid 1px rgba(255,255,255,.3);
  transition: all 0.5s ease;
}

.forgot-left {
  transform: translateX(-400px);
  opacity: 0;
}

.forgot-fade {
  opacity: 0;
}

.forgot a {
  color: rgba(255,255,255,.3);
  font-weight: 400;
  font-size: 13px;
  text-decoration: none;
}

.welcome {
  width: 100%;
  height: 50px;
  position: relative;
  color: rgba(35,43,85,0.75);
  opacity: 0;
  transition: transform 1.5s ease .25s, opacity .1s ease 1s;
}

.welcome-left {
  transform: translateY(-780px);
  opacity: 1; 
}

.cover-photo {
  height: 150px;
  position: relative;
  left: 0px;  top: -900px;
  background:
    linear-gradient(
    rgba(35,43,85,0.75),
    rgba(35,43,85,0.95)),
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/landscape-nature-man-person.jpeg);
  background-size: cover;
  opacity: 0;
  transition: all 1.5s ease 0.55s;
}

.cover-photo-down {
  top: -575px;
  opacity: 1;
}

.profile-photo {
  height: 125px;
  width: 125px;
  position: relative;
  border-radius: 70px;
  left: 155px;
  top: -1000px;
  background: url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/nature-water-rocks-hiking.jpg);
  background-size: 100% 135%;
  background-position: 100% 100%;
  opacity: 0;
  transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
  border: solid 3px #ffffff;
}

.profile-photo-down {
  top: -636px;
  opacity: 1;
}

.btn-goback {
  position: relative;
  margin-right: auto;
  top: -400px;
  float: left;
  padding: 8px;
  width: 83%;
  margin-left: 37px;
  margin-right: 37px;
  height: 35px;
  border-radius: 20px;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  text-align: center;
  color: #1059FF;
  margin-top: -8px;
  border: solid 1px #1059FF;
  opacity: 0;
  transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
}

.btn-goback-up {
  top: -1080px;
  opacity: 1;
}

a.btn-goback:hover {
    cursor: pointer; 
    background-color: #0F4FE6;
    transition: all .5s; 
    color: #ffffff;
}


#refresh {
    position: fixed;
    bottom: 20px;
    right: 20px; 
    background-color: #ffffff;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
    padding: 13px 0 0 13px;
}

.refreshicon {
    fill: #d3d3d3;
    transform: rotate(0deg);
    transition: fill .25s ease, transform .25s ease;
}

.refreshicon:hover {
  cursor: pointer;
  fill: #1059FF;
  transform: rotate(180deg);
}

.center{
	float: center;
}


  </style>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="login.css" rel="stylesheet">
</head>
<body>

	<div class="container">
  <div class="frame frame-short">
    <div class="nav">
    	<div ng-app ng-init="checked = false">
    		<h2>Bem vindo ao Flexing</h2>
          <form class="form-signin" action="db/registrar_parque.php" method="post">
         <label for="username"> Nome do Parque</label><input class="form-styling" type=text required="required" name=campo1><br>
        <label for="mail"> Rua</label> <input class="form-styling" type=text required="required" name=campo2><br>
        <label for="password"> Horario(Horario: xx:xx - xx:xx)</label><input class="form-styling" type=text required="required" name=campo3><br>
        <label for="mail"> Possui quadras, pistas etc ?</label> <input class="form-styling" type=text required="required" name=campo4><br>
         <a href=""><button class="btn-signin">Registrar</button></a><br><br>
        </form>
  </div>
</div>
</div>
    
    </body>
</html>