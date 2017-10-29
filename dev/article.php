<?php

class Article {
	function printArticle($title, $content) {
		$articleOutput = "<article class=\"blogArticle\">";
		$articleOutput .= "<h1>" . $title . "</h1>";
		$articleOutput .= "<i>" . $content . "</i>";
		$articleOutput .= "</article>\n";

		echo $articleOutput;
	}
}

?>