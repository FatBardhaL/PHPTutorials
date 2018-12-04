<!DOCTYPE html>
<html>
<head>
	<title>Include ne menyr dinamike me AJAX</title>
	<script type="text/javascript">

	//Include ne menyr dinamike me AJAX

		function load(thediv,thefile){
			// var xmlhttp;
				//Se pari kontrollojm se a kthen pergjigje:
			if(window.XMLHttpRequest){
					//Nese kthen pergjigje, ateher pergjigjen e saj e rujajm ne variablen: xmlhttp
					//AJAX eshte CASESENSITIV dhe per kete duhet shkruar shkronje per shkronje fjala ne menyr korrekte
				xmlhttp = new XMLHttpRequest();
			}else{
					//Nese nuk kthen pergjigje ateher testo edhe kodin per browserat e vjeter:
			    	// code for older browsers
			    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			    		//innerHTML= tregon qe mbrenda divit adiv kemi vendosur html
			    		//responseText= i themi kthe tekstin
			      document.getElementById(thediv).innerHTML = xmlhttp.responseText;
			    }
			};
			xmlhttp.open("GET",thefile, true);
			xmlhttp.send();
		}
	</script>
</head>
<body>

		<input type="submit" onclick="load('adiv','f124_Include.inc.php');" name="">
		<div id="adiv">
			<p>Include ne menyr dinamike me AJAX</p>
		</div>

</body>
</html>