<?php
	include_once "db.php";
	include_once "article.php";

	$dbManager = new DatabaseConnectionManager();
	$dbManager->openConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHPLeif - Konsten att Leifa ur..</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/main.js"></script>

	<header><h1>Leif</h1></header>
	
	<nav>
		<ul class="mainNavigation">
			<li><a href="#">Om Leif</a></li>
			<li><a href="#">Oljud</a></li>
			<li><a href="#">Ungdomar</a></li>
			<li><a href="#">Folk i allmänhet</a></li>
			<li><a href="#">Hytter med näven</a></li>
		</ul>
	</nav>

	<main>
		<div class="container">
			<div class="mainContainer">
				<div class="mainContent">
					<?php
						$article = new Article($dbManager);
						$article->printAll();
					?>
				</div>
				
				<div class="divider">
				</div>

				<aside class="mainInfo">
					<div class="mainInfoBox">
						Info
					</div>
				</aside>
			</div>
		</div>
	</main>

	<footer></footer>

	
</body>
</html>
