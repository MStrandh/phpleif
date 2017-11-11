<?php
	include_once "debug.php";
	include_once "./db/DatabaseConnection.php";
	include_once "article.php";

	$dbManager = new DatabaseConnection();
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
	
	<?php include_once "menu.php"; ?>

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
