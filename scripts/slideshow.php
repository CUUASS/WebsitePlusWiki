<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	$imagesCsvFile = $root . "/images/slideshow/images.csv";
	if (($handle = fopen($imagesCsvFile, "r")) !== FALSE) {
		echo "<div class='w3-content w3-display-container' style='max-width:10000px'>\n";
		while (($image = fgetcsv($handle, 1000, ",")) !== FALSE) {
			echo "<img class='mySlides' src='" . $image[1] . "' alt='" . $image[0] . "' style='width:100%'>\n";
		}
		echo "<div class='w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle' style='width:100%'>\n";
		echo "<div class='w3-left w3-hover-text-khaki' onclick='plusDivs(-1)'>&#10094;</div>\n";
		echo "<div class='w3-right w3-hover-text-khaki' onclick='plusDivs(1)'>&#10095;</div>\n";
		$handle = fopen($imagesCsvFile, "r");
		$button = 1;
		while (($image = fgetcsv($handle, 1000, ",")) !== FALSE) {
			echo "<span class='w3-badge demo w3-border w3-transparent w3-hover-white' onclick='currentDiv($button)'></span>\n";
			$button++;
		}
		fclose($handle);
		echo "</div>\n";
		echo "</div>\n";
	} else {
		echo "<p>Error: 'images/slideshos/images.csv' could not be found'</p>";
	}
?>
