<!DOCTYPE html>
<html>
<head>
	<title>Serch Form With Ajax</title>
	<script type="text/javascript"> 
		function findmatch(){
				//Se pari kontrollojm se a ka reagenc:
			if(window.XMLHttpRequest){
					//Nese kthen pergjigje, ateher pergjigjen e saj e rujajm ne variablen: xmlhttp
					//AJAX eshte CASESENSITIV dhe per kete duhet shkruar shkronje per shkronje fjala ne menyr korrekte
				xmlhttp = new XMLHttpRequest();
			}else{
					//Nese nuk kthen pergjigje ateher testo edhe kodin per browserat e vjeter:
			    	// code for older browsers
			    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
				//Tani kontrollojm per gjendjen apo detyren e caktuar:
			xmlhttp.onreadystatechange = function() {
					//Ketu kontrollojm per gjendjen e State:
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			    		//innerHTML= tregon qe mbrenda divit adiv kemi vendosur html
			    		//responseText= i themi kthe tekstin
			      document.getElementById('results').innerHTML = xmlhttp.responseText;
			    }
			};				
								//Mer vjeren e dhene ne input
								//dokumenti.search = nga dokumenti i formes search
								//search_text.value = nga vlera e inputit = search_text
			xmlhttp.open('GET','f125_SearchLive3_WithAJAX.php?search_text='+document.search.search_text.value, true);
			xmlhttp.send();


		}
	</script>
</head>
<body>
	<form id="search" name="search"> 
		<p>Tape a name:</p>
		<br/>
									<!--onkeydown= thot qe kete funksion aktivizo per cdo shkronje qe shkuhet ne search-->
		<input type="text" name="search_text" onkeyup="findmatch();">
									<!--Ne rast se ne vend te onkeyup perdoret onkeydown, ateher nese shkruajm tri shkronja do te na afishohen dy, gjithmon nje shkronje me pak, apo shkronja e fundit nuk shfaqet.-->
	</form>

	<div id="results">
	</div>
</body>
</html>