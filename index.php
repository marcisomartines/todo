<?php
require_once 'app/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charst="UTF-8">
	<title>To do Lista</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="list">
	<h1 class="header">To do.</h1>
	<ul class="items">
		<li>
			<span class="item">Fazer compras</span>
			<a href="#" class="done-buttom">Feito</a>
		</li>
		<li>
			<span class="item done">Learn php</span>
		</li>
	</ul>

	<form class="item-add" action="add.php" method="post">
		<input type="text" name="name" placeholder="Digite um novo item aqui." class="input" autocomplete="off" required />
		<input type="submit" value="Adicionar" class="submit">
	</form>
</body>
</html>
