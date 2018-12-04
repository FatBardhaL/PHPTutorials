<?php

	require 'f116_Core.php';

	//echo $http_referer;     afishohet:f116_LogOut_Index.php

	//Ketu e shkatrrojm sesionin:
	session_destroy();
	echo("<script>location.href = '$http_referer';</script>");

?>