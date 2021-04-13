<?php
//Conexion con la Base de Datos remota 
session_start();
$servername = "107.180.28.96";     //IP SERVIDOR
$server_user = "emilianocm";      //NOMBRE DE USUARIO DEL SERVIDOR
$server_pass = "emi250118";        //CONTRASEÑA DEL SERVIDOR
$dbname = "sintenedor";             //NOMBRE DE LA BASE DE DATOS DEL SV
$name = $_SESSION['name'];          //nombre de usuario de la pagina
$role = $_SESSION['role'];          //rol del usuario en la pagina
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>