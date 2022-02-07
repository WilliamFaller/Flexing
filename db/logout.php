<?php

session_start();
unset($_SESSION["LOG"]);
header("Location: /index.php");