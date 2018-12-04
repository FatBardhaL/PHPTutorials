<?php
	$gd_info = gd_info();
	$version = $gd_info["GD Version"];

	echo "Your GD version is: ".$version;
	echo "<br/><br/><br/>";
	echo "<hr/>";
	foreach ($gd_info as $key => $value) {
		echo "Key=$key | Value=$value <br/><hr/>";
	}
?>