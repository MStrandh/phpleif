<?php

include_once "../debug.php";

if(isset($_POST["username"]) && isset($_POST["password"])) {
	$userName = $_POST["username"];
	$passWord = $_POST["password"];
	echo $userName . " - " . $passWord;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHPLeif - Konsten att Leifa ur..</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="../js/main.js"></script>

	<header><h1>Leif</h1></header>
	
	<?php include_once "../menu.php"; ?>

	<main>
		<div class="container">
			<div class="mainContainer">
				<div class="mainContent">
					<article class="blogArticle">
						<div class="blogArticleHeader">
							<h1>Logga in</h1>
						</div>
						<div class="blogArticleContent">
							<form action="login.php" method="post">
								Användanamn: <input type="text" name="username" value="Leif" placeholder="Leif" required><br>
								Lösenord: <input type="text" value="Leif" name="password" required><br>
								<button type="submit">Logga in</button>
							<form>
						</div>
					</article>

				</div>
			</div>
		</div>
	</main>

	<footer></footer>

	
</body>
</html>