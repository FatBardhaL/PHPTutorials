<?php
	$gd_info = gd_info();
	$version = $gd_info["GD Version"];

	echo "Your GD version is: ".$version;
?>