<?php

function safeText($text) {
	$text = trim($text);
	$text = stripslashes($text);
	$text = htmlspecialchars($text);
	return $text;
	
}


?>