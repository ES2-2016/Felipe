<?php 
require_once("_con.php");

$cadastrar = $_POST['cadastrar'];
$login_usuario = $_POST['login'];
$senha_usuario = MD5($_POST['senha']);
$nome_usuario = $_POST['nome'];
$data_nascimento_usuario = $_POST['data_nascimento'];
$sexo_usuario = $_POST['sexo'];
$mensalidade = $_POST['mensalidade'];
$rg_usuario = $_POST['rg'];

// Dependentes
	if(!empty($_POST['dependentes']))
		$dependentes = $_POST['dependentes'];
	    $hidden = $_POST['hidden'];	
	    var_dump($dependentes);
	//echo($dependentes[0]."<br>");

$dbc = mysqli_connect($host,$user,$pass, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "INSERT INTO usuario VALUES ('$nome_usuario', '$login_usuario', '$senha_usuario', '$data_nascimento_usuario', '$sexo_usuario', '$rg_usuario', '$mensalidade')";

mysqli_query($dbc, $query);
mysqli_close($dbc);
/*
if($insert){
header("Location: http://localhost/");
}else{
	echo"<script lenguage='javascript' type='text/javascript'>alert('Erro no cadastro'); window.location.href='../index.php';</script>";
}*/








?>
