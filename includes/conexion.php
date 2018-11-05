<?php 

$servidor = 'localhost';
$usuarios = 'root';
$password = '12345';
$basededatos = 'blog_master';

$db = mysqli_connect($servidor,$usuarios,$password,$basededatos);

mysqli_query($db,"SET NAMES 'utf8'");



?>