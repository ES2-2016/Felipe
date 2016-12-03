<?php 
require_once("_con.php");
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))){
	echo("campos inválidos");      	
	header("Location: index.html"); 
	exit;
}

$dbc = mysqli_connect($host,$user,$pass, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";

$retornoQuery= mysqli_query($dbc, $query);

$row=mysqli_fetch_row($retornoQuery);
// echo ($row[1]);


if (isset($row)){
	$limit = 0;
	session_start();
	// var_dump($row);

	$_SESSION['usuario']['nome'] = $row[0];
	$_SESSION['usuario']['login'] = $row[1];
	$_SESSION['usuario']['senha'] = $row[2];
	$_SESSION['usuario']['data'] = $row[3];
	$_SESSION['usuario']['sexo'] = $row[4];
	$_SESSION['usuario']['rg'] = $row[5];
	$_SESSION['usuario']['mensalidade'] = $row[6];

	while (count($row) > $limit )
	{
		echo($row[$limit]);
		echo("<br>");
		$limit= $limit+1;
	}
	
	header('Location: usuario/index.php');
}
if (isset($_GET["logout"])) {
	session_unset();
	session_destroy();
	header('Location: index.html');
	die('Redirect');
}

?>