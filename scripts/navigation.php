<?php
	$pagesCsvFile = $_SERVER['DOCUMENT_ROOT'] . "/pages/pages.csv";
	if (($handle = fopen($pagesCsvFile, "r")) !== FALSE) {
		echo '<div class="w3-bar w3-dark-grey">';
		echo '<div class="w3-content w3-center">';
		echo '<div class="w3-bar w3-dark-grey">';
		while (($page = fgetcsv($handle, 1000, ",")) !== FALSE) {
			echo "<a href='" . $page[1] . "' ";
			echo "target='" . $page[2] . "' ";
			echo "class='w3-bar-item w3-button w3-mobile w3-hover-black w3-padding-8 w3-large";
			if ($page[1] == $_SERVER['PHP_SELF']) {
				echo " w3-green";
			}
			echo "'>";
			echo $page[0] . "</a>";
		}
		fclose($handle);
		echo "</div>";
		echo "</div>";
		echo "</div>";
	} else {
		echo "
		<div class='w3-panel w3-red'>
		  <h3>Error!</h3>
		  <p>Could not find '$pagesCsvFile'</p>
		</div>";
	}
?>
