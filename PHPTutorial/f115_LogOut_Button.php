<?php

	require 'f115_Core.php';

	//echo $http_referer;     afishohet:f115_LogOut_Index.php

	//Ketu e shkatrrojm sesionin:
	session_destroy();
	echo("<script>location.href = '$http_referer';</script>");

?>