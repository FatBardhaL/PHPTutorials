<!DOCTYPE html>
<html>
<head>
	<title>Update data with POST:</title>
	<script type="text/javascript">
		function insert(){
				//Ktu krijojm pjesen me AJAX:
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
				//Tani kontrollojm ndryshimet e gjendjes:
			xmlhttp.onreadystatechange = function() {
					//Ketu kontrollojm per gjendjen e State:
			    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			        document.getElementById('message').innerHTML = xmlhttp.responseText;
			    }
			};
			xmlhttp.open('GET','f126_UPDATEinc2_POST_withAJAX.php?text=Hello', true);
			//xmlhttp.open('GET','f126_UPDATEinc2_POST_withAJAX.php?search_text= '+document.search.search_text.value, true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
<!-- Ideja ketu eshte qe ti marim te dhenat permes input formes duke perdorur metoden GET,
							ato te dhena ti fusim ne funksion -->

	<p>INSERT-o:</p>
	<input id="text" name="text" type="text">
	<input type="button" value="Submit" onclick="insert();">
		<!--Ketu krijojm nje div i cili mer perditsimet nga fjalli                    
							//f126_UPDATEinc2_POST_withAJAX.php-->
	<div id="message">
		
	</div>
</body>
</html>